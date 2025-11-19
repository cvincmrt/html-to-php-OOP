<?php
class Database {

    public function connectDb(){
        try{
            $string = "mysql:host = localhost; dbname = db_web";
            $db = new PDO($string, "root", "");

            return $db;
        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
    }

    


}