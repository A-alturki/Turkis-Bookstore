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
   
    <!-- Main content section -->
    <div class="mid">
        
        <!-- Shopping cart container -->
        <div class="cart-container">
        <?php
        $product_data = array(); 
        ?>
            <!-- Shopping cart card -->
            <div class="card shopping-cart-card">
                <h1>Shopping Cart</h1>
                
                <?php
                $conn = mysqli_connect("localhost", "root", "root", "bookstore"); 
                if(isset($_SESSION['user_id'])){
                    $user_id = $_SESSION['user_id'];

                    $stmt = $conn->prepare("SELECT * FROM book b
                            join cart c on b.asin = c.book_id
                            join user u on c.user_id = u.id
                            WHERE user_id = ?");
                    $stmt->bind_param("s", $user_id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while ($row = $result->fetch_assoc()) {
                        $title = $row["title"];
                        $img = $row["imgUrl"];
                        $price = $row["price"];
                        $author = $row["author"];
                        $book_id = $row["asin"];
                        $quantity = $row["quantity"];

                        $product_data[] = array('title'=>$row["title"], 'imgUrl'=>$row["imgUrl"],'price'=>$row["price"], 'author'=>$row["author"], 'book_id'=>$row["asin"], 'quantity'=>$row["quantity"]); // assignment

                        echo "<div class='product'>
                                <div class='product-image'>
                                    <img src='$img' alt='$title'>
                                </div>
                                
                                <div class='product-description'>
                                    <div>$title</div>
                                    <div>
                                        <div>$$price</div>
                                        <div>Quantity: $quantity</div>

                                    </div>
                                </div>
                            </div>";                        
                    }
                }
                else{
                    echo "Make an account to add books to your cart!";
                }
                 ?>       

                
                
                
            </div>
            
            <!-- Cart summary card -->
            <div class="card summary-cart-card">
                <h1>Cart Summary</h1>

                <?php
                $sum = 0;
                foreach ($product_data as $key => $value) {
                    foreach ($value as $k => $v) {
                        #echo "Key: $k; Value: $v\n";
                            if($k == "title"){
                                $title = $v;
                            }
                            else if($k == "price"){
                                $price = $v;
                            }
                            else if($k == "quantity"){
                                $quantity = $v;
                            }

                        }
                        $itemSum = $price*$quantity;
                        $sum += $itemSum;
                        echo "<div class='summary-cart-product'>
                            <div>$title</div>
                                <div>$quantity x $price</div> 
                            </div>";
                    }
                    
                    echo "<div class='summary-cart-product'>
                            <div>Grand Total:</div>
                            <div>$sum</div>
                        </div>";
                ?>

                
                

                
                <!-- Checkout button -->
                <button class="button-23" role="button">Checkout</button>
            </div>
        </div>
    </div>


    <?php
    include "../Includes/footer.php"
    ?>
</body>
</html>
