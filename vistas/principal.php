<?php 
session_start();
include '../php/servidor.php';

if(isset($_SESSION['correo'])){
    echo "";
}else{
    echo "<script> window.location='../index.php' </script>";
}

$perfil = $_SESSION['correo'];

?>

<!DOCTYPE html>
<html lang="ees">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <article>
            <p>
                felicidades es un usuario registrado
            </p>
            <br>
            <b>Aqui ira el mapa y toda la interfaz visual</b>
        </article>
        <a href="../php/cerrarSesion.php"><button>Cerrar Sesion</button></a>
    </div>
    
</body>
</html>