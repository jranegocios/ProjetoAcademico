<?php 
    require("template/header.php");
    require("select.php");
?>

<div class="container-contato">
    <!-- <h1>Contact list</h1> -->
   <div class="overflow">
        <table class="list">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>E-mail</th>
                <th>GitHub</th>
                <th>Favorit</th>
            </thead>
            <?php foreach($contatos as $contato):?>
            <tbody>
                <td><?= $contato["id"] ?></td>
                <td><?= $contato["name"] ?></td>
                <td><?= $contato["number"] ?></td>
                <td><?= $contato["email"] ?></td>
                <td><?= $contato["github"] ?></td>
                <td><?php
                    if( $contato["favorito"] == 1){
                        echo "sim";
                    }else{
                        echo "não";
                    }
                    ?></td>
            </tbody>
            <?php endforeach;?>
        </table>
   </div>
</div>
<?php require("template/footer.php"); ?>