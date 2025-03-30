<?php
    namespace App\Lib;

    use App\Database\Database;

    class User {
        
        public function getUserById($id) {
            $db = new Database();
            $db->create_connection();
            $connection = $db->get_connection();

            $sql = "SELECT * FROM users WHERE id = ? LIMIT 1";
            $stmt = $connection->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 0) {
                return false;
            }else{
                $result = $result->fetch_assoc();
            }

            return $result;
        }
    }
?>