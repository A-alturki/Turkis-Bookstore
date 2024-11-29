<!--
Name: Abdulelah Ali Alturki
ID: 2136110
Date: 9/24/2024
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags and favicon -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../Images/favicon.ico">
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
                $con = mysqli_connect("localhost", "root", "root", "bookstore");
                $result = mysqli_query($con, "
                SELECT * FROM book 
                WHERE title LIKE '%The Paradox of Choice%'
                OR title = 'The Four Agreements'
                OR title LIKE '%The Psychology of Money%'
                OR title = 'Meditations: A New Translation (Modern Library)'
                OR title = 'Tuesdays with Morrie: An Old Man, a Young Man, and Life\'s Greatest Lesson, 25th Anniversary Edition'
            ");
                while ($row = mysqli_fetch_assoc($result)) {
                    $title = $row["title"];
                    $img = $row["imgUrl"];
                    $price = $row["price"];
                    $author = $row["author"];
                    $book_id = $row["asin"];
                    if ($price > 0){
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
                            <form class='product-form' action='../backend/addtocart.php' method='post'>
                                <button class='button-23 product-button' role='button' name='book_id' value='$book_id'  >Add To Cart</button>
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
                width="75%"
                height="850px">
                </object>
            </div>  
        </div>
    </div>
    

    <?php
    include "../Includes/footer.php"
    ?>
    

</body>
</html>
