<?php

class DBConnection{
    public $error;
    public $mLocalhost = null;
    public $mUsername = null;
    public $mPassword = null;
    public $hasConnected = false;

    public function __construct($localhost, $dbName, $username, $password){
        try{
            if(!$this->getConnection($localhost, $dbName, $username, $password)){
                //echo "not Connected";
                $this->hasConnected = false;
            }elseif($this->getConnection($localhost, $dbName, $username, $password)){
                //echo "connected!!!";
                $this->hasConnected = true;
            }
        }catch(Exception $error){
            die($error);
        }
    }

    public function getConnection($localhost, $dbName, $username, $password){
        $this->mLocalhost = $localhost;
        $this->mUsername = $username;
        $this->mPassword = $password;

        if(@mysql_connect($this->mLocalhost, $this->mUsername, $this->mPassword) && @mysql_select_db($dbName)){
            return true;
        }elseif(!@mysql_connect($this->mLocalhost, $this->mUsername, $this->mPassword) || !@mysql_select_db($dbName)){
            return false;
        }
    }

    public function hasConnected(){
        return $this->hasConnected;
    }
}


?>