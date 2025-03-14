<?php
spl_autoload_register(function ($class_name) {
    // Define base directory for the namespace prefix
    $base_dir = __DIR__ . '/instamojo-php/src/';

    // Get the relative class name
    $file = $base_dir . str_replace('\\', '/', $class_name) . '.php';

    // If the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});
