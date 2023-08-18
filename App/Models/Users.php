<?php 

    namespace App\Models;

    use MF\Model\Model;

    class Users extends Model
    {
        
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