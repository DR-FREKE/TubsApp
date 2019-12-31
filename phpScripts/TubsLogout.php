<?php
    require_once("main.php");
    session_destroy();

    class logOut{

        public function isLoggedOut(){
            $main = new main();
            
            if($main->isLoggedIn()){
                echo "logout";
            }
        }
    }

$logout = new logOut();
$logout->isLoggedOut();

?>