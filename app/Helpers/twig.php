<?php
// Include the Composer autoload file
require_once __DIR__.'/../../vendor/autoload.php';
 // Create a Twig loader and environment
 $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../../views'.$twig_dir);
 $twig = new \Twig\Environment($loader);