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
        return view('admin.admin_produk', ['products' => $products]);
    }

    public function create(){
        return view('tambah_mobil');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'icon' => 'required|image',
            'price' => 'required|integer',
            'is_tersedia' => 'required',
        ]);
        $product = new Product;
        $product->title = $request->input('title');
        $product->slug = $request->input('slug');
        $product->price = $request->input('price');
        $product->is_tersedia = $request->input('is_tersedia');
        if ($request->hasFile('icon')) {
            $image = $request->file('icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $product->icon = $imageName;
        }

        $product->save();
        return redirect()->back();

    }

    public function edit($id){
        $product = Product::find($id);
        return view('edit_mobil', compact('product'));
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
        
        return redirect()->back();
    }

    public function destroy($id){
        $product = Product::find($id);
        $product::destroy($id);
        $product->delete();

        return redirect()->route('admin.admin_produk');
    }



}
