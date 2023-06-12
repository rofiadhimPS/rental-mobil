<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        $title = 'Produk';
        return view('admin.admin_produk', ['products' => $products, 'title' => $title]);
    }

    public function create(){
        return view('tambah_mobil');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'tahun' => 'required',
            'seat' => 'required',
            'metode_bayar' => 'required',
            'icon' => 'required|image',
            'price' => 'required',
        ]);
        $product = new Product;
        $product->title = $request->input('title');
        $product->slug = $request->input('slug');
        $product->tahun = $request->input('tahun');
        $product->seat = $request->input('seat');
        $product->metode_bayar = $request->input('metode_bayar');
        $product->price = $request->input('price');
        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images/product'), $imageName);
            $product->icon = 'product/' . $imageName;
        }

        $product->save();
        return redirect()->back();

    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.product.edit_mobil', compact('product'));
    }
    
    public function update(Request $request, $id){
        $product = Product::find($id);

        $product->title = $request->input('title');
        $product->slug = $request->input('slug');
        $product->price = $request->input('price');
        $product->is_tersedia = $request->input('is_tersedia');
        if($request->hasFile('icon')){
            if ($product->icon){
                Storage::delete($product->icon);
            }

            $image = $request->file('icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $product->icon = $imageName;
        }

        $product->save();
        
        return redirect()->route('admin.admin_produk');
    }

    public function destroy($id){
        $product = Product::find($id);if ($product->icon) {
            $imagePath = public_path('images') . '/' . $product->icon;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $product->delete();
        $product::destroy($id);

        return redirect()->route('admin.admin_produk');
    }



}
