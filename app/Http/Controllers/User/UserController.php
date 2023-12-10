<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function mypage()
    {
        return view('user.user.mypage');
    }

    public function emailEdit()
    {
        return view('user.user.emailEdit');
    }

    public function emailUpdate()
    {
        return redirect()->route('email.edit');
    }

    public function passwordEdit()
    {
        return view('user.user.passwordEdit');
    }

    public function passwordUpdate()
    {
        return redirect()->route('password.edit');
    }
}
