<?php

function haiyin_classLoader($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = dirname(dirname(__DIR__)) . '/' . $path . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('haiyin_classLoader');