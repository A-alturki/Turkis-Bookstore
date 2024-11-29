<!--
Name: Abdulelah Ali Alturki
ID: 2136110
Date: 9/24/2024
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags and external stylesheets -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../Images/favicon.ico">

    <!-- Page title -->
    <title>Turki's Bookstore</title>

</head>

<body>

    <?php
    include "../Includes/header.php"
    ?>

    <!-- Mid-section with description and services -->
    <div class="mid">
        <!-- Description card -->
        <div class="card">
            <h1><b>Description:</b></h1>
            <p>Discover the perfect book for every reader. At Turki's Bookstore, we believe that the right book can change your life.
                Whether you’re a fan of classic literature like <cite>Pride and Prejudice</cite> by Jane Austen,
                lover of sci-fi adventures like<cite> Dune </cite> by Frank Herbert, or on the lookout for the latest best-sellers,
                we’ve got something for everyone. Our carefully curated collection ensures that you can always find something new to dive into.

            </p>
            <br>
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
                $con = mysqli_connect("localhost", "root", "root", "bookstore");
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

                    echo "
                    <div class='product'>
                        <div class='product-image'>
                            <img src='$img' alt='$title'>
                        </div>
                        <div class='product-description'>
                            <div>
                                <h4>$title</h4>
                                <h5> by $author </h5>
                            </div>
                            <div>
                                <h4>$$price</h4>
                            </div>
                            <button class='button-23' role='button'>Add To Cart</button>
                    </div>
                </div>";
                }
                ?>


            </div>
        </div>
    </div>

    <?php
    include "../Includes/footer.php"
    ?>
</body>

</html>