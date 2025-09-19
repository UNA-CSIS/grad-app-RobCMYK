<?php
session_start();

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        $coursesTaken = isset($_POST['coursesTaken']) ? (int)$_POST['coursesTaken'] : 0;
        $totalCourses = isset($_POST['totalCourses']) ? (int)$_POST['totalCourses'] : 0;
        $accomplishments = isset($_POST['accomplishments']) ? $_POST['accomplishments'] : '';

        $halfCourses = ($totalCourses > 0) ? ($coursesTaken >= ceil($totalCourses / 2)) : false;
        $hasPHP = stripos($accomplishments, 'php') !== false;

        if ($halfCourses && $hasPHP) {
            echo "<h2>You are accepted for a phone interview.</h2>";
        } else {
            echo "<h2>Sorry, your application was rejected.</h2>";
        }
        ?>



        <!-- <form action="confirmations.php" method="POST">
            <input type="hidden" name="first" value="<?php echo htmlspecialchars($first); ?>">
            <input type="hidden" name="last" value="<?php echo htmlspecialchars($last); ?>">
            <label for="accomplishments">Describe your personal accomplishments:</label><br>
            <textarea id="accomplishments" name="accomplishments" rows="8" cols="60"></textarea><br>
            <input type="submit" value="Submit">
        </form> -->
        
        <?php
        // store session data
        

        // $first = $_POST["first"];
        // $last = $_POST["last"];

        // $_SESSION["fname"] = $first;
        // $_SESSION["lname"] = $last;
        ?>
    </body>
</html>
