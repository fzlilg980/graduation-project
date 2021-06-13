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
        $route = \Route::current();

        $name = \Route::currentRouteName();
        
        $action = \Route::currentRouteAction();

        // var_dump($route);
        echo '<br>';
        // echo $name;
        echo '<br>';
        echo $action;
        $data = [];
        $data['action'] = $action;
        return $this->view($data);
    }

}
