<?php
session_start();
$accomplishments = "";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Accomplishments</title>
    </head>
    <body>
        
        <form action="confirmations.php" method="POST">
            <input type="hidden" name="first" value="<?php echo htmlspecialchars($first); ?>">
            <input type="hidden" name="last" value="<?php echo htmlspecialchars($last); ?>">
            <label for="accomplishments">Describe your personal accomplishments:</label><br>
            <textarea id="accomplishments" name="accomplishments" rows="8" cols="60"></textarea><br>
            <input type="submit" value="Submit">
        </form>
        
        <?php
        // store session data
        $accomplishments = $_POST["accomplishments"];
        $_SESSION["accomplishments"] = $accomplishments;


        // $first = $_POST["first"];
        // $last = $_POST["last"];

        // $_SESSION["fname"] = $first;
        // $_SESSION["lname"] = $last;
        ?>
    </body>
</html>
