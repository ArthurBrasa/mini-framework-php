<?php 

    namespace App\Controllers;
    use MF\Controller\Action;

    class ApiController extends Action
    {
        public function index() {
            return $this->response(['status' => 'success'], 200);
        }
    }