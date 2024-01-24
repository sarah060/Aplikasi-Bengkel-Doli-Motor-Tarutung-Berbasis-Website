<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DoorsmeerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddShopController;
use App\Http\Controllers\CustomerShopController;
use App\Http\Controllers\SaranController;
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

// AUTENTIKASI
Route::get('logout',[AuthController::class, 'logout'])->name('logout');
Route::get('login',[AuthController::class, 'index'])->name('index');
Route::get('register',[AuthController::class, 'register'])->name('register');
Route::post('do_register',[AuthController::class, 'do_register'])->name('do_register');
Route::post('login',[AuthController::class, 'login'])->name('login');



// HOME
Route::get('/', function () {
    return view('customer.home');
});
Route::middleware('role:admin')->prefix('admin')->group(function(){
    Route::get('home', function () {
        return view('admin.home');
    });
});



// RENTAL
Route::get('rental', function () {
    return view('customer.rental');
});
Route::delete('rental/{id}',[RentalController::class, 'destroy'])->name('rental.destroy' );
Route::middleware('role:customer')->prefix('customer')->group(function(){
    Route::post('addrental', [RentalController::class, 'store_rental'])->name('addrental.action');
    Route::get('addrental', [RentalController::class, 'index_addRental'])->name('addrental');
});
Route::middleware('role:admin')->prefix('admin')->group(function(){
    Route::get('rental/{id}/update_status/{status}',[RentalController::class, 'update_status'])->name('rental.update_status');
    Route::get('rental', [RentalController::class, 'index'])->name('rental');
});



// SERVICE
Route::get('service', function () {
    return view('customer.service');
});
Route::delete('service/{id}',[ServiceController::class, 'destroy'])->name('service.destroy' );
Route::middleware('role:customer')->prefix('customer')->group(function(){
    Route::post('addservice', [ServiceController::class, 'store_service'])->name('addservice.action');
    Route::get('addservice', [ServiceController::class, 'index_addservice'])->name('addservice');
});
Route::middleware('role:admin')->prefix('admin')->group(function(){
    Route::get('service/{id}/update_status/{status}',[ServiceController::class, 'update_status'])->name('service.update_status');
    Route::get('service', [ServiceController::class, 'index'])->name('service');
});



// DOORSMEER
Route::get('doorsmer', function () {
    return view('customer.doorsmer');
});
Route::middleware('role:customer')->prefix('customer')->group(function(){
    Route::post('adddoorsmeer', [DoorsmeerController::class, 'store_doorsmeer'])->name('adddoorsmeer.action');
    Route::get('adddoorsmeer', [DoorsmeerController::class, 'index_addDoorsmeer'])->name('adddoorsmeer');
});
Route::delete('doorsmeer/{id}',[DoorsmeerController::class, 'destroy'])->name('doorsmeer.destroy' );
Route::middleware('role:admin')->prefix('admin')->group(function(){
    Route::get('doorsmeer/{id}/update_status/{status}',[DoorsmeerController::class, 'update_status'])->name('doorsmeer.update_status');
    Route::get('doorsmeer', [DoorsmeerController::class, 'index'])->name('doorsmeer');
});



// AKUN
Route::get('akun', function () {
    $userId = Auth::id();
    $rentals = App\Models\Rental::all();
    $services = App\Models\Service::all();
    $doorsmeers = App\Models\Doorsmeer::all();
    return view('customer.akun', compact('rentals','services','doorsmeers'));
});



// SHOP
Route::get('shop', [CustomerShopController::class, 'index'])->name('indexShop');
Route::middleware('role:admin')->prefix('admin')->group(function(){
    Route::get('shop', function () {
        return view('admin.shop');
    });
});
Route::middleware('role:admin')->prefix('admin')->group(function(){
    Route::get('addshop', function () {
        return view('admin.addshop');
    });
    Route::resource('shop', AddShopController::class);
});



// USER
Route::middleware('role:admin')->prefix('admin')->group(function(){
    Route::get('user', [UserController::class, 'index'])->name('user');
});



// SARAN
Route::get('contact', function () {
    return view('customer.contact');
});
Route::middleware('role:customer')->prefix('customer')->group(function(){
    Route::post('addsaran', [SaranController::class, 'store_saran'])->name('addsaran.action');
    Route::get('addsaran', [SaranController::class, 'index_addSaran'])->name('addsaran');
});
Route::middleware('role:admin')->prefix('admin')->group(function(){
    Route::get('saran', [SaranController::class, 'index'])->name('saran');
});







Route::get('keranjang', function () {
    return view('customer.keranjang');
});
Route::get('pembayaran', function () {
    return view('customer.pembayaran');
});
Route::middleware('role:admin')->prefix('admin')->group(function(){
    Route::get('order', function () {
        return view('admin.order');
    });
});


