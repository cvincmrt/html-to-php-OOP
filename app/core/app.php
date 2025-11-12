<?php

class App {

    /**
     * Class constructor.
     */
    public function __construct() {
        $url = $this->urlSplit();

        show($url);
       
    }

    /**
     * function create array 
     */
    private function urlSplit(){
        return explode("/", trim($_GET["url"],"/"));
    }
}