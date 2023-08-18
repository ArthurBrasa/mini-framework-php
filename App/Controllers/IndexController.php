<?php

    namespace App\Controllers;

    use MF\Controller\Action;

    class IndexController extends Action
    {

        public function index(): void
        {
            $this->view->dados = array(
                'nome' => 'Arthur',
                'idade' => 21
            );

            $this->render('wellcome');
        }

        public function info(): bool
        {
            return phpinfo();
        }

    }
