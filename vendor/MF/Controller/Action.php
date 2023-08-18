<?php 
    
    namespace MF\Controller;

    class Action
    {
        protected $view;

        public function __construct()
        {
            $this->view = new \stdClass();
        }

        protected function render($view): void
        {
            $this->view->page = $view;
            require_once '../App/Views/layouts/layout.phtml';
        }

        protected function section() : void
        {
            $classAtual = get_class($this);
            $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
            $classAtual = strtolower(str_replace('Controller', '', $classAtual));

            require_once '../App/Views/'. $classAtual . '/'. $this->view->page . '.phtml';

        }
    }
