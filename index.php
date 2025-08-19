<?php include "./includes/classesHandler.php";?>
<!DOCTYPE html>
<html>
    <head>
        <title>Trackit</title>
        <meta charset="UTF-8">
        <link href="./styles/styleGeneral.css" rel="stylesheet">
        <link href="./styles/styleIndex.css" rel="stylesheet">
    </head>
    <body>
    <?php include "./components/database/initialize.php";?>
        <?php include "./includes/header.php";?>
        <main>
            <h1>Trackit allows you to set and achive study goals</h1>
            <img id="graduation-img" src="./public/graduation.png">
            <div id="first-review" class="review">
                <img class="img-review" src="public/doctor.png">
                <p class="paragraph-review">Thanks to Trackit, I was able to finish my degree and become a doctor,<br>
            It truly changed my life. This website helps me improve my study sessions based on real statistics,<br>
        instead of relying on the feeling that I'm not doing enough.</p>
            </div>
            <div id="second-review" class="review">
            <p class="paragraph-review">Thanks to Trackit, I was able to finish my degree and become a doctor,<br>
            It truly changed my life. This website helps me improve my study sessions based on real statistics,<br>
        instead of relying on the feeling that I'm not doing enough.</p>
                <img class="img-review" src="public/astronaut.png">
            </div>
        </main>
        <?php include "./includes/footer.php";?>
    </body>
</html>