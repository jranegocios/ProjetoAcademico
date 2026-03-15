<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "agenda";

    
    
    try{
        // $con = new PDO("mysql:host=$host; dbname=$db",$user,$pass);
        $con= new PDO ("mysql:host=$host;dbname=$db",$user,$pass);
        $con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // PDO::ATTR_PERSISTENT => false;
    }catch(PDOException $e){
        echo "ERRO: ".$e->getMessage();
    }

    
?>
