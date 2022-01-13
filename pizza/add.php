<?php

//if(isset($_GET["submit"])){
//    echo $_GET["email"];
//    echo $_GET["title"];
//    echo $_GET["ingredients"];
//}

if(isset($_POST["submit"])){
    echo $_POST["email"];
    echo $_POST["title"];
    echo $_POST["ingredients"];
}


?>

<!DOCTYPE html>
<html>

    <?php include("templates/header.php"); ?>

    <section class="container grey-text"></section>
    <h4 class="center">add a pizza</h4>
    <form action="" class="white" action="add.php" method="POST">
        <label>Your email:</label>
        <input type="text" name="email">
        <label>Pizza title:</label>
        <input type="text" name="title">
        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
    <?php include("templates/footer.php"); ?>

</html>