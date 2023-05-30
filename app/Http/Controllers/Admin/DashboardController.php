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

        $checkouts = Checkout::with('Product', 'User')->get();
        $title = 'Dashboard';
        return view('admin.admin_dashboard', [
            'checkouts' => $checkouts, 'title' => $title
        ]);
    }
}
