<?php

require_once __DIR__.'/bootstrap.php';

/**
 * Smallest controller eva
 */
$app->get('{template}', function() use($app) {
    $template = $app['request']->get('template').'.html';
    return $app['twig']->render($template);
})
->assert('template', '.*')
->value('template', 'index')
->method('GET');

return $app;
