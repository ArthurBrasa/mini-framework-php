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

            $routes['homePage'] = array(
                'route' => '/home',
                'controller' => 'IndexController',
                'action' => 'home'
            );

            $routes['store'] = array(
                'route' => '/store',
                'controller' => 'StoreController',
                'action' => 'index'
            );

            $routes['api'] = array(
                'route' => '/api',
                'controller' => 'ApiController',
                'action' => 'index'
            );

            $this->setRoutes($routes);
        }

        
    }