<?php 
        $servidor = "localhost"; //Aqui va el servidor que utilizaremos
        $usuario = "root";  // aqui va nuestro usuario de la base de datos
        $contraseña = "";   // contrasela del usuario en caso de tenerla
        $BD = "flashmail";  // nombre de la base de datos

        $conexion = mysqli_connect($servidor,$usuario,$contraseña,$BD);
?>