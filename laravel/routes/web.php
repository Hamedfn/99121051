<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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
//Route::get('/prdct',function(){
//    return view('prdct');
//});

//Route::post('\compare','productController@compar e')->name('compare');
//Route::post('/compare', 'productController@compare')->name('compare');

Route::get('/compare', [productController::class, 'compare'])->name('compare');
Route::get('/create', [productController::class, 'create']);
Route::get('/products',[productController::class , 'products']);



//Route::post('/compare', 'productController@compare')->name('compare');

//Route::get('/compare',function(){
  //  return view('compare');
//});
