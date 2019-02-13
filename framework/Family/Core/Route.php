<?php
/**
 * Created by PhpStorm.
 * User: 36krphplirui
 * Date: 2019/2/13
 * Time: 下午6:07
 */

namespace Family\Core;


class Route
{
    public static function dispatch($path){
        //默认访问controller/index.php 的index方法
        if(empty($path) || '/' == $path){
            $controller = 'Index';
            $method = 'Index';
        }else{
            $maps = explode('/',$path);
            $controller = $maps[1];
            $method = $maps[2];
        }
        $controllerClass = "controller\\{$controller}";
        $class = new $controllerClass;

        return $class->$method();
    }
}