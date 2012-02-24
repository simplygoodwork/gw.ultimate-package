<?php

require_once __DIR__.'/bootstrap.php';


/**
 * Routing controller
 */
$app->get('{url}', function() use($app) {
    return $app['twig']->render('index.html');
})->assert('url', '.*');

return $app;
