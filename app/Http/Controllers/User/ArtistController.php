<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{
    public function index()
    {
        return view('user.artist.index');
    }

    public function orderByCategory()
    {
        return view('user.artist.orderByCategory');
    }
}
