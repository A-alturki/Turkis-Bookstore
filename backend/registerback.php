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
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists
    $stmt = $conn->prepare("SELECT email FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['error_message'] = "This email has already been used to create an account";
        header("Location: ../HTML/registerpage.php");
        exit;
    }
    
    // Insert the user into the database
    $stmt = $conn->prepare("INSERT INTO user (fname, lname, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $hashed_password);
    
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Registration Sucessful!";
        header("Location: ../HTML/registerpage.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}

?>