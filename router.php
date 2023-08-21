<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
	'/' => 'controllers/index.php',
	'/about' => 'controllers/about.php',
	'/contact' => 'controllers/contact.php'
];

routesToController($uri, $routes);
