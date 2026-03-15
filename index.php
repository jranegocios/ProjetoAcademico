<?php
session_start();  
    require("template/header.php"); 
    require("select.php"); 
?>

<section class="container-session">
   Total de Contatos Cadastrado <?= count($contatos);?>
</section>


<?php require("template/footer.php");?>