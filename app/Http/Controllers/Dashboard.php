<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class Dashboard extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard');
    }
}
