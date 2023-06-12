<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('Product')->whereUserId(Auth::id())->get();
        $title = 'pesan';
        return view('user.dashboard', [
            'checkouts' => $checkouts, 'title' => $title
        ]);
    }
    public function show()
    {
        
        $userId = Auth::id();
        $title = 'pesan';

        $pesans = Checkout::where('user_id', $userId)
            ->orderBy('tanggal_pesan', 'asc')
            ->limit(1)
            ->get();

        return view('user.pesanan', ['pesans' => $pesans, 'title' => $title]);
    }
    
    public function menuAkun()
    {
        
        $user = Auth::user();

        return view('editakun', ['user' => $user]);
    }

    public function updateAkun(Request $request)
    {
        
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->no_telp = $request->input('no_telp');
        if($request->hasFile('avatar')){
            if ($user->avatar){
                $this->deleteAvatar($user->avatar);
            }
            
            $image = $request->file('avatar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/profil'), $imageName);
            $user->avatar = $imageName;
        }
        

        $user->save();
        
        return redirect()->back();
    }


    public function destroy($id)
{
    $checkout = Checkout::findOrFail($id);
    $checkout::destroy($id);
    $checkout->delete();

    return redirect()->back()->with('success', 'Pesanan berhasil dibatalkan');
}
    
}
