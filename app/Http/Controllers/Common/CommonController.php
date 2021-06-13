<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    public function view($data = [], $view = null)
    {
        if ($view) {
            $view = view($view);
        } else {
            $action = \Route::currentRouteAction();
            $actions = explode('\\', $action);
            $len = count($actions);
            $namespace = $actions[$len - 2];
            $_controller = $actions[$len - 1];
            $_controller = explode('@', $_controller);
            $controller = $_controller[0];
            $method = $_controller[1];
            $namespace = strtolower($namespace);
            $controller = strtolower(substr($controller, 0, -10));
            $view = view($namespace.'.'.$controller.'.'.$method);
        }
        
        foreach ($data as $key => $val) {
            $view = $view->with($key, $val);
        }

        return $view;
    }
}
