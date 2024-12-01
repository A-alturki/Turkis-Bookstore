<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../global/style.css">
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


            <form class="centeredtext" id="registerform" name="registerform" method="post" onsubmit="return validateRegister()" action="../backend/registerback.php">


                <label for="fname">First name</label>
                <input type="text" id="fname" name="fname" >

                <label for="lname">Last name</label>
                <input type="text" id="lname" name="lname" >

                <label for="email">Email</label>
                <input type="email" id="email" name="email" >

                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="off" >
                <div id="badpass"></div>

                <input type="submit" value="Register">
            </form>

            <?php
              

              if (isset($_SESSION['error_message'])) {
                  echo "<div class='error-message'>" . $_SESSION['error_message'] . "</div>";
                  unset($_SESSION['error_message']);
              }
              
              if (isset($_SESSION['success_message'])) {
                  echo "<div class='success-message'>" . $_SESSION['success_message'] . "</div>";
                  unset($_SESSION['success_message']);
              }
              
            ?>


        </div>
    </div>


    <?php
    include "../Includes/footer.php"
    ?>
</body>
</html>