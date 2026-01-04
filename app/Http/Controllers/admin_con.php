<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_con extends Controller
{
     public function index()
    {
        return view('admin.dashboard');
    }
}
