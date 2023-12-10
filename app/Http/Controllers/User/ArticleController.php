<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        return view('user.article.index');
    }

    public function orderByAge()
    {
        return view('user.article.orderByAge');
    }

    public function showArticle()
    {
        return view('user.article.showArticle');
    }
}
