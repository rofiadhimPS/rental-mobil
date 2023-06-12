<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Checkout;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use ChartJs;

use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('Product')->get();
        $productCount = Product::count();
        $userCount =  User::where('is_admin', 0)->count();
        $totalPesananSelesai =  Checkout::where('status', 'selesai')->count();

        $title = 'Dashboard';

        #dounut chart
        $checkoutData = Checkout::select('product_id', DB::raw('COUNT(*) as total_orders'))
            ->groupBy('product_id')
            ->orderByDesc('total_orders')
            ->limit(5)
            ->get();

        $labels = [];
        $data = [];

        foreach ($checkoutData as $checkout) {
            $product = Product::find($checkout->product_id);

            $labels[] = $product->name;
            $data[] = $checkout->total_orders;
    }


        // linechart
        $orders = Checkout::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as total_orders'))
            ->whereBetween('created_at', [now()->subMonths(5), now()])
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $months = [];
        $orderCounts = [];

        foreach ($orders as $order) {
            $months[] = $order->month;
            $orderCounts[] = $order->total_orders;
        }

        $monthLabels = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $currentMonthIndex = now()->format('n') - 1;

        $monthLabels = array_slice($monthLabels, -$currentMonthIndex-2, 6);
        $orderCounts = array_slice($orderCounts, -$currentMonthIndex-2, 6);

        $datas = [
            'labels' => $monthLabels,
            'datasets' => [
                [
                    'label' => 'Jumlah Pemesanan',
                    'data' => $orderCounts,
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'borderWidth' => 2,
                    'tension' => 0.4,
                    'fill' => true,
                    'order' => 2,
                ],
            ],
        ];

        $jsonData = json_encode($datas);


        return view('admin.admin_dashboard', [
            'checkouts' => $checkouts, 'jsonData' => $jsonData, 'labels' => $labels, 'data' => $data, 'title' => $title, 'userCount' => $userCount, 'productCount' => $productCount, 'totalPesananSelesai' => $totalPesananSelesai
        ]);
    }
    
    
    public function show()
    {
        
        $users = Auth::user();
        $title = 'Akun';

        return view('admin.admin_akun', ['users' => $users, 'title' => $title]);
    }

    public function update(Request $request){
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->no_telp = $request->input('no_telp');
        if($request->hasFile('avatar')){
            if ($user->avatar){
                $this->deleteAvatar($user->avatar);
            }
            
            $image = $request->file('avatar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/profil'), $imageName);
            $user->avatar = $imageName;
        }
        

        $user->save();
        
        return redirect()->back();
    }
}
