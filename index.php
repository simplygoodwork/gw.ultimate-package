<?php

require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    // 'debug' => TRUE,
    'cache' => 'compilation_cache',
    'auto_reload' => TRUE
));

echo $twig->render('index.html');

?>