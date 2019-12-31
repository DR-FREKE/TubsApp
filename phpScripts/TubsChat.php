<?php
require_once('tubsConnection.php');

class TubsChat{

    public $error;
    public function __construct(){
        $connector = new DBConnection('localhost', 'mymessenger', 'root', 'solomon');

        try{
            if($connector->hasConnected()){
                echo "connected!!!";
            }else{
                echo "not connected";
            }
        }catch(Exception $error){
            echo $error;
        }
    }
}
$start = new TubsChat();

?>