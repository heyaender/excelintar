<?php

spl_autoload_register(static function ($class) {
    $namespace = 'putroandrianto\\Excelintar\\';
    if (0 === strpos($class, $namespace)) {
        include __DIR__ . '/Excelintar/' . str_replace($namespace, '', $class) . '.php';
    }
});

// EOF