<?php

    namespace App\Controllers;

    use MF\Controller\Action;
    use App\Connection;
    use App\Models\Users;

    class IndexController extends Action
    {

        public function index() : void
        {
             $get_db = false;  

            if($get_db) {
                
                $conn = Connection::getDb();

                $users = new Users($conn);

                $userslist = $users->getUsers();
                unset($conn);
                unset($users);
            
                $this->view->users = $userslist;
            }
            
        
            $this->render('wellcome');
        }

        public function info(): bool
        {
            return phpinfo();
        }

    }
