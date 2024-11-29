<!DOCTYPE html>
<html lang="en">
<head>
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
    <div class="mid">
        <div class="card">
            <div class="best-sellers">

            <?php
                if(count($_SESSION["search_results"]) == 0){
                    echo "No results were found :(";
                 }
                else if (isset($_SESSION["search_results"]) && $_SESSION['too_short'] == 0) {
                    
                    foreach(array_slice($_SESSION["search_results"], 0, 50) as $row){
                        $title = $row["title"];
                        $img = $row["imgUrl"];
                        $price = $row["price"];
                        $author = $row["author"];
                
                        if ($price != 0){
                        echo "<div class='product'>
                                    <div class='product-image'>
                                        <img src='".$img."' alt='.$title.'>
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
                    }
                    

                 }
                 else if (isset($_SESSION["search_results"]) && $_SESSION['too_short'] == 1){
                    echo "Search query too short";
                    unset($_SESSION['search_results']);
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