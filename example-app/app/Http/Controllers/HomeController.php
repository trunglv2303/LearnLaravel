<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;

class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public $data = [];

    function index(Request $request)
    {
        // dd($request->all());
        return view('user.index');
    }

    function profile() {
        return View('user.profile');
    }

    function trung()
    {
        return view('trung.form');
    }

    // function solveForm(Request $request) {
    //     // dd($request->all());
    //     $username = $request->username;
    //     $data['biendelua'] = $username;
    //     $data['test'] = "HaiZuka";
    //     if ($username != "HaiZuka")
    //         return view('trung.hienthi', $data);
    //     else
    //         return view('trung.hienthi2', $data);
    // }

    // function indexProduct() {
    //     return view('product');
    // }
    function   viewlogin()
    {
        return view('Login');
    }
    function   submitlogin(Request $request)

    {
   
        //Validation
    //     if (Auth::attempt(['email' => $request->username, 'password' => $request->pass])) {
    //         return redirect()->route(route: 'viewhome');
    //     }
    //    return back()->with('message', 'Thông tin đăng nhập không chính xác');
    }
} 



//Tuong tac controller, route, view
//Cách đặt và sử dụng name trong Route
// @Csrf
// Gửi data từ controller qua view
//Người dùng chỉ có thể đọc source trong folder public



//Tìm hiểu viết file migrate
//Tìm hiểu ORM laravel

// $products = Product::all()
//$product = Product::find(1)
