<?php

use App\Http\Controllers\Admin\SubscriberController as AdminSubscriberController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SubscriberController::class,'index']);

Route::post('store',[SubscriberController::class,'store'])->name('store');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified', 'type.user:admin'])->name('dashboard');

Route::prefix('admin')
->namespace('Admin')
->as('admin.')
->middleware('auth','verified', 'type.user:admin')
->group(function(){
    Route::resource('users','UsersController');
    Route::get('/subscriber', [AdminSubscriberController::class,'index'])->name('subscriber');
    Route::get('/all-subscriber', [AdminSubscriberController::class,'allSubscriber'])->name('all.subscriber');
});

require __DIR__.'/auth.php';