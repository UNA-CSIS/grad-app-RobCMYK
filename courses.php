<?php
session_start();


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Courses</title>
    </head>
    <body>
        Welcome, <?php echo($first . " " . $last); ?>
        <form action="accomplishments.php" method="POST">
            <!-- <input type="hidden" name="first" value="<?php echo htmlspecialchars($first); ?>">
            <input type="hidden" name="last" value="<?php echo htmlspecialchars($last); ?>"> -->
            <fieldset>
            <legend>Select your courses:</legend>
            <label><input type="checkbox" name="courses[]" value="Object-oriented programming"> Object-oriented programming</label><br>
            <label><input type="checkbox" name="courses[]" value="Systems analysis & design"> Systems analysis & design</label><br>
            <label><input type="checkbox" name="courses[]" value="Advanced programming"> Advanced programming</label><br>
            <label><input type="checkbox" name="courses[]" value="Introduction to Networking"> Introduction to Networking</label><br>
            <label><input type="checkbox" name="courses[]" value="Introduction to Computer Security"> Introduction to Computer Security</label><br>
            </fieldset>
            <input type="submit" value="Submit">
        </form>
        
        <?php
        // store session data
        $totalCourses = 5;
        $takenCourses = 0;
        function countSelectedCourses($courses) {
            if (!is_array($courses)) {
                return 0;
            }
            return count($courses);
        }
        $takenCourses = isset($_POST['courses']) ? countSelectedCourses($_POST['courses']) : 0;

        $_SESSION["coursesTaken"] = $takenCourses;
        $_SESSION["totalCourses"] = $totalCourses;
        // $first = $_POST["first"];
        // $last = $_POST["last"];

        // $_SESSION["fname"] = $first;
        // $_SESSION["lname"] = $last;
        ?>
    </body>
</html>
