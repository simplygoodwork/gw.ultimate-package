<?php

require_once __DIR__.'/bootstrap.php';

/**
 * Smallest controller eva
 */
$app['debug'] = true;
$app->get('{template}', function() use($app) {
    $template = rtrim($app['request']->get('template'), '/');
    $template = (substr ($template, -5) == '.html') ? $template : $template.'/index.html';
    return $app['twig']->render($template);
})
->assert('template', '.*')
->method('GET');

return $app;
