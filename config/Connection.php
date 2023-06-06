<?php

class Connection{

    protected $con;

    public function __construct(){
        $this->con = new mysqli('localhost', 'root', '', 'php_oop_crud_system');        
    }

}