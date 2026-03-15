<?php
session_start(); 
    require("template/header.php");
?>

<div class="fild">
   
    <form action="insert.php" method="post">
        <div>
            <input type="text" name="name" placeholder="Inset your name" require autocomplete="off">
            <input type="hidden" name="type" value="create">
        </div>
        <div>
            <input type="tel" name="number" placeholder="(00) 0 0000-0000" require autocomplete="off">
        </div>
        <div>
            <input type="email" name="email" placeholder="@mail" autocomplete="off">
        </div>
        <div>
            <input type="text" name="github" placeholder="GitHub" autocomplete="off">
        </div>
        <div class="fav">
            <label for="">Favorit:</label><input type="checkbox" name="favorit" value="1">
        </div>
        <div class="group">
            <input type="submit" class="btn" value="Add">
            <input type="reset" class="btn" value="Clean">
        </div>
</form>
</div>

<?php require("template/footer.php"); ?>