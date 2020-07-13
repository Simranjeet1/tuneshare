<?php session_start(); ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Take A Look </title>
</head>

<body>
    <h3> Here's a Cat! </h3>
    <?php
    if (isset($_SESSION['name'])) {
        echo "<p> Hey There " . $_SESSION['name'] . "!";
    } else {
        echo "<p> Hey There! ";
    }
    ?>
    <a href="destroy.php"> Forget Me ! </a>
</body>

</html>
