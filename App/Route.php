<?php

    namespace App;
    use MF\Init\Bootstrap;

    class Route extends Bootstrap
    {

        protected function initRoutes() : void
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

        
    }