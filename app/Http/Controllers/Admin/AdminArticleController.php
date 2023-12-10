<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminArticleController extends Controller
{
    public function articleCreate()
    {
        return view('admin.adminArticle.articleCreate');
    }

    public function articleConfirm()
    {
        return view('admin.adminArticle.articleConfirm');
    }

    public function articleStore()
    {
    }
}
