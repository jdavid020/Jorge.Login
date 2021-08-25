  
<!DOCTYPE html >
<html lang = " en ">
<cabeza >
    <meta  charset = " UTF-8 " >
    <meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
    <meta  http-equiv = " X-UA-Compatible " content = " ie = edge " >
    <título > Inicio </título >
    <link  rel = " stylesheet " href = " main.css " >
  
</cabeza >
<cuerpo >

    <div  id = "menú">
        <ul >
            <li > Inicio </li >
            <li  class = " cerrar-sesion " >
                <Un href = " incluye/logout.php "> Cerrar Sesión </una >
            </li >
        </ul >
    </div >

    <sección >
        <h1 > Bienvenido <?php  echo  $usuario -> getNombre (); ?>  </h1 >
    </sección >
    
</cuerpo >
</html >
