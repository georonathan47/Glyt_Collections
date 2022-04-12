<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

/*Route::get('/', function () {
    return view('frontend/index');
});*/

Route::get('/',[FrontendController::class, 'index']);
Route::get('/shop',[FrontendController::class, 'shop']);
Route::get('/blog',[FrontendController::class, 'blog']);
Route::get('/contact',[FrontendController::class, 'contact']);
Route::get('/beads',[FrontendController::class, 'beads']);
Route::get('/bags',[FrontendController::class, 'bags']);
Route::get('/footwear',[FrontendController::class, 'footwear']);
Route::get('/clothing',[FrontendController::class, 'clothing']);




