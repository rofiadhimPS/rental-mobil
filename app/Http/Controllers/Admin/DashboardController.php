<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Checkout;
use App\Models\Product;
use App\Models\User;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('Product')->get();
        $productCount = Product::count();
        $userCount =  User::where('is_admin', 0)->count();
        $totalPesananSelesai =  Checkout::where('status', 'selesai')->count();

        $title = 'Dashboard';
        return view('admin.admin_dashboard', [
            'checkouts' => $checkouts, 'title' => $title, 'userCount' => $userCount, 'productCount' => $productCount, 'totalPesananSelesai' => $totalPesananSelesai
        ]);
    }
    
    public function show()
    {
        
        $users = Auth::user();
        $title = 'Akun';

        return view('admin.admin_akun', ['users' => $users, 'title' => $title]);
    }

    public function update(Request $request){
        $user = Auth::user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->no_telp = $request->input('no_telp');
        $user->password = bcrypt($request->input('password'));

        $user->save();
        
        return redirect()->back();
    }
}
