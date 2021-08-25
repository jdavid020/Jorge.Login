<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession =new userSession();


if(isset($_SESSION['user'])){
echo "hay session";

}else if(isset($_POST['username']) && isset($_POST['password'])){
    echo "validacion de login";
    
}else{
    echo "login";
}
$userForm = $_POST [ 'nombre de usuario' ];
    $passForm = $_POST [ 'contraseña' ];
    if ( $usuario -> userExists ( $userForm , $passForm )) {
        // echo "usuario validado";
        $userSession -> setCurrentUser ( $userForm );
        $usuario -> setUser ( $userForm );

        include_once  'vista / home.php' ;
    }else{

   
        // echo "nombre de usuario y / o contraseña incorrecta";
        $errorLogin = "Nombre de usuario y / o contraseña es incorrecta" ;
        include_once  'vista / login.php' ;
    }






    // echo "Iniciar sesión";
    include_once  'vista / login.php' ;



?>


