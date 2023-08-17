<?php

    namespace App\Controllers;

    class IndexController
    {
        public function index(): void
        {
            echo "Slim Framework PHP";
        }

        public function info(): bool
        {
            return phpinfo();
        }
    }
