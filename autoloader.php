<?php

function autoloader($class) {
    $class = str_replace('\\', '/', $class);
   if($class == "Controller") require_once __DIR__ . '/controller/' . $class . '.php';
   else if($class == "App") require_once __DIR__ . '/' . $class . '.php';
   else require_once __DIR__ . '/model/' . $class . '.php';
}

spl_autoload_register('autoloader');


?>