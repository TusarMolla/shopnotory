<?php

use Illuminate\Support\Facades\Route;

if(! function_exists('res_path')){
    function res_path(){
        return url('resources');
    }
}
//highlights the selected navigation on admin panel
if (!function_exists('areActiveRoutes')) {
    function areActiveRoutes(array $routes, $output = "active")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) return $output;
        }
    }
}
?>