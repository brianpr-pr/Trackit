<?php
//Name of the actual file
$nameFile = basename($_SERVER['SCRIPT_NAME'],"\\");
//Path to the 'root' folder
$root = "./";
//If the name of the file different than index is because this includes is being imported from a page inside the pages folder
//In such case we modify the 'root' path
if($nameFile != "index.php"){
    $root = ".././";
}

echo '<header>
            <h2><a href="'.$root.'index.php">Home</a></h2>
            <h2><a href="'.$root.'pages/diary.php">Diary</a></h2>
            <h2><a href="'.$root.'pages/books.php">Books</a></h2>
            <h2><a href="'.$root.'pages/stats.php">Stats</a></h2>
            <h2><a href="'.$root.'pages/register.php">Register</a></h2>
            <h2><a href="'.$root.'pages/login.php">Log in</a></h2>
            <h2><a href="'.$root.'pages/account.php">Account</a></h2>
        </header>';