<?php
require_once "DBController.php";
session_start();
class MainController extends DBController{

    public function redirect_to($location = ""){
        if($location != ""){
            header("location:{$location}");
        }
        exit();
    }
    public function require_page($path = ""){
        if($path != ""){
            require_once($path);
        }
    }
    public function clean($str){
       $str = @trim($str);
       if(get_magic_quotes_gpc()){
           $str = stripslashes($str);
       }
       return $this->escape($str);
    }
    public function check_session(){
        if(isset($_SESSION['user_id'])){
            return true;
        }else{
            return false;
        }
    }
    public function user_login($location){
        if($this->check_session() == true){
            $this->redirect_to($location);
        }
    }
    public function user_not_login($location){
        if($this->check_session() == false ){
            $this->redirect_to($location);
        }
    }
    public function fun_user_login_acct($username,$password){
       $sql = $this->run("SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password' AND `status`='1'");
       $rows = $this->rows($sql);
       $fetch =  $this->fetch($sql);
       if($rows == 1){
            $_SESSION['user_id'] = $fetch['user_id'];
            $_SESSION['user_name'] = $fetch['username'];
            $_SESSION['email'] = $fetch['email'];
           echo 1;
       }else{
           echo 0;
       }
    }


}
$main = new MainController;
?>