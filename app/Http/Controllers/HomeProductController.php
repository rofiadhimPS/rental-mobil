<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeProductController extends Controller
{
    public function index(){
        $products = Product::all();
        $title = 'beranda';
        return view('welcome', ['products' => $products, 'title' => $title]);
    }
}
