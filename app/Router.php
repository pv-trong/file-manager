<?php

namespace App;
class Router
{
    private $routes = [];
    private $middlewares = [];

    public function get($path, $callback)
    {
        $this->registerRoute('GET', $path, $callback);
    }

    public function post($path, $callback)
    {
        $this->registerRoute('POST', $path, $callback);
    }

    private function registerRoute($method, $path, $callback)
    {
        // Convert path to a regex pattern
        $pattern = preg_replace('/\{([\w]+)\}/', '(?<$1>[\w-]+)', $path);
        $this->routes[$method][$pattern] = $callback;
    }

    public function addMiddleware($middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function resolve()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        // Run middlewares
        foreach ($this->middlewares as $middleware) {
            call_user_func($middleware, $method, $path);
        }

        foreach ($this->routes[$method] as $pattern => $callback) {
            if (preg_match("@^$pattern$@", $path, $matches)) {
                $params = array_intersect_key($matches, array_flip(array_filter(array_keys($matches), 'is_string')));

                if (is_string($callback)) {
                    [$controllerName, $method] = explode('@', $callback);
                    $controllerName = 'App\Controllers\\' . $controllerName;
                    $controller = new $controllerName();
                    call_user_func_array([$controller, $method], array_values($params));
                } else {
                    call_user_func_array($callback, array_values($params));
                }

                return;
            }
        }

        // Handle 404 Not Found
        $this->handleError(404);
    }

    private function handleError($errorCode)
    {
        http_response_code($errorCode);
        if ($errorCode == 404) {
            echo "404 Not Found";
        } else {
            echo "An error occurred";
        }
    }
}
