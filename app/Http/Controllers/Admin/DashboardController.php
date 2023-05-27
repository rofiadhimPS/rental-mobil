<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\User;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $checkouts = Checkout::with('Product')->get();
        $title = 'Dashboard';
        return view('admin.admin_dashboard', [
            'checkouts' => $checkouts, 'title' => $title
=======
        $checkouts = Checkout::with('Product', 'User')->get();
        return view('admin.dashboard', [
            'checkouts' => $checkouts
>>>>>>> 6977983b9afebeadaa0131fa66a866cb02072a4e
        ]);
    }
}
