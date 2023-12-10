<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function mypage()
    {
        return view('admin.admin.mypage');
    }

    public function emailEdit()
    {
        return view('admin.admin.emailEdit');
    }

    public function emailUpdate()
    {
        return redirect()->route('admin.email.edit');
    }

    public function passwordEdit()
    {
        return view('admin.admin.passwordEdit');
    }

    public function passwordUpdate()
    {
        return redirect()->route('admin.password.edit');
    }
}
