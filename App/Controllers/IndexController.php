<?php

    namespace App\Controllers;

    use MF\Controller\Action;
    use App\Models\Users;

    use MF\Model\Container;

    class IndexController extends Action
    {

        public function index() : void
        {
             $get_db = false;  

            if($get_db) {
                
                $users = Container::getModel('Users');

                $userslist = $users->getUsers();
            
                $this->view->users = $userslist;
            }
            $this->response($this->render('wellcome'), 200);
        }

        public function info(): bool
        {
            return phpinfo();
        }

        public function home(): void
        {
            $this->response($this->render('home'), 200);
        }

        public function notFound(): void
        {
            $this->render('404');
        }

    }
