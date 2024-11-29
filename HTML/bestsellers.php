<!--
Name: Abdulelah Ali Alturki
ID: 2136110
Date: 9/24/2024
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags and external stylesheet -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../Images/favicon.ico">

    <!-- Page title -->
    <title>Turki's Bookstore</title>
</head>

<body>
    <!-- Header section with logo, search bar, and cart -->
    <?php
    include "../Includes/header.php"
    ?>

    <!-- Main content section for NonFiction Best-Sellers -->
    <div class="mid">
        <div class="card">
            <h1>NonFiction Best-Sellers</h1>

            <div class="best-sellers">
                <!-- Product 1: Non-fiction best-seller -->
                <?php
                $con = mysqli_connect("localhost", "root", "root", "bookstore");
                $result = mysqli_query($con, "
                SELECT * FROM book 
                WHERE title = 'Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones'
                OR title LIKE '%Glad My Mom Died%'
                OR title LIKE '%Thinking, Fast and Slow%'
                OR title LIKE '%The Light We Carry: Overcoming in Uncertain Times%'
                OR title LIKE '%Breath: The New Science of a Lost Art%'
            ");
                while ($row = mysqli_fetch_assoc($result)) {
                    $title = $row["title"];
                    $img = $row["imgUrl"];
                    $price = $row["price"];
                    $author = $row["author"];
                    $book_id = $row["asin"];
                    if ($price > 0) {
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

        <!-- Main content section for Fiction Best-Sellers -->
        <div class="card">
            <h1>Fiction Best-Sellers</h1>

            <div class="best-sellers">

                <?php
                $con = mysqli_connect("localhost", "root", "root", "bookstore");
                $result = mysqli_query($con, "
                SELECT * FROM book 
                WHERE title LIKE '%Tomorrow, and Tomorrow, and Tomorrow%'
                OR title = 'Demon Copperhead: A Pulitzer Prize Winner'
                OR title LIKE '%The Seven Husbands of Evelyn Hugo%'
                OR title = 'Fairy Tale'
                OR title = 'Lessons in Chemistry: A Novel'
            ");
                while ($row = mysqli_fetch_assoc($result)) {
                    $title = $row["title"];
                    $img = $row["imgUrl"];
                    $price = $row["price"];
                    $author = $row["author"];
                    $book_id = $row["asin"];
                    if ($price > 0) {
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
    </div>

    <?php
    include "../Includes/footer.php"
    ?>
</body>

</html>