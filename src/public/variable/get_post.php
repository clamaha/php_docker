<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET - POST</title>
    <style>
        a {
            text-decoration: none;
            font-weight: 700;
            font-size: 20px;
            color: darkgrey;
        }
    </style>
</head>

<body>
    <h1>GET - POST</h1>
    <h4>Working with $_GET values</h4>

    <form method="get" action="get_post.php">
        <input type="text" name="name">
        <input type="text" name="lang">
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
    }

    function greeting()
    {
        if (isset($_GET['name'])) {
            $name = $_GET['name'];
            echo "Hello, " . $name;
        }
    }
    greeting();
    ?>

    <h4>Working with $_POST values</h4>
    <form method="post" action="get_post.php">
        <input type="text" name="name">
        <input type="text" name="lang">
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['name'], $_POST['lang'])) {
        $name = $_POST['name'];
        $lang = $_POST['lang'];
        echo "My name is" . " " . $name . '<br>';
        echo "I am learning" . " " . $lang;
    }
    ?>
<br>
<a href="/index.php">➜ Back to homepage</a>
</body>
</html>