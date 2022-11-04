<?php
namespace myProject\Controllers;

class MainController{

    public function main()
    {
        echo 'Main page';
       
    }

    public function sayhello(string $name){
        echo 'hello '. $name;
    }
}