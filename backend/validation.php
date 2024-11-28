<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "bookstore";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection Failed :(".$conn->connect_error);
    }
    
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $email = $_POST["email"];
    $bookname = $_POST["bookname"] ?? null;
    $satisfaction = $_POST["satisfaction"];
    $genre = $_POST["genre"] ?? null;
    $recommend = $_POST["recommend"];
    $feedback = $_POST["feedback"] ?? null;
    
    $genre = is_array($genre) ? implode(",", $genre) : $genre;

    $check_query = $conn->prepare("SELECT email FROM feedbackform WHERE email = ?") ;
    $check_query->bind_param("s", $email);
    $check_query->execute();
    $check_query->store_result();

    if ($check_query->num_rows > 0) {
        // Redirect with an error message
        $url = "../HTML/contact.php?error=usedemail";
        header("Location: $url");
        exit;
    } else {
        $stmt = $conn->prepare("INSERT INTO feedbackform VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $first_name, $last_name, $email, $bookname, $satisfaction, $genre, $recommend, $feedback);
        
        if ($stmt->execute()) {
            // Redirect with a success message
            $url = "../HTML/contact.php?success=feedbacksubmitted";
            header("Location: $url");
            exit;
        } else {
            echo "Error: " . $conn->error;
        }
    }
    
    # $sql = "INSERT INTO feedbackform VALUES ('$first_name','$last_name', '$email', '$bookname', '$satisfaction', '$genre', '$recommend', '$feedback')";

    if(mysqli_stmt_execute( $stmt )){
        echo "horraaaay";
    }
    else{
        echo "error :(";
    }

    $conn->close();
?>