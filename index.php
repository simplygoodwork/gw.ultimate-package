<?php

/**
 * Add your template info here
 */
$template = key($_GET);

/**
 * Twig templating
 * http://twig-project.org/doc/
 *
 */
require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    // 'debug' => TRUE,
    'cache' => 'compilation_cache',
    'auto_reload' => TRUE
));

$template = $twig->loadTemplate($template.'.html');
echo $template->render(array());

?>