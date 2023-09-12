<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Whoops\Handler\JsonResponseHandler;

class UserController extends Controller
{
    public $data = [];
    public function show($id)
    {
        return User::findOrFail($id);
    }
    // public function index(){
    //     return User::get();
    // }
    // public function index(){
    //     $users = User::
    //     join('departments', 'users.departmen_id', '=', 'departments.id')
    //     ->join('users_status', 'users.status_id', '=', 'users_status.id')
    //     ->select('users.*', 'departments.name as departments'
    //     , 'users_status.name as status')
    //     ->get();
    //     return response()->json($users);
    // }

    public function dangki()
    {
        $data['test'] = 123;
        return view('DangKiThanhVien', $data);
    }
    public function getinfo(Request $request)
    {

        DB::table('number')->insert(
            [
                'username' => $request->username,
                'email' => $request->email,
                'password' =>bcrypt($request->pass) ,
            ]

        );
        echo 'đã thêm thành viên';
    }
    public function login()
    {
        if (auth()->user() == null)
            return view('user.login');
        else
            return redirect(route("homeindex"));
    }
    public function getlogin(Request $request)
    {
        $username['info'] = $request->username;
        $pass = $request->pass;
        // $result = DB::table('number')->where('username', $username)->get();
        // print_r($result);
        // foreach ($result as $value) {
        // }
        // if ($value->password == $pass) {
        //     echo "đăng nhập thành công";
        //     return view('user.index');
        // } else {
        //  echo 'Đăng nhập sai';
        //     return view('Login');
        // }


        //Sử dụng laravel để đăng nhập Auth
        if(Auth::attempt(['username'=>$username,'password'=>$pass])){
            echo 'Đăng nhập thành công';
            return redirect(route("homeindex"));
        }
        else{
            echo 'Đăng nhập không thành công';
        }
    }
    public function logout(){
        Auth::logout();
        return  redirect(route('login'));

    }
    public function viewcategory(){
        return view('category.category');

    }
    public function getusername(){
        return view('profile');

    }
    public function checkfrofile(){
       if ( auth()->check()==null){
        return view('login');
       }
       else {
        return View('user.profile');

       }

    }
}
