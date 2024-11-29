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
if(strlen($_GET["search"]) > 1){
    $_SESSION['too_short'] = 0;
}
else{
    $_SESSION['too_short'] = 1;
}

if(isset($_GET["search"])){
    $searchterm = "%". $_GET["search"] ."%";
    $stmt = $conn->prepare("SELECT * FROM book WHERE title LIKE ?");
    $stmt->bind_param("s", $searchterm);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $_SESSION['search_results'] = $result->fetch_all(MYSQLI_ASSOC);

    $url = "../HTML/searchresult.php";
    header("Location: $url");

    
}
?>