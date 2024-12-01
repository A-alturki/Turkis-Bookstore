<?php
ob_start();
?>
<!DOCTYPE XHTML 1.0 Strict">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <!-- Meta tags and external stylesheet -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../global/style.css"/>
    <link rel="icon" href="../Images/favicon.ico"/>

    <!-- Page title -->
    <title>Turki's Bookstore</title>
</head>
<body>
<?php
    include "../Includes/header.php"
    ?>
    <div class="mid">
        <div class="card regform">


            <form class="centeredtext" id="registerform" name="registerform" method="post"  action="../backend/loginback.php">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" >

                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="off">

                <input type="submit" value="Login">
            </form>
            <?php

            if (isset($_SESSION['error_message'])) {
                  echo "<div class='error-message'>" . $_SESSION['error_message'] . "</div>";
                  unset($_SESSION['error_message']);
              }
              ?>
        </div>
    </div>


    <?php
    include "../Includes/footer.php"
    ?>
</body>
</html>