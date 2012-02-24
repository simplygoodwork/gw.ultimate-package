<?php

require_once __DIR__.'/bootstrap.php';

use Symfony\Component\HttpFoundation\Response;

$app->get('/', function() {
    return new Response('Hello world');
});

return $app;
