
<?php
        session_start();
        $servidor = "localhost"; //Aqui va el servidor que utilizaremos
        $usuario = "root";  // aqui va nuestro usuario de la base de datos
        $contraseñaServidor = "";   // contrasela del usuario en caso de tenerla
        $BD = "flashmail";  // nombre de la base de datos
        
 
        $correo = $_POST['correoSesion'];
        $contraseña = $_POST['contraseñaSesion'];

        $conexion = mysqli_connect($servidor,$usuario,$contraseñaServidor,$BD);
        
        $sesion = mysqli_query($conexion,"SELECT * FROM usuario WHERE correo='$correo' AND contrasena='$contraseña'");
        
        echo "VALIDO AL BASE DE DATOS";
        

        if( mysqli_num_rows($sesion) > 0 ){
            $fila = mysqli_fetch_array($sesion);
            $_SESSION["correo"] = $fila['correo'];
            echo 'INICIO DE SESION SATISFACTORIO , AGREGAR LA REDIRECCION';
            echo "<script> alert('DATOS CORRECTOS')</script>";
            echo '<script> window.location="../vistas/principal.php"; </script>';
        }else{
            echo "<script> alert('USUARIO O CONTRASEÑA INCORRECTOS')</script>";
            echo '<script> window.location="../index.php"; </script>';
        }
         
        mysqli_free_result($sesion);
        mysqli_close($conexion);


?>