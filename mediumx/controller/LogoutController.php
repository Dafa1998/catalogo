<?php 
class LogoutController{
    public function __construct(){
        session::logout();
    }
}
?>