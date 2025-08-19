<?php
//Name of the actual file
$nameFile = basename($_SERVER['SCRIPT_NAME'],"\\");

//Path to the 'root' folder
$root = findRoot("trackit");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Trackit</title>
        <meta charset="UTF-8">
        <link href="./styles/styleGeneral.css" rel="stylesheet">
        <link href="./styles/styleIndex.css" rel="stylesheet">
    </head>
    <body>
<header>
<h2><a href=<?php echo $root.'index.php';?>>Home</a></h2>
    <h2><a href=<?php echo $root.'pages/diary.php';?>>Diary</a></h2>
    <h2><a href=<?php echo $root.'pages/books.php';?>>Books</a></h2>
    <h2><a href=<?php echo $root.'pages/stats.php';?>>Stats</a></h2>
    <h2><a href=<?php echo $root.'pages/register.php';?>>Register</a></h2>
    <h2><a href=<?php echo $root.'pages/login.php';?>>Log in</a></h2>
    <h2><a href=<?php echo $root.'pages/account.php';?>>Account</a></h2>
</header>
<main>