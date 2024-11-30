<?php
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
    
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $email = $_POST["email"];
    $bookname = $_POST["bookname"] ?? null;
    $satisfaction = $_POST["satisfaction"];
    $genre = $_POST["genre"] ?? null;
    $recommend = $_POST["recommend"];
    $feedback = $_POST["feedback"] ?? null;
    $reading_format = $_POST["reading_format"] ?? null;
    
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
        $stmt = $conn->prepare("INSERT INTO feedbackform VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $first_name, $last_name, $email, $bookname, $satisfaction, $genre, $recommend, $feedback, $reading_format);
        
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


    $conn->close();
?>