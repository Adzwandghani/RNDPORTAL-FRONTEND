<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller_mainpage extends Controller
{
    public function index(){ return view("layouts.default"); }
}
