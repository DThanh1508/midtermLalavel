<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use Illuminate\Http\Request;
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
    return view('welcome');
});
Route::get('foods',[FoodController::class,'index'])->name('foods.index');
Route::get('foods/create',[FoodController::class,'create'])->name('foods.create');
Route::post('foods/',[FoodController::class,'store'])->name('foods.store');
Route::get('foods/{food}',[FoodController::class,'show'])->name('foods.show');