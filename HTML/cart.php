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
            
            <!-- Shopping cart card -->
            <div class="card shopping-cart-card">
                <h1>Shopping Cart</h1>
                
                <!-- First product in cart -->
                <div class="product">
                    <div class="product-image">
                        <img src="../Images/The Ministry of Time.jpg" alt="The Ministry of Time">
                    </div>
                    
                    <div class="product-description">
                        <div>The Ministry of Time: A Novel</div>
                        <div>
                            <div>12.99$</div>
                            <div>
                                <input type="number" id="quantity" name="quantity" min="0" max="9" value="1">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second product in cart -->
                <div class="product">
                    <div class="product-image">
                        <img src="../Images/The Wager.jpg" alt="The Wager: A Tale of Shipwreck, Mutiny and Murder">
                    </div>
                    
                    <div class="product-description">
                        <div>The Wager: A Tale of Shipwreck, Mutiny and Murder</div>
                        <div>
                            <div>16.99$</div>
                            <div>
                                <input type="number" id="quantity" name="quantity" min="0" max="9" value="1">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Third product in cart -->
                <div class="product">
                    <div class="product-image">
                        <img src="../Images/The Covenant of Water.jpg" alt="The Covenant of Water">
                    </div>
                    
                    <div class="product-description">
                        <div>The Covenant of Water</div>
                        <div>
                            <div>9.99$</div>
                            <div>
                                <input type="number" id="quantity" name="quantity" min="0" max="9" value="1">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- Cart summary card -->
            <div class="card summary-cart-card">
                <h1>Cart Summary</h1>

                <!-- Summary of first product -->
                <div class="summary-cart-product">
                    <div>The Ministry of Time: A Novel</div>
                    <div>12.99$</div>
                </div>

                <!-- Summary of second product -->
                <div class="summary-cart-product">
                    <div>The Wager: A Tale of Shipwreck, Mutiny and Murder</div>
                    <div>16.99$</div>
                </div>

                <!-- Summary of third product -->
                <div class="summary-cart-product">
                    <div>The Covenant of Water</div>
                    <div>9.99$</div>
                </div>
                
                <!-- Grand total -->
                <div class="summary-cart-product">
                    <div>Grand Total:</div>
                    <div>37.97$</div>
                </div>
                
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
