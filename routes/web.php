<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\HomeProductController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductBenefitsController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Checkout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeProductController::class, 'index'])->name('welcome');
Route::get('/detailmobil', [HomeProductController::class, 'mobil'])->name('mobil');
Route::get('/masjid-99-kubah', function () {return view('artikel.masjid-99');});
Route::get('/appalarang', function () {return view('artikel.appalarang');});
Route::get('/bantimurung', function () {return view('artikel.bantimurung');});
Route::get('/tips-berkendara', function () {return view('artikel.tips-berkendara');});
Route::get('/rawat-mobil', function () {return view('artikel.rawat-mobil');});
Route::get('/pantai-bira', function () {return view('artikel.pantai-bira');});
Route::get('/pantai-losari', function () {return view('artikel.pantai-losari');});

// socialite
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::middleware(['auth', 'verified'])->group(function () {
    //checkout routes
    Route::get('checkout/success/{product}', [CheckoutController::class, 'success'])->name('checkout.success')->middleware('ensureUserRole:user');
    Route::get('checkout/{product}', [CheckoutController::class, 'create'])->name('checkout.create')->middleware('ensureUserRole:user');;
    Route::get('checkout/{product}/mail', [CheckoutController::class, 'store'])->name('checkout.store.mail')->middleware('ensureUserRole:user');;
    Route::post('checkout/{product}', [CheckoutController::class, 'store'])->name('checkout.store')->middleware('ensureUserRole:user');;
    
    // Halaman
    Route::get('/detailmobil', function () {
        return view('detail_mobil');
    });

    Route::get('/notifikasi', function () {
        return view('notifikasi', [
            'title'=>"notif"
        ]);
    });

    //dashboard 
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    //user dashboard
    Route::prefix('/user')->namespace('User')->name('user.')->middleware('ensureUserRole:user')->group(function(){
        Route::get('/dashboard', [UserDashboard::class, 'index'])->name('dashboard');
        Route::delete('/dashboard/{id}', [UserDashboard::class, 'destroy'])->name('dashboard.destroy');
        Route::get('/pesanan', [UserDashboard::class, 'show'])->name('pesanan');
        Route::delete('/pesanan/{id}', [UserDashboard::class, 'destroy'])->name('pesanan.destroy');
    });
    // admin dashboard
    Route::prefix('/admin')->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function(){
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
        Route::get('/pengguna', [UserController::class, 'index'])->name('admin_pengguna');
        Route::get('/pesanan', [CheckoutController::class, 'index'])->name('admin_pesanan');
        Route::get('/pesanan/{id}/update', [CheckoutController::class, 'ubahStatus'])->name('checkout.ubahstatus');
        Route::put('/pesanan/{id}/update', [CheckoutController::class, 'ubahStatus'])->name('checkout.ubahstatus');
    //    Benefits
        Route::get('/produk', [ProductController::class, 'index'])->name('admin_produk');
        Route::post('/produk/form1', [ProductBenefitsController::class, 'store'])->name('benefits.store');
        Route::get('/produk/{id}/edit', [ProductBenefitsController::class, 'edit'])->name('benefits.edit');
        Route::put('/produk/{id}', [ProductBenefitsController::class, 'update'])->name('benefits.update');
    //    Product
        Route::post('/produk/form2', [ProductController::class, 'store'])->name('product.store');
        Route::get('/produk/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/produk/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

        Route::get('/produk/tambahmobil', function () {
            return view('admin.product.tambah_mobil',[
            ]);
        });
        Route::get('/akun', function () {
            return view('admin.admin_akun', [
                'title'=>"Akun"
            ]);
        });
        Route::get('/chat', function () {
            return view('admin.admin_chat', [
                'title'=>"Chat"
            ]);
        });
        Route::get('/notifikasi', function () {
            return view('admin.admin_notifikasi', [
                'title'=>"Notifikasi"
            ]);
        });
    });
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
