<?php
session_start();


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Confirmation</title>
    </head>
    <body>
        
        <form action="results.php" method="POST">
            <!-- Display information from previous pages -->
            <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION["fname"] . " " . $_SESSION["lname"]); ?></p>
            <p><strong>Courses:</strong> <?php echo isset($_SESSION["courses"]) ? htmlspecialchars($_SESSION["courses"]) : ''; ?></p>
            <p><strong>Accomplishments:</strong> <?php echo isset($_SESSION["accomplishments"]) ? nl2br(htmlspecialchars($_SESSION["accomplishments"])) : ''; ?></p>
            <?php print_r($_SESSION);?>
            <!-- <input type="hidden" name="first" value="<?php echo htmlspecialchars($first); ?>">
            <input type="hidden" name="last" value="<?php echo htmlspecialchars($last); ?>">
            <label for="accomplishments">Describe your personal accomplishments:</label><br>
            <textarea id="accomplishments" name="accomplishments" rows="8" cols="60"></textarea><br> -->
            <input type="submit" value="Submit">
        </form>
        
        <?php
        // store session data
        

        // $first = $_POST["first"];
        // $last = $_POST["last"];

        // $_SESSION["fname"] = $first;
        // $_SESSION["lname"] = $last;
        ?>
    </body>
</html>
