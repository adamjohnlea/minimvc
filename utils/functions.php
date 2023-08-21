<?php

function dd($vars)
{
	echo '<pre>';
	var_dump($vars);
	echo '</pre>';
	die();
}

function urlIs($value): bool
{
	return $_SERVER['REQUEST_URI'] === $value;
}

function routesToController($uri, $routes): void
{
	if (array_key_exists($uri, $routes)) {
		require $routes[$uri];
	} else {
		require 'controllers/404.php';
	}
}