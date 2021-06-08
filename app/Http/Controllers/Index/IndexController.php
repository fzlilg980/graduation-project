<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Common\IndexController as Index;
use App\Model\Common\User;

class IndexController extends Index
{
    public function index()
    {
        return view('welcome');
    }

    public function login()
    {
        $info = User::all();
        return $info;
    }

}
