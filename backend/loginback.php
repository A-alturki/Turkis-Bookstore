<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bookstore";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Failed :(".$conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $userpassword = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, fname, password FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        $_SESSION['error_message'] = "email is not registered!";
        header("Location: ../HTML/loginpage.php");
        exit;
    }

    $stmt -> bind_result($userid,$fname,  $hashpassword);
    $stmt->fetch();

    if(password_verify($userpassword, $hashpassword)){
        $_SESSION['user_id'] = $userid;
        $_SESSION['fname'] = $fname;
        header("Location: ../HTML/index.php");
        exit;
    }
    else{
        $_SESSION['error_message'] = "Password is not correct!";
        header("Location: ../HTML/loginpage.php");
        exit;
    }


}



?>