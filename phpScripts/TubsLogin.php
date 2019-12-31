<?php
    require_once("tubsConnection.php");
    require_once("TubsMain.php");
    require_once("main.php");

    class tubsLogin{
        public $mEmail;
        public $mPassword;

        public function __construct($email, $password){
            $this->mEmail = $email;
            $this->mPassword = $password;
            $error;
            $return_result;
            
            $connector = new DBConnection('localhost', 'mymessenger', 'root', 'solomon');
            $userLogging = new tubsMain($this->mEmail, $this->mPassword);
            try{
                if($connector->hasConnected()){
                    $query = "SELECT userID, UserLevel FROM customers WHERE Email = '".$userLogging->getUserEmail()."' && Password = '".$userLogging->getUserPassword()."'";
                    if($query_run = mysql_query($query)){

                        $mysql_num_row  = mysql_num_rows($query_run);
                        if($mysql_num_row >= 1){

                            if($mysql_fetch_assoc = mysql_fetch_assoc($query_run)){
                                $userLevel = $mysql_fetch_assoc['UserLevel'];
                            }
                            $user_ID = mysql_result($query_run, 0, 'userID');

                            $_SESSION['userID'] = $user_ID;
                            $_SESSION['UserLevel'] = $userLevel;

                            $response = $_SESSION['UserLevel'];
                            
                            switch($response){
                                case 1:
                                    $return_result = "good chatter";
                                break;
                                default:
                                    $return_result = "good Admin";
                            }
                        }elseif($mysql_num_row <= 0){
                            $return_result = "wrong";
                        }
                    }
                }else{
                    $return_result = "not connected";
                }
            }catch(Exception $error){
                $return_result = $error;
            }
            echo $return_result;
        }
    }
    
?>