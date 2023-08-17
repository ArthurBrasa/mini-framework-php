<?php

    namespace App\Controllers;

    class IndexController
    {
        private $view;

        public function __construct()
        {
            $this->view = new \stdClass();
        }

        public function index(): void
        {
            $this->view->dados = array(
                'nome' => 'Arthur',
                'idade' => 21
            );

            $this->render('welcome');
        }

        public function info(): bool
        {
            return phpinfo();
        }

        public function render(string $view): void
        {
            $classAtual = get_class($this);
            $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
            $classAtual = strtolower(str_replace('Controller', '', $classAtual));

            require_once '../App/Views/'. $classAtual . '/'. $view . '.phtml';

        }
    }
