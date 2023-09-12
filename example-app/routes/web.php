<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
// Route::get ('formcode',function(){
//    return view('form');

// });
// Route::get('unicode/{slug}-{id}.html',function($id=null,$slug=null){
//    $content='Phương thức post của path/unicode với tham số';
// $content.='id='.$id. '<br/>';
// $content.='slug='.$slug;
//    return $content;
// })->where(
//    [
//    'slug'=>'[a-z-]+',
//    'id'=>'[0-9]+'
//    ]
// );
// // Route::put('unicode',function(){
// //    return 'Phương thức post của path';
// // });
// // Route::match(['get','post'],'unicode',function(){
// //    return $_SERVER['REQUEST_METHOD'];

// // });   
// // Route::get('show-form',function(){
// //    return view('form');
// // });


// // Route::prefix('/product')-> group(function (){
// //    Route::post('/',function(){
// //       return 'Danh Sách Sản Phầm';
// //    }
// //    );
// //    Route::get('add',function(){
// //       return 'Thêm sản phẩm';
// //    }
// //    );
// //    Route::get('edit',function(){
// //       return 'Sửa sản phẩm';
// //    }
// // );



// // });


// Route::prefix('/')->group(function() {
//    // Route::get('/', [HomeController::class, 'viewlogin'])->name('homeindex');
//    Route::get('/form-login', [HomeController::class, 'viewlogin'])->name('viewform');
//    Route::post('/submit-loginform', [HomeController::class, 'submitlogin'])->name('submitlogin');
//    // Route::get('/trung', [HomeController::class, 'user.index'])->name("viewhome");
//    // Route::get('/hai', [HomeController::class, 'trung']);
//    // Route::post('/trung-post', [HomeController::class, 'solveForm'])->name('index.trung');
//    // Route::prefix('/product')->group(function() {
//    //    Route::get('/', [HomeController::class, 'indexProduct'])->name('product');
//    //    Route::get('/add', [HomeController::class, 'indexProduct'])->name('product.add');
//    // });
// });Route::get('cc',function(){   return 'cc';});

Route::get('/ ',[UserController::class,'dangki'] )->name('dangkitk');
Route::post('/getinfo',[UserController::class,'getinfo'])->name('getinfodk');
Route::get('/login ',[UserController::class,'login'] )->name('login');
Route::post('/getlogin',[UserController::class,'getlogin'])->name('getlogin');
Route::get('/getlogin',[UserController::class,'logout'])->name('logout');

// Route::get('cc',function(){   return 'cc';});
