
<!DOCTYPE html >
<html lang = " en " >
<cabeza >
    <meta charset = " UTF-8 " >
    <meta name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
    <meta  http-equiv = " X-UA-Compatible " content = " ie = edge " >
    <título > Sesiones </título >

    <link  rel = " stylesheet " href = " main.css " >
</cabeza >
<cuerpo >
    <formulario de  acción = "" método = " POST " >
     

            if (isset($errorLogin)) {
                echo  $errorLogin ;
            }

      
        <h2 > Iniciar sesión </h2 >
        <P > Nombre de usuario: <br >
        <input  type = " text " name = " username " > </p >
        <P > Contraseña: <br >
        <input  type = " contraseña " nombre = " contraseña " > </p >
        <p  class = " center " > <input  type = " submit " value = " Iniciar Sesión " > </p >
    </formulario >
</cuerpo >
</html >
 