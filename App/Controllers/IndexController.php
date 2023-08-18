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
            
        
            $this->render('wellcome');
        }

        public function info(): bool
        {
            return phpinfo();
        }

    }
