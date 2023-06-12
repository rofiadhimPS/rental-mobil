<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Checkout;
use Carbon\Carbon;
use Auth;

class HomeProductController extends Controller
{
    public function index(){
        $products = Product::all();
        $title = 'beranda';
        return view('welcome', ['products' => $products, 'title' => $title]);
    }
    public function mobil(){
        $products = Product::all();
        $title = 'beranda';
        return view('detail_mobil', ['products' => $products, 'title' => $title]);
    }
    public function detail($id){
        $productId = decrypt($id);
        $products = Product::find($productId);
        $checkouts = Checkout::where('product_id', $productId)
        ->pluck('tanggal_pesan')
        ->all();

        

        $title = 'beranda';
        return view('detail_mobil', ['products' => $products, 'title' => $title, 'checkouts' => $checkouts]);
    }

    public function show()
    {
        $checkouts = Checkout::with('Product')->whereUserId(Auth::id())
                    ->whereDate('tanggal_pesan', '>=', Carbon::today())
                    ->orderBy('tanggal_pesan')
                    ->first();
        $title = 'pesan';
        return view('user.pesanan', ['checkouts' => $checkouts, 'title' => $title]);
    }

    public function destroy($id)
{
    $checkout = Checkout::findOrFail($id);
    $checkout::destroy($id);
    $checkout->delete();

    return redirect()->back()->with('success', 'Pesanan berhasil dibatalkan');
}
}
