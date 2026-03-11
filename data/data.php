<?php

    $user = "root";
    $pass = "";
    $dsn = "mysql:host=localhost;dbname=agenda";
    
    try{
        $con = new PDO($dsn,$user,$pass,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => false
        ]);
    }catch(PDOException $e){
        echo "ERRO: ".$e->getMessage();
    }
?>
