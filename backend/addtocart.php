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

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    $book_id = $_POST['book_id'];

    $stmt = $conn->prepare("SELECT id, quantity FROM cart WHERE 	user_id = ? and book_id = ?");
    $stmt->bind_param("is", $user_id,$book_id);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0){
        $stmt -> bind_result( $cart_id, $quantity);
        $stmt->fetch();
        $quantity = $quantity + 1;
        $update = $conn->prepare("update cart set quantity = ? WHERE id = ?");
        $update->bind_param("ii", $quantity, $cart_id );
        $update->execute();
    }
    else{
        $insert = $conn->prepare("insert into cart(user_id, book_id, quantity) values(?,?,?)");
        $quantity = 1;
        $insert->bind_param("isi", $user_id, $book_id, $quantity);
        $insert->execute();
        
    }
    
    
}
else{
    echo "<script>
             alert('You need to be signed in to add to cart!'); 
             window.history.go(-1);
     </script>";
}
echo "<script>
             window.history.go(-1);
     </script>";
?>