<?php

namespace Core;


class Router 
{

	protected $routes = [
		'GET' => [],
		'POST' => []
	];

	public static function load($file) 
	{
		$router = new static; // self

		require $file;
		
		return $router;
	}

	public function get($uri, $controller) 
	{
		$this->routes['GET'][$uri] = $controller;
	}
	
	public function post($uri, $controller) 
	{
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType)
	{
		if(array_key_exists($uri, $this->routes[$requestType]))
		{
			return $this->callAction(
				...explode('@', $this->routes[$requestType][$uri])
			);
		}

		throw new Exception('No route defined for this uri.');
	}

	protected function callAction($controller, $action)
	{
		$controller = "App\\Controllers\\{$controller}";
		$Controller = new $controller;

		if (! method_exists($Controller, $action)) {
			throw new Exception(
				"{$controller} does not respond to the {$action} action."
			);
		}

		return $Controller->$action();
	}
}