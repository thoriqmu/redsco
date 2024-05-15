<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KusionerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'landingpage')->name('landingpage');

Route::middleware(['guest'])->group(function() {

});


Route::get('/registrasi', [AuthController::class, 'showRegistration'])->name('auth.registration');
Route::post('/registrasi', [AuthController::class, 'register'])->name('auth.registration.process');
Route::get('/email/verify/{token}', [AuthController::class, 'verifyEmail'])->name('mail.verify');
Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth.role:user')->group(function() {
    Route::get('/shop', [ProductController::class, 'shopProduct'])->name('user.shop');
    Route::get('/shop/{id}', [ProductController::class, 'productDetail'])->name('user.detail');
    Route::get('/keranjang', [PurchaseController::class, 'cart'])->name('keranjang');
    Route::get('/keranjang/{status}', [PurchaseController::class, 'showStatus'])->name('keranjang.status');
    Route::get('/cart/{id}', [PurchaseController::class, 'addToCart'])->name('user.cart');
    Route::get('/cart-delete/{id}', [PurchaseController::class, 'deleteCart'])->name('user.cartDelete');
    Route::get('/delete-unpaid/{id}', [PurchaseController::class, 'deleteUnpaid'])->name('user.deleteUnpaid');
    Route::post('/beli', [PurchaseController::class, 'buyDetail'])->name('user.buy');
    Route::post('/save-order', [PurchaseController::class, 'saveOrder'])->name('user.order');
    Route::get('/pay/{id}', [PurchaseController::class, 'payProduct'])->name('user.pay');
    Route::post('/pay/{id}', [PurchaseController::class, 'paidProduct'])->name('user.paid');
    Route::get('/complete/{id}', [PurchaseController::class, 'orderComplete'])->name('user.orderComplete');
    Route::view('/kuisioner', 'kuisioner')->name('user.kuisioner');
    Route::post('/submit-quiz', [QuizController::class, 'submitQuiz'])->name('submit.quiz');
    Route::view('/result', 'result')->name('user.result');
    Route::get('/recommendation/{variant}', [QuizController::class, 'show'])->name('user.recommendation');
});

Route::middleware('auth.role:admin')->group(function() {
    Route::get('/dashboard', [SalesController::class, 'dashboardDetail'])->name('admin.dashboard');
    Route::get('/product', [ProductController::class, 'showProduct'])->name('admin.showProduct');
    Route::post('/product', [ProductController::class, 'addProduct'])->name('admin.addProduct');
    Route::put('/product/{id}', [ProductController::class, 'updateProduct'])->name('admin.updateProduct');
    Route::get('/sales', [SalesController::class, 'showSales'])->name('admin.sales');
    Route::put('/sales/{id}', [SalesController::class, 'updateStatus'])->name('admin.updateStatus');
});
