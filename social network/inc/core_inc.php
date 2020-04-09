<?php
require_once("../controller/MainController.php");

if(isset($_GET['action']) && ($_GET['action']) !==""){
    switch ($_GET['action']) {
        case 'user_login_acct':
            $username = $main->clean($_POST['username']);
            $password = $main->clean($_POST['password']);
            $main->fun_user_login_acct($username,$password);
            break;
        case 'add_friend_request':
                $user_id = $main->clean($_POST['user_id']);
               echo $main->run("INSERT INTO `friends` (`sender`, `receiver`) VALUES ('".$_SESSION['user_id']."','$user_id')")? 1:0;
            break;
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }
}else{
    return false;
}

?>