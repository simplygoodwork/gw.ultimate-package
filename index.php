<?php

require_once('twig/lib/Twig/Autoloader.php');
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('./');
$twig = new Twig_Environment($loader, array(
    'cache' => './cache/',
));

echo $twig->render('index.html');
