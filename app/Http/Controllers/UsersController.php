<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    // 注册
    public function create(){

        return view('users.create');
    }
    // 展示
    public function show(Users $users)
    {

        return view('users.show',compact('users'));
    }
}
