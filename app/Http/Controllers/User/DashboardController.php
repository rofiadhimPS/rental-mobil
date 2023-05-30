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

        $pesans = Checkout::where('user_id', $userId)
            ->orderBy('tanggal_pesan', 'asc')
            ->limit(1)
            ->get();

        return view('user.pesanan', ['pesans' => $pesans]);
    }
    public function destroy($id)
{
    $checkout = Checkout::findOrFail($id);
    $checkout::destroy($id);
    $checkout->delete();

    return redirect()->back()->with('success', 'Pesanan berhasil dibatalkan');
}
    
}
