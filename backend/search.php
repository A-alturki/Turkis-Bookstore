<?php
session_start();
$database_url = "mysql://root:TwodfSnAYqJeiiOPhRrtdPlxtNHXhTjj@junction.proxy.rlwy.net:18561/railway";

// Parse the URL
$db_url = parse_url($database_url);

$host = $db_url["host"];
$dbname = ltrim($db_url["path"], '/');
$username = $db_url["user"];
$password = $db_url["pass"];
$port = $db_url["port"];

// Establish a connection to the MySQL database
$conn = mysqli_connect($host, $username, $password, $dbname, $port);
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