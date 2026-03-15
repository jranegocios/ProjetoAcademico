<?php

    require("data/data.php");

    $data = $_POST;
    
    if(!empty($data)){
       if($data["type"]=="create"){
            $name = $data["name"];
            $number = $data["number"];
            $email = $data["email"];
            $github = $data["github"];
            $favorito= $data["favorito"];
            
            $sqlInsert= "INSERT INTO contato (name, number, email, github, favorito) VALUES (:name, :number, :email, :github, :favorito)";
            $stmt = $con -> prepare($sqlInsert);
            $stmt->bindParam(":name",$name);
            $stmt->bindParam(":number",$number);
             $stmt->bindParam(":email",$email);
             $stmt->bindParam(":github",$github);
             $stmt->bindParam(":favorito",$favorito);

            try {
               $stmt ->execute();
               $_SESSION = "Cadastro realizado com sucesso!";
               
            } catch (PDOException $e) {
               echo "ERRO! : ".$e->getMessage();
            }
       }
        header("location: ./contato.php");
    }
   

    

