<?php

use Illuminate\Support\Facades\Route;
use  App\Models\User;
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
//    return view('welcome');
   
// });
// Route::get('/unicode',function(){
//    $user = new User();
// $alluser=$user::all();
//    dd($alluser);
//    return view('product');

// });
// Route::get('/',function(){
//    return view('welcome') ;
// });
Route::get ('unicode',function(){
   return view('form');

});
Route::post('unicode',function(){
   return 'Phương thức post của path';
});
Route::put('unicode',function(){
   return 'Phương thức post của path';
});
