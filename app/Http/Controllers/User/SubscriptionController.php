<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('user.subscription.index');
    }

    public function showRegistrationForm()
    {
        return view('user.subscription.showRegistrationForm');
    }

    public function register()
    {
        return redirect()->route('home');
    }
}
