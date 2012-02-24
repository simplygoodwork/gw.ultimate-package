<?php

require_once __DIR__.'/../vendor/silex.phar';

$app = new Silex\Application();

$app['autoloader']->registerNamespace('Twig', __DIR__.'/../vendor/twig/lib/Twig');
