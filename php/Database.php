<?php/*
    $server = 'localhost';
    $database = 'solmedi';
    $username = 'root';
    $password = '';

    try{
        $conn = new PDO ("mysql:host=$server;dbname=$database;",$username,$password);
        echo ("Bienvenido");
    }
    catch( PDOException $exp){
        echo ("Lo siento!! No es posible la conexion con la base de datos por el siguiente error: $exp");

    }*/

    $conn=mysqli_connect("localhost","root","","solmedi");

?>