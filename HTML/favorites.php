<?php
ob_start();
?>
<!--
Name: Abdulelah Ali Alturki
ID: 2136110
Date: 9/24/2024
-->

<!DOCTYPE XHTML 1.0 Strict">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <!-- Meta tags and favicon -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../global/style.css"/>
    <link rel="icon" href="../Images/favicon.ico"/>
    <title>Turki's Bookstore</title>
</head>
<body>

<?php
    include "../Includes/header.php"
    ?>

    <!-- Main content section starts -->
    <div class="mid">
        <!-- Card for Turki's Favorites -->
        <div class="card">
            <h1>Turki's Favorites!</h1>

            <!-- List of favorite books -->
            <div class="best-sellers">

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
                $con = mysqli_connect($host, $username, $password, $dbname, $port);

                
                $result = mysqli_query($con, "
                SELECT * FROM book 
                WHERE title LIKE '%The Paradox of Choice%'
                OR title = 'The Four Agreements'
                OR title LIKE '%The Psychology of Money%'
                OR title = 'Meditations: A New Translation (Modern Library)'
                OR title = 'Tuesdays with Morrie: An Old Man, a Young Man, and Life\'s Greatest Lesson, 25th Anniversary Edition'
            ");
                while ($row = mysqli_fetch_assoc($result)) {
                    $title = htmlspecialchars($row["title"], ENT_QUOTES, 'UTF-8');
                    $img = htmlspecialchars($row["imgUrl"], ENT_QUOTES, 'UTF-8');
                    $price = $row["price"];
                    $author = htmlspecialchars($row["author"], ENT_QUOTES, 'UTF-8');
                    $book_id = $row["asin"];
                    if ($price > 0){
                        echo "
                    <div class='product'>
                        <div class='product-image'>
                            <img src='$img' alt='$title' />
                        </div>
                        <div class='product-description'>
                            <div>
                                <h4>$title</h4>
                                <h5> by $author </h5>
                            </div>
                            <div>
                                <h4>$$price</h4>
                            </div>

                            <form class='product-form' action='../backend/addtocart.php' method='post'>
                                <div>
                                    <button type='submit' class='button-23 product-button' name='book_id' value='$book_id'>Add To Cart</button>
                                </div>
                            </form>
                        </div>
                    </div>";
                    }

                    
                }
                ?>

            </div>
        </div>

        <div class="card">
    <h1>Ali Abdaal's must read selection of books!</h1>
    <div class="videocard">
        <object 
            data="https://www.youtube.com/embed/N24X8kK7H4Q"
            width="750"
            height="850"
            style="width: 75%; height: 850px;">
            <param name="allowfullscreen" value="true"></param>
            Your browser does not support embedded videos.
        </object>
    </div>  
</div>
    </div>
    

    <?php
    include "../Includes/footer.php"
    ?>
    

</body>
</html>
