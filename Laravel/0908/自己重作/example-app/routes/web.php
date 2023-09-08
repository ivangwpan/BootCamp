<?php

use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\ReplyController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/discussion', [DiscussionController::class, 'functionName'])->name('自定義');
// Route::prefix('/discussion')->group(function(){
//     Route::get('/discussion', [DiscussionController::class, 'index'])->name('discussionIndex');
// });
Route::resource('/discussion',DiscussionController::class);
Route::resource('/reply',ReplyController::class);