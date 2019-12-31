<?php

    ob_start();
    session_start();

    class main{
        private $loggedIn = false;

        public function isLoggedIn(){

            if(isset($_SESSION['userID']) && isset($_SESSION['UserLevel'])){
                $sessionID = $_SESSION['userID']; 
                $sessionLevel = $_SESSION['UserLevel'];

                if(!empty($sessionID) && !empty($sessionLevel)){
                    $result = ($sessionLevel == 1) ? $this->loggedIn = true : $this->loggedIn = false;
                    return $result;
                }
            }
        }
    }
/*
class trial{

    public $name;
    public $age;
    public $class; 
    public $gender;
    public $array;

    public function __construct($arr = array()){
       $this->array = $arr;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }
    public function getName(){
        return $this->array[0];
    }
    public function getAge(){
        return $this->array[1];
    }
    public function getClass(){
        return $this->array[2];
    }
    public function getGender(){
        return $this->gender;
    }
}

$tr = new trial(array('solomon', 22, 'grad'));
$tr->setGender("Male");
echo ($tr->getName() ." ". $tr->getAge() ." ". $tr->getClass() ." ". $tr->getGender());
**/

?>