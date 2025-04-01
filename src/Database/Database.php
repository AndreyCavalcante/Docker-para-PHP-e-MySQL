<?php

    #Arquivo de conexão com o banco de dados
    #Esse arquivo é apenas para exemplo, pode ser modificado como quiser
    #O exemplo foi feito em mysqli, mas pode ser substituído por PDO

namespace App\Database;

class Database{

    private $connection;

    public function create_connection(){
        $host = getenv('DB_HOST');
        $user = getenv('DB_USER');
        $pass = getenv('DB_PASS');
        $db = getenv('DB_NAME');

        $this->connection = new \mysqli($host, $user, $pass, $db);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function get_connection(){
        if ($this->connection) {
            return $this->connection;
        }
        die("Database connection not established.");
    }
    
}