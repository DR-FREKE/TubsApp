<?php
require_once("tubsConnection.php");

class tubsMain{

    private $userEmail;
    private $userPassword;
    private $userFirstName, $userLastName, $userType, $userGender;

    public function __construct($email, $password){
        $this->userEmail = $email;
        $this->userPassword = $password;
    }

    public function setUserFirstName($firstname){
        $this->userFirstName = $firstname;
    }
    public function setUserLastName($lastname){
        $this->userLastName = $lastname;
    }
    public function setUserType($usertype){
        $this->userType = $usertype;
    }
    public function setUserGender($gender){
        $this->userGender = $gender;
    }


    public function getUserEmail(){
        return $this->userEmail;
    }
    public function getUserPassword(){
        return $this->userPassword;
    }
    public function getUserFirstName(){
        return $this->userFirstName;
    }
    public function getUserLastName(){
        return $this->userLastName;
    }
    public function getUserType(){
        return $this->userType;
    }
    public function getUserGender(){
        return $this->userGender;
    }
}

?>