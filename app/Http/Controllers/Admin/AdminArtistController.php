<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminArtistController extends Controller
{
    public function artistCreate()
    {
        return view('admin.adminArtist.artistCreate');
    }

    public function artistConfirm()
    {
        return view('admin.adminArtist.artistConfirm');
    }

    public function artistStore()
    {
    }
}
