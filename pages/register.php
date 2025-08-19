<?php include "./../includes/classesHandler.php"?>
<?php include "./../includes/head.php";?>
<div id="container-form">
    <form action=<?php 
        echo htmlspecialchars($_SERVER["PHP_SELF"]);
    ?> method="POST">
        <label for="id_user">Id user</label>
        <input id="id_user" name="id_user" type="text">
        <label for="username">Username</label>
        <input id="username" name="username" type="text">
        <label for="password">Password</label>
        <input id="password" name="password" type="password">
        <label for="gmail">Gmail</label>
        <input id="gmail" name="gmail" type="email">
        <label for="name">Name</label>
        <input id="name" name="name" type="text">
        <label for="surname">Surname</label>
        <input id="surname" name="surname" type="text">
        <label for="birth_date">Birth date</label>
        <input id="birth_date" max=<?php echo date("Y-m-d");?> name="birth_date" type="date">
        <button type="submit">Send</button>
    </form>
    <script>
        window.addEventListener("load", () => {
            window.alert=function(){}
        });
    </script>
</div>
<?php include "./../includes/footer.php";?>