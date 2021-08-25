<?php

include_once 'db.php';

class useer extends DB{
    private $nombre;
    private $username;

    public function userExists($user,$pass){
$md5pass=md5($pass);
$query=$this->connect()->prepare('SELEC * FROM usuarios WHERE username=:user AND password=:pass');
$query->execute(['user'=> $user,'pass'=> $md5pass]);

if($query->rowCoount()){
    return true;
}else{
    return false;
}

    }

    public function setUser($user){
        $query=$this->connect()-> prepare ('SELEC * FROM usuarios WHERE username =:user');
        $query->execute(['user'=> $user]);
    
    foreach ($query as $currenuser){
        $this->nombre = $currenuser['nombre'];
        $this->username = $currenuser['username'];

    }
}

public function getNombre(){
    return $this-> nombre;
}
}
?>