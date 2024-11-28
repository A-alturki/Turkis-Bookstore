<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../Images/favicon.ico">
    <title>Turki's Bookstore</title>
    <script src="../JS/validation.js"></script>
</head>
<body>
<?php
    include "../Includes/header.php"
    ?>
    <div class="mid">
        <div class="card regform">


            <form class="centeredtext" id="registerform" name="registerform" method="post" onsubmit="return methodhere" action="../backend/loginback.php">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" >

                <label for="password">Password</label>
                <input type="text" id="password" name="password" autocomplete="off">

                <input type="submit" value="Login">
            </form>


        </div>
    </div>


    <?php
    include "../Includes/footer.php"
    ?>
</body>
</html>