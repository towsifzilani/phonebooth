<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Users;

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

Route::get('/', function () {
    return redirect(route('login'));
});

Route::get('/dashboard',[Dashboard::class,'index'])->middleware(['auth'])->name('dashboard');
Route::get('users/list',[Users::class,'index'])->middleware(['auth'])->name('users-lists');

require __DIR__.'/auth.php';
