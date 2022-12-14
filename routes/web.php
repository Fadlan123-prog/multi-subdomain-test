<?php

use App\models\User;
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

Route::domain('{username}.'. env('SESSION_DOMAIN'))->group(function(){
    Route::get('/', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile');
});

Auth::routes();

Route::get('/', function(){
    $users = App\Models\User::all();
    return view('profiles.index')->with('users', $users);
})->name('root');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
