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

                <!-- First book product entry -->
                <div class="product">
                    <div class="product-image">
                        <img src="../Images/Meditations.jpg" alt="Meditations">
                    </div>
                    <div class="product-description">
                        <h4>Meditations</h4>
                        <blockquote>
                            <p>"A timeless guide to inner strength and tranquility."</p>
                        </blockquote>
                        <p>- Ryan Holiday</p>
                        <button class="button-23" role="button">Add To Cart</button>
                    </div>
                </div>

                <!-- Second book product entry -->
                <div class="product">
                    <div class="product-image">
                        <img src="../Images/The Psychology of Money.jpg" alt="The Psychology of Money">
                    </div>
                    <div class="product-description">
                        <h4>The Psychology of Money</h4>
                        <blockquote>
                            <p>"A brilliant exploration of how emotions and human behavior shape financial decisions."</p>
                        </blockquote>
                        <p>- James Clear</p>
                        <button class="button-23" role="button">Add To Cart</button>
                    </div>
                </div>

                <!-- Third book product entry -->
                <div class="product">
                    <div class="product-image">
                        <img src="../Images/The Paradox of Choice.jpg" alt="The Paradox of Choice">
                    </div>
                    <div class="product-description">
                        <h4>The Paradox of Choice</h4>
                        <blockquote>
                            <p>"A sharp reminder that more choices often lead to less satisfaction and more anxiety"</p>
                        </blockquote>
                        <p>- Daniel H. Pink</p>
                        <button class="button-23" role="button">Add To Cart</button>
                    </div>
                </div>

                <!-- Fourth book product entry -->
                <div class="product">
                    <div class="product-image">
                        <img src="../Images/End Game.jpg" alt="End Game">
                    </div>
                    <div class="product-description">
                        <h4>End Game</h4>
                        <blockquote>
                            <p>"A gripping thriller that keeps you on the edge of your seat from start to finish."</p>
                        </blockquote>
                        <p>- Lee Child</p>
                        <button class="button-23" role="button">Add To Cart</button>
                    </div>
                </div>

                <!-- Fifth book product entry -->
                <div class="product">
                    <div class="product-image">
                        <img src="../Images/The Four Agreements.jpg" alt="The Four Agreements">
                    </div>
                    <div class="product-description">
                        <h4>The Four Agreements</h4>
                        <blockquote>
                            <p>"A simple yet profound guide to achieving personal freedom and inner peace."</p>
                        </blockquote>
                        <p>- Deepak Chopra</p>
                        <button class="button-23" role="button">Add To Cart</button>
                    </div>
                </div>

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
