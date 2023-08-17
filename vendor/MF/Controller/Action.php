<?php 
    
    namespace MF\Controller;

    class Action
    {
        protected $view;

        public function __construct()
        {
            $this->view = new \stdClass();
        }

        protected function render(string $view): void
        {
            $classAtual = get_class($this);
            $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
            $classAtual = strtolower(str_replace('Controller', '', $classAtual));

            require_once '../App/Views/'. $classAtual . '/'. $view . '.phtml';

        }
    }
