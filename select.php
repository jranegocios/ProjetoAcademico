<?php

    require("data/data.php");


    $data = $_POST;

    $sqlSelect = "SELECT * FROM contato";
    $stmt = $con ->prepare($sqlSelect);
    $stmt ->execute();

    $contatos = $stmt->fetchAll();
    