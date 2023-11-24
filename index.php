<?php

// Point to library
require_once 'composer/vendor/autoload.php';

// Set up Environment
$loader = new \Twig\Loader\FilesystemLoader('.');
$twig = new \Twig\Environment($loader);


// Load and render template
echo $twig->render('homepage.html');
?>
						 