<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    public function view($data = [], $siteinfo = [], $view = null)
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
            $router = $namespace.'.'.$controller.'.'.$method;
            $view = view($router);
        }

        if ($siteinfo)
        {
            $view = $view->with('siteinfo', $siteinfo);
        }
        else
        {
            $siteinfo = [];
            switch($router)
            {
                case : 'index.index.index';
                    $siteinfo['title'] = '首页';
                    break;
                case : 'index.index.login';
                    $siteinfo['title'] = '登录';
                    break;
                case : 'index.index.register';
                    $siteinfo['title'] = '注册';
                    break;
                default:
                    break;
            }
            $siteinfo['keywords'] = '网站关键词';
            $siteinfo['description'] = '网站描述';
            $view = $view->with('siteinfo', $siteinfo);
        }
        
        foreach ($data as $key => $val) {
            $view = $view->with($key, $val);
        }

        return $view;
    }
}
