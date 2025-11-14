<?php

class App {

    private $controller = "home";

    private $method = "index";

    private $param = [];


    /**
     * Class constructor.
     */
    public function __construct() {
        $url = $this->urlSplit();

        //show($url[0]);

        if(file_exists("../app/controllers/".strtolower($url[0]).".php")){
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }

        require "../app/controllers/".$this->controller.".php";

        $this->controller = new $this->controller;

        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //ostatne casti url adresy ulozim do pola
        $this->param = array_values($url);

        call_user_func_array([$this->controller, $this->method],$this->param);

    }

    /**
     * function create array 
     */
    private function urlSplit(){
        return explode("/", filter_var(trim($_GET["url"],"/"), FILTER_SANITIZE_URL));
    }
}