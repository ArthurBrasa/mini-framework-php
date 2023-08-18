<?php 

    namespace App\Controllers;
    use MF\Controller\Action;

    class StoreController extends Action
    {
        public function index() {
            return $this->render('store');
        }
    }