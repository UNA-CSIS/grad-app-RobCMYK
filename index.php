<?php
    session_start();    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Name</title>
    </head>
    <body>
        <h2>Please enter your first and last name:</h2>
        <form action="courses.php" method="POST">
        First name: <input type="text" name="fname"><br><br>
        Last name:  <input type="text" name="lname"><br><br>
        <input type="submit">
        </form>       
    </body>
</html>
