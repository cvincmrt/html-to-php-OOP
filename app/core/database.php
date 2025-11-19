<?php
class Database {

    public function connectDb(){
        try{
            $string = "mysql:host = localhost; dbname = db_web";
            $db = new PDO($string, "root", "");

            return $db;
        }catch(PDOException $e){
           //chyba pri pripajani k databaze
           die("Chyba databazy: ".$e->getMessage());
        }
    }


    // read vyber udajov SELECT
    public function read($query, $params = []){
        try {
            $DB = $this->connectDb();
            $stmt = $DB->prepare($query);

            //spustenie dotazu
            $stmt->execute($params);
            
            return $stmt->fetchAll(POD::FETCH_OBJ);

        } catch (PODException $e) {
            
            //chyba pri select dotaze
            echo "DB Read error: ".$e->getMessage();

            return false;
        }
        
        
        
        
        
        
        
        
        
        
        
        
    }


}