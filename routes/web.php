<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;

use App\Http\Controllers\HomeProductController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductBenefitsController;


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

// socialite
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::middleware(['auth', 'verified'])->group(function () {
    //checkout routes
    Route::get('checkout/success/{product}', [CheckoutController::class, 'success'])->name('checkout.success')->middleware('ensureUserRole:user');
    Route::get('checkout/{product}', [CheckoutController::class, 'create'])->name('checkout.create')->middleware('ensureUserRole:user');;
    Route::post('checkout/{product}', [CheckoutController::class, 'store'])->name('checkout.store')->middleware('ensureUserRole:user');;

    // Halaman
    Route::get('/detailmobil', function () {
        return view('detail_mobil');
    });
    Route::get('/pesanan', function () {
        return view('pesanan', [
            'title'=>"pesan"
        ]);
    });
    Route::get('/notifikasi', function () {
        return view('notifikasi', [
            'title'=>"notif"
        ]);
    });

    //dashboard 
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    //user dashboard
    Route::prefix('user/dashboard')->namespace('User')->name('user.')->middleware('ensureUserRole:user')->group(function(){
        Route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
    });
    // admin dashboard
    Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function(){
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
        Route::get('/pengguna', [UserController::class, 'index'])->name('admin_pengguna');

        // admin checkout
        Route::get('/checkout', [AdminCheckout::class, 'index'])->name('checkout');
        Route::post('checkout/{checkout}', [AdminCheckout::class, 'update'])->name('checkout.update');


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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
