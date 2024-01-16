<?php

spl_autoload_register(static function ($class) {
    $namespace = 'heyaender\\Excelintar\\';
    if (0 === strpos($class, $namespace)) {
        include __DIR__ . '/Excelintar/' . str_replace($namespace, '', $class) . '.php';
    }
});

// EOF