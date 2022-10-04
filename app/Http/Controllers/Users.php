<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{

    public function index()
    {
        return view('users.list-users');
    }

    public function users_lists()
    {
        echo "test";
    }
}
