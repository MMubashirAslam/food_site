<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\frontController;
use App\Models\SettingModal;

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
// front end routes
Route::get('/', [frontController::class , 'index']);
Route::get('/shop', [frontController::class , 'shop']);
//dashboard routes
Route::get('/dashboard', [DashController::class, 'dashboard']);
Route::get('/all-orders', [DashController::class, 'allOrders']);
Route::get('/delivery-orders', [DashController::class, 'deliveryOrders']);
Route::get('/pickup-orders', [DashController::class, 'pickupOrders']);
Route::get('/restaurant-orders', [DashController::class, 'restaurantOrders']);
Route::get('/settings', [DashController::class, 'settings']);
Route::post('/dosettings', [DashController::class, 'doSettings'])->name('doSettings');
Route::get('/create-product', [DashController::class, 'createProduct']);
Route::get('/product', [DashController::class, 'product']);
Route::get('/categories', [DashController::class, 'categories']);
Route::get('/optional-items', [DashController::class, 'optionalItems']);
Route::get('/promotions', [DashController::class, 'promotions']);
Route::get('/delivery-area', [DashController::class, 'deliveryArea']);
Route::get('/customer-list', [DashController::class, 'customerList']);
Route::get('/product-reviews', [DashController::class, 'productReviews']);
Route::get('/messages', [DashController::class, 'messages']);

Route::post('/product/update-status', [DashController::class, 'updateStatus'])->name('product.updateStatus');
Route::get('/edit-product/{para}',[DashController::class,'editProduct']);
Route::get('/delete-product/{para}',[DashController::class,'deleteProduct']);
Route::post('/update-status',[DashController::class,'updateStatusO']);
Route::get('/delete-category/{para}',[DashController::class,'deleteCategory']);

Route::post('/edit-category/{cid}', [DashController::class, 'editCategory'])->name('category.edit');
Route::delete('/delete-category/{cid}', [DashController::class, 'deleteCategory'])->name('category.delete');

// form routes
Route::post('/docreateProduct',[DashController::class,'docreateProduct']);
Route::post('/add-category',[DashController::class,'addCategory']);
Route::post('/add-optional',[DashController::class,'addOptionalItems']);
