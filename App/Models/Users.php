<?php 

    namespace App\Models;

    class Users
    {
        protected $db;

        public function __construct(\PDO $db)
        {
            $this->db = $db;
        }

        public function getUsers()
        {
            try {
                $query = "SELECT id, name, email, created_date FROM users";
                return $this->db->query($query)->fetchAll();
            } catch (\PDOException $e) {
                echo "Error! Message: " . $e->getMessage() . " Code: " . $e->getCode();
            }
            
        }
    }