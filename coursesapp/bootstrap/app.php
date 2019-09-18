<?php


session_start();


require __DIR__ .'/../vendor/autoload.php';


// instantiate a new application instance

$app = new \Slim\App([
    'settings'=>[
    
        'displayErrorDetails'=>true
    ]
    
    ]);
// Get container
$container = $app->getContainer();
// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('../templates', [
    ]);

    // Instantiate and add Slim specific extension
    $router = $container->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
};
require __DIR__ .'/../src/routes.php';