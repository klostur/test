<?php 

require 'config.php';

class Connection {
    
    public static function make($host, $db, $user, $password) {

        $connInfo = "mysql:host=$host;port=3307;dbname=$db;charset=UTF8";

        try {
            $conn = new PDO($connInfo, $user, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conn;
                  
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }    
    }
}

return Connection::make($host, $db, $user, $password);