<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;
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
        //
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
        // Mengambil data dari permintaan
        $data = $request->except('bukti'); // Mengabaikan input 'bukti'
    
        // Mengunggah gambar
        if ($request->hasFile('bukti')) {
            $imagePath = $request->file('bukti')->store('public/images/bukti');
            $data['bukti_transfer'] = $imagePath;
        } else {
            $data['bukti_transfer'] = null; // Atur nilai null jika tidak ada file yang diunggah
        }
        

        //mapping data
        $data['user_id'] = Auth::id();
        $data['product_id'] = $product->id;

        // update data user
        $user = Auth::user();
        $user['no_telp'] = $data['phone_number'];
        $user->save();

        // create checkout table
        $checkout = Checkout::create($data);

        return redirect(route('checkout.success', $product->id));

    }

    /**
     * Display the specified resource.
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checkout $checkout)
    {
        //
    }

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
    public function destroy(Checkout $checkout)
    {
        //
    }

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
