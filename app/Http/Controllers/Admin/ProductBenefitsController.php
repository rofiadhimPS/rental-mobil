<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ProductBenefit;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductBenefitsController extends Controller
{
    public function index(){
        $benefits = ProductBenefit::all();
        $title = 'Produk';
        return view('admin.admin_produk', ['benefits' => $benefits, 'title' => $title]);
    }

    public function create(){
        return view('tambah_mobil');
    }

    public function store(Request $request){
        $request->validate([
            'product_id' => 'required',
            'tipe_mobil' => 'required',
            'tahun' => 'required',
            'warna' => 'required',
            'seat' => 'required',
        ]);
        $benefit = new ProductBenefit([
            'product_id' => $request->get('product_id'),
            'tipe_mobil' => $request->get('tipe_mobil'),
            'tahun' => $request->get('tahun'),
            'warna' => $request->get('warna'),
            'seat' => $request->get('seat'),
            
        ]);

        $benefit->save();
        return redirect()->back();
    }

    public function edit($id){
        $benefit = ProductBenefit::find($id);
        return view('edit_mobil', compact('benefit'));
    }

    public function update(Request $request, $id){
        $benefit = ProductBenefit::find($id);

        $benefit->product_id = $request->input('product_id');
        $benefit->tipe_mobil = $request->input('tipe_mobil');
        $benefit->tahun = $request->input('tahun');
        $benefit->warna = $request->input('warna');
        $benefit->seat = $request->input('seat');

        $benefit->save();
        
        return redirect()->back();

    }

    public function destroy(ProductBenefit $benefits){
        $benefits->delete();

        return redirect()->route('benefits.index');
    }









}
