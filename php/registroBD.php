<?php
  $conn_string = "host=ec2-54-235-193-0.compute-1.amazonaws.com port=5432 dbname=dbrpcostlumanv user=yzlgbqotsrcikb password=928dad77a909ba60de8e439578ca7d40ef2800d95f0cd9f95c35e700e8ddb34b options='--client_encoding=UTF8'";       
           
   $conexion = pg_connect($conn_string);
                      
   if (!$conexion) {
    echo "Error: No se pudo conectar a Postgresql." . pg_last_error();
    exit;
   }
    
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['email'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $contraseña = $_POST['contraseña'];
    $direccion = $_POST['direccion'];
    $direccion2 = $_POST['direccion2'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];
    $ciudad = $_POST['ciudad'];
    $codigoPostal = $_POST['codigoPostal'];

    // ----------------CREAR USUARIO--------------------
    $usuario = "INSERT INTO usuario(correo, contrasena) VALUES ('$correo', '$contraseña') RETURNING id_usuario";
    $ejecutar = pg_query($usuario); 
    if(!$ejecutar){
      echo "<br>";
      echo "Error: " .  pg_last_error();
    }

    //--------------CRERAR CLIENTE----------------------    
    $row = pg_fetch_row($ejecutar);
    $idUsuario = $row[0]; //buscando el id del usuario para agregarselo a la tabla cliente 
    $cliente = "INSERT INTO cliente(id_usuario, nombre, apellido, fecha_nacimiento) VALUES ('$idUsuario','$nombres', '$apellidos', '$fechaNacimiento' )RETURNING id_cliente";
    $ejecutar = pg_query($cliente);
    if(!$ejecutar){
      echo "<br>";
      echo "Error: " . pg_last_error();
    }

   //-------------CREAR DIRECCION----------------------
    $row = pg_fetch_row($ejecutar);
    $idCliente = $row[0]; //buscando el id del cliente para agregarselo a la tabla direccion
    $direccion ="INSERT INTO direccion(id_cliente, pais, estado, ciudad, codigo_postal, zona, zona_2) VALUES('$idCliente', '$pais', '$estado', '$ciudad', '$codigoPostal', '$direccion', '$direccion2')";
    $ejecutar = pg_query($direccion);
    if(!$ejecutar){
      echo "<br>";
      echo "Error: " . pg_last_error();
    }

    //-----------USUARIO REGISTRADO-----------------------
    if($ejecutar){
      echo "<script> alert('Registrado Satisfactoriamente')</script>";
      echo '<script> window.location="../index.php"; </script>';

    }else {
      echo "Error: " . pg_last_error();
    }



    //---------CERRAR CONEXION----------------------
    pg_close($conexion);
                      
?>