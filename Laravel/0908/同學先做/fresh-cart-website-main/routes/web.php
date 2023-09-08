<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReplyController;

use App\Models\ProductTypeImg;

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

// Route::get('/', function () {
//     // $data = ProductTypeImg::first();
//     // dd($data->productType);
//     return view('welcome');
// });
Route::get('/', [FontController::class, 'index'])->name('front-index');

Route::prefix('/cart')->group(function () {

    Route::get('/add', [CartController::class, 'create'])->name('cartAdd');
    Route::post('/store', [CartController::class, ('store')])->name('cartStore');
    Route::get('/product-list', [CartController::class, 'index'])->name('cartProductList');
    Route::get('/edit/{id}', [CartController::class, 'edit'])->name('cartEdit');
    Route::post('/update/{id}', [CartController::class, 'update'])->name('cartUpdate');
    // 刪除
    Route::post('/destroy/{id}', [CartController::class, 'destroy'])->name('cartDestroy');
});
// Route::get('test', [CartController::class, 'index']);
Route::prefix('/type')->group(function () {
    Route::get('/product-list', [TypeController::class, 'index'])->name('typeProductList');

    Route::get('/add', [TypeController::class, 'create'])->name('typeAdd');
    Route::post('/store', [TypeController::class, 'store'])->name('typeStore');

     Route::get('/edit/{id}', [TypeController::class, 'edit'])->name('typeEdit');
    Route::put('/update/{id}', [TypeController::class, 'update'])->name('typeUpdate');
    // 刪除
    Route::delete('/destroy/{id}', [TypeController::class, 'destroy'])->name('typeDestroy');
});



Route::prefix('/message')->group(function() {
    Route::get('/index', [MessageController::class, 'index'])->name('messageIndex');

    Route::post('/replayStore/{id}', [MessageController::class, 'replayStore'])->name('replayStore');
    Route::post('/store', [MessageController::class, 'store'])->name('messageStore');

    Route::get('/edit/{id}', [MessageController::class, 'edit'])->name('messageEdit');
    Route::put('/update/{id}', [MessageController::class, 'update'])->name('messageUpdate');
    // 刪除
    Route::delete('/destroy/{id}', [MessageController::class, 'destroy'])->name('messageDestroy');
});

Route::prefix('/reply')->group(function () {
    Route::get('/index', [ReplyController::class, 'index'])->name('replyIndex');

    Route::get('/add', [ReplyController::class, 'create'])->name('replyAdd');
    Route::post('/store', [ReplyController::class, 'store'])->name('replyStore');

    Route::get('/edit/{id}', [ReplyController::class, 'edit'])->name('replyEdit');
    Route::put('/update/{id}', [ReplyController::class, 'update'])->name('replyUpdate');
    // 刪除
    Route::delete('/destroy/{id}', [ReplyController::class, 'destroy'])->name('replyDestroy');
});
