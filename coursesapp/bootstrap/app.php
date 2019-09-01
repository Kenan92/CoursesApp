<?php


session_start();


require __DIR__ .'/../vendor/autoload.php';


// instantiate a new application instance

$app = new \Slim\App([
    'settings'=>[
    
        'displayErrorDetails'=>true
    ]
    
    ]);

require __DIR__ .'/../src/routes.php';