<?php

require_once __DIR__.'/../vendor/silex.phar';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../templates',
    'twig.class_path' => __DIR__.'/../vendor/twig/lib',
    'twig.options' => array('debug' => true)
));
