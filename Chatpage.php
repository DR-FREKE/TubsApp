<?php
    require_once("./phpScripts/tubsConnection.php");
    require_once("./phpScripts/main.php");

    class Chatpage{
        
        public function __construct(){
            $connector = new DBConnection('localhost', 'mymessenger', 'root', 'solomon');
            $main = new main();
            if(!$connector->hasConnected()){
                echo "not Connected";
            }else{
                //$returned_result = ($main->isLoggedIn()) ? include("tubsChat.php"): "Sorry ";
                if(!$main->isLoggedIn()){
                    //echo "Sorry you need to login first";
                    header('Location: TubsIndex.php');
                }else{
                    include("tubsChat.php");
                }
            }
        }
    }

$tubs = new Chatpage();
?>