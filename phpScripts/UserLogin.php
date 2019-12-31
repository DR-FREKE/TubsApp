<?php

    require_once("TubsLogin.php");

    class userLogin{

        public function loginUser(){
            if(isset($_GET['email']) && isset($_GET['password'])){
                $entered_Email = $_GET['email'];
                $entered_Password = $_GET['password'];

                if(!empty($entered_Email) && !empty($entered_Password)){
                    $user_Logon = new tubsLogin($entered_Email, $entered_Password);
                }
            }
        }
    }

    $log = new userLogin();
    $log->loginUser();
?>