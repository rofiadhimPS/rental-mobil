<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Jobs\KirimCepat;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderKonfirmasi;
use App\Models\Product;
use App\Models\ProductBenefit;
use Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checkouts = Checkout::all();
        return view('admin.admin_pesanan', ['checkouts' => $checkouts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Product $product)
    {
        // return $product;
        return view('checkout', [
            'product' => $product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $product)
    {   
        $check = $request->validate([
            'title' => 'required',
            'name' => 'required',
            'tanggal_pesan' => 'required',
            'lokasi_penjemputan' => 'required',
            'metode_pembayaran' => 'required'
        ]);
        // Mengambil data dari permintaan
        $check = $request->except('bukti'); // Mengabaikan input 'bukti'
    
        // Mengunggah gambar
        if ($request->hasFile('bukti')) {
            $image = $request->file('bukti');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images/bukti'), $imageName);
            $product->icon = 'bukti/' . $imageName;
        }
        

        //mapping data
        $check['user_id'] = Auth::id();
        $check['product_id'] = $product->id;

        // update data user
        $user = Auth::user();
        $user['no_telp'] = $check['phone_number'];
        $user->save();

        $checkout = Checkout::create($check);
        dispatch(new KirimCepat($checkout));

        return redirect(route('checkout.success', $product->id));

    }

    /**
     * Display the specified resource.
     */
    public function notify(Checkout $checkout)
    {
        $user_id = auth()->user()->id;
        $exists = Checkout::where('user_id', $user_id)->exists();
        $title = 'pesan';
        return view('pesanan', ['checkout' => $exists, 'title' => $title]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    


    public function success($productId)
{
    
    $checkout = Checkout::latest()->where('user_id', Auth::id())->first();
    // $checkouts = Checkout::with('Product')->whereUserId(Auth::id())->get();
    // return $checkout;
    // $checkouts = Checkout::find($checkoutId);
    $product = Product::with('productBenefit')->find($productId);
    // return $product;
    return view('success_checkout', [
        'product' => $product, 'checkout' => $checkout
    ]);
    
}

}
