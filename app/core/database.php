<?php
class Database {

    try{
        $string = "mysql:host = localhost; dbname = db_web";
        $db = new PDO($string, "root", "");

    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
}