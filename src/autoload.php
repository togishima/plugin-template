<?php

if (!defined('PLUGIN_NAMESPACE')) {
    error_log('Error: PLUGIN_NAMESPACE is not defined.');
    exit;
}

spl_autoload_register(function ($class) {
    $prefix = PLUGIN_NAMESPACE . '\\';
    if (strpos($class, $prefix) !== 0) {
        return;
    }
    $class = substr($class, strlen($prefix));
    $class = str_replace('\\', '/', $class);
    $file = __DIR__ . '/' . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});