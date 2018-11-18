
<?php
        session_start();
         $conn_string = "host=ec2-54-235-193-0.compute-1.amazonaws.com port=5432 dbname=dbrpcostlumanv user=yzlgbqotsrcikb password=928dad77a909ba60de8e439578ca7d40ef2800d95f0cd9f95c35e700e8ddb34b options='--client_encoding=UTF8'";       
           
         $conexion = pg_connect($conn_string);
 
        $correo = $_POST['correoSesion'];
        $contraseña = $_POST['contraseñaSesion'];

        $sesion = pg_query("SELECT * FROM usuario WHERE correo='$correo' AND contrasena='$contraseña'");
        
       // echo "VALIDO AL BASE DE DATOS";
        

        if( pg_num_rows($sesion) > 0 ){
            $fila = pg_fetch_array($sesion);
            $_SESSION["correo"] = $fila['correo'];
           // echo 'INICIO DE SESION SATISFACTORIO , AGREGAR LA REDIRECCION';
            //echo "<script> alert('DATOS CORRECTOS')</script>";
            echo '<script> window.location="../vistas/principal.php"; </script>';
        }else{
            echo "<script> alert('USUARIO O CONTRASEÑA INCORRECTOS')</script>";
            echo '<script> window.location="../index.php"; </script>';
        }
         
        pg_free_result($sesion);
        pg_close($conexion);


?>