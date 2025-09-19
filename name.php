<?php
    session_start();
    $first = $last = "";

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="courses.php" method="POST">
            <input type="text" name="first">
            <input type="text" name="last">
            <input type="submit">
        </form>
        
        <?php
            $first = $_POST["first"];
            $last = $_POST["last"];

            $_SESSION["fname"] = $first;
            $_SESSION["lname"] = $last;
        ?>
    </body>
</html>
