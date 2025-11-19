<?php 
class Home extends Controller{

    public function index(){
        
        $obj = new Database();
        
        $obj = $obj->connectDb();
        show($obj);

        $this->view("home");
        //echo "ahoj si v klase home a pouzil si metodu index";
    }
}