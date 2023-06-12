<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.user.login');
    }
    public function Register()
    {
        return view('auth.user.register');
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }
    
    public function index()
    {
        $users = User::all();
        $title = 'pesan';
        return view('admin.admin_pengguna', [
            'users' => $users, 'title' => $title
        ]);
    }

    public function handleProviderCallback()
    {
        
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'avatar' => $callback->getAvatar(),
            'email_verified_at' => date('Y:m:d H:i:s', time()),
        ];

        $user = User::firstOrCreate(['email' => $data['email']], $data);
        Auth::login($user, true);

        return redirect(route('welcome'));
    }

    public function Masuk(Request $request)
    {
        $loginField = $request->input('login');
        $password = $request->input('password');
        $remember = $request->has('remember');

        $user = User::where(function ($query) use ($loginField) {
            $query->where('email', $loginField)
                  ->orWhere('no_telp', $loginField)
                  ->orWhere('name', $loginField);
        })->first();

        if ($user && Hash::check($password, $user->password)) {
            
            if ($user->is_admin == 1) {
                
                Auth::login($user, $remember);
                $expiration = Carbon::now()->addMonth(1)->toDateTimeString();
                return redirect()->intended('/admin/dashboard')
                    ->withCookie(cookie('remember_token', $user->remember_token, $expiration));
            } else {
                
                Auth::login($user, $remember);
                $expiration = Carbon::now()->addMonth(1)->toDateTimeString();
                return redirect()->intended('/')
                    ->withCookie(cookie('remember_token', $user->remember_token, $expiration));
            }
        } else {
            return redirect()->back()->withErrors(['message' => 'Username, email, atau nomor telepon atau password salah.']);
        }
    }
    
}
