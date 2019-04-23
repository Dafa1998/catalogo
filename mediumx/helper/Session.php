<?php

class Session 
{
    public function __construct(){
        session_start();
    }
    public static function  logout(){
   session_destroy();
   header('location: .');
    }
}




 ?>