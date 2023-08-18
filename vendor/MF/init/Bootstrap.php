<?php

    namespace MF\Init;

    abstract class Bootstrap
    {
        private $routes;

        abstract protected function initRoutes();

        public function __construct()
        {
            $this->initRoutes();
            $this->run($this->getUrl());
        }
        
        public function getRoutes() : array
        {
            return $this->routes;
        }

        public function setRoutes(array $routes) : void
        {
            $this->routes = $routes;
        }

        protected function run($url) : void
        {
            $status = 404;
            foreach ($this->getRoutes() as $key => $route){
                if($url == $route['route']){
                    $class = "App\\Controllers\\".ucfirst($route['controller']);
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                    $status = 200;
                }
            
            }
            if($status == 404){
                http_response_code($status);
                $class = "App\\Controllers\\".ucfirst('IndexController');
                $controller = new $class;
                $action = 'notFound';
                $controller->$action();
            }
        }

        
        protected function getUrl() : string
        {
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }