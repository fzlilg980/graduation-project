<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Common\IndexController as Index;

class IndexController extends Index
{
    public function index()
    {
        return view('welcome');
    }

    public function login()
    {
        return 1;
    }
}
