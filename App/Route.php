<?php

    namespace App;
    // use App\Controllers\IndexController;

    class Route
    {
        private $routes;

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

        public function initRoutes() : void
        {
            
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'index'
            );

            $routes['info'] = array(
                'route' => '/info',
                'controller' => 'IndexController',
                'action' => 'info'
            );

            $this->setRoutes($routes);
        }

        public function run($url) : void
        {
            
            foreach ($this->getRoutes() as $key => $route){

                if($url == $route['route']){
                    $class = "App\\Controllers\\".ucfirst($route['controller']);
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                }
            }
        }
        
        public function getUrl() : string
        {
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }