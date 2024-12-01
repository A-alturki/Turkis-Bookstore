<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <!-- Meta tags and external stylesheets -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="global/style.css" />
    <link rel="icon" href="Images/favicon.ico" />

    <!-- Page title -->
    <title>Turki's Bookstore</title>
</head>

<body>
    <?php
    include "Includes/indexheader.php";
    ?>

    <!-- Mid-section with description and services -->
    <div class="mid">
        <!-- Description card -->
        <div class="card">
            <h1><b>Description:</b></h1>
            <p>
                Discover the perfect book for every reader. At Turki's Bookstore, we believe that the right book can change your life.
                Whether you’re a fan of classic literature like <cite>Pride and Prejudice</cite> by Jane Austen,
                lover of sci-fi adventures like <cite>Dune</cite> by Frank Herbert, or on the lookout for the latest best-sellers,
                we’ve got something for everyone. Our carefully curated collection ensures that you can always find something new to dive into.
            </p>
        </div>

        <!-- Services offered card -->
        <div class="card">
            <h1>What we offer:</h1>
            <ul>
                <li>A wide range of genres including fiction, non-fiction, history, fantasy, and more.</li>
                <li>Detailed descriptions and reviews to help you choose the right book.</li>
                <li>Convenient shopping experience with fast delivery.</li>
            </ul>
        </div>

        <!-- Why shop with us card -->
        <div class="card">
            <h1><b>Why Shop With Us?</b></h1>
            <ul>
                <li><b>Extensive Collection:</b> Thousands of books to choose from across all genres.</li>
                <li><b>Personalized Recommendations:</b> Get suggestions based on your reading preferences.</li>
                <li><b>Easy Browsing:</b> Search by author, genre, or title and find your next great read in seconds.</li>
                <li><b>Exclusive Discounts:</b> Enjoy special offers and discounts for members.</li>
            </ul>
        </div>

        <!-- Best-Sellers section -->
        <div class="card">
            <h1><b>Our Best-Sellers</b></h1>

            <!-- Best-Sellers list -->
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
                WHERE title LIKE '%The Librarianist%'
                OR title LIKE '%No Two Persons%'
                OR title LIKE '%Tomorrow, and%'
                ");
                while ($row = mysqli_fetch_assoc($result)) {
                    $title = $row["title"];
                    $img = $row["imgUrl"];
                    $price = $row["price"];
                    $author = $row["author"];
                    $book_id = $row["asin"];

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
                ?>
            </div>
        </div>
    </div>

    <?php
    include "Includes/indexfooter.php";
    ?>
</body>

</html>
