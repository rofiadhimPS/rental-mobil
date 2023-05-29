<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\User;
use Auth;

class CheckoutController extends Controller
{
    public function index(){
        $checkouts = Checkout::with('Product', 'User')->get();
        $headerTitle = 'Checkout';
        return view('admin.checkout', [
            'checkouts' => $checkouts, 
            'title' => $headerTitle,
        ]);
    }

    public function update(Request $request, Checkout $checkout)
    {
        $checkout->is_paid = true;
        $checkout->save();
        $request->session()->flash('success', "Checkout with Id {$checkout->id} has been updated!");
        return redirect(route('admin.checkout'));
    }
}