<?php
/**
 * Created by PhpStorm.
 * User: kimtendu
 * Date: 28.01.2017
 * Time: 21:08
 */

class Router {
    static $routes = [];

    public static function get($route, $cb) {
        $routes['get'][$route] = $cb;
    }
    public static function post($route, $cb) {}
}