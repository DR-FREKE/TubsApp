<?php
    require_once("./phpScripts/tubsConnection.php");
    require_once("./phpScripts/main.php");

    class tubsIndex{
        
        public function __construct(){
            $connector = new DBConnection('localhost', 'mymessenger', 'root', 'solomon');
            $main = new main();
            if(!$connector->hasConnected()){
                $returned_result = "not connected";
            }else{
                $returned_result = ($main->isLoggedIn()) ? include("contact.php"):include("login.php");
            }
            return $returned_result;
        }
    }

$tubs = new tubsIndex();
?>