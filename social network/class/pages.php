<?php
require_once("controller/MainController.php");

class Pages extends MainController{

    public function getpages(){
       if(!isset($_GET['pages'])){
            $this->require_page("pages/home.php");
       }else{

        $get = @$_GET['pages'];

        switch ($get) {
            case 'friends':
                 $this->require_page("pages/friends.php");
                break;
            
            default:
                # code...
                break;
        }
       
       }
    }

    public function gettitle(){
        if(!isset($_GET['pages'])){
           $title = ".:: Home | ".$_SESSION['user_name']." ::.";
       }else{
        
        $get = @$_GET['pages'];

        switch ($get) {
            case 'friends':
                 $title = ".:: Friends | ".$_SESSION['user_name']." ::.";
            break;
            
            default:
                # code...
                break;
        }
       }
       return $title;
    }
}

$pages = new pages;

?>