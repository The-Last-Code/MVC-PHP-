<?php
    $url = $_SERVER["REQUEST_URI"];

    $arr = explode("/", $url);
    
    $controller = $arr[2];

    $action = $arr[3];
    
    require_once("./controller/" . $controller . '.php');
    
    $obj = new $controller;

    $obj->{$action}();
?>