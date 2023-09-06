<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show( $id)
    {
        return User::findOrFail($id);
    }
    // public function index(){
    //     return User::get();
    // }
    public function index(){
        $users = User::
        join('departments', 'users.departmen_id', '=', 'departments.id')
        ->join('users_status', 'users.status_id', '=', 'users_status.id')
        ->select('users.*', 'departments.name as departments'
        , 'users_status.name as status')
        ->get();
        return response()->json($users);
    }
    

}
