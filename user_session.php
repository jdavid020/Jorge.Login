<?php

class UserSession{

public function __construct(){
    session_start();
}

public function setCurrentuser($user){
    $_SESSION['user']= $user;
}
public function getCurrentuser(){
   return $_SESSION['user'];
}
public function closeSession(){
  session_unset();
  sesiones_destroy();


}
}


?>