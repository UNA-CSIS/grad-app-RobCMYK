//put this in other pages
<?php 
session_start();
$first = $last = "";

$first = $_POST["first"];
$last = $_POST["last"];

$_SESSION["fname"] = $first;
$_SESSION["lname"] = $last;
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <input type="text" name="first">
            <input type="text" name="last">
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
