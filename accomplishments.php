<?php
session_start();
$first = $last = "";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="confirmation.php" method="POST">
            <input type="hidden" name="first" value="<?php echo htmlspecialchars($first); ?>">
            <input type="hidden" name="last" value="<?php echo htmlspecialchars($last); ?>">
            <label for="accomplishments">Describe your personal accomplishments:</label><br>
            <textarea id="accomplishments" name="accomplishments" rows="8" cols="60"></textarea><br>
            <input type="submit" value="Submit">
        </form>
        
        <?php
        // store session data
        

        $first = $_POST["first"];
        $last = $_POST["last"];

        $_SESSION["fname"] = $first;
        $_SESSION["lname"] = $last;
        ?>
    </body>
</html>
