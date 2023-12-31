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

        protected function response($data, int $status=200): void
        {
            http_response_code($status);
            if($data == null){
                http_response_code($status);
                header('Content-Type: text/html');
                exit;
            }
            elseif(is_array($data)) 
            {
                header('Content-Type: application/json');
                echo json_encode($data);
                exit;
            }
            elseif(is_string($data))
            {
                header('Content-Type: text/html');
                echo $data;
                exit;
            }

        }
    }
