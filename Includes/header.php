<?php
session_start();
ob_start();
?>
<!-- Header section starts -->
<div class="header">
    <div class="header-topline">
        <div class="logoline">
            <!-- Logo link to the index page -->
            <a href="../index.php"><img src="../Images/Turki-Bookstore-Logo-Rectangle.png" alt="Turki-Bookstore-Logo" width="150"/></a>
        </div>

        <!-- Search bar input -->
        <div class="searchbar">
            <form class="searchbar" action="../backend/search.php" method="get">
                <div class="searchbar">
                    <input type="text" name="search"  />
                </div>
            </form>

        </div>

        <!-- Shopping cart link -->
        <div class="cart">
            <a href="cart.php"><img src="../Images/shopping-cart.png" alt="Cart" width="50"></a>
        </div>

        <!-- Login and Register buttons -->
         <?php if(!isset($_SESSION['user_id'])){ ?>
        <div class="auth-buttons">
            <a href="loginpage.php" class="button login-btn">Login</a>
            <a href="registerpage.php" class="button register-btn">Register</a>
        </div>
        <?php }else { ?> 
        <div class="auth-buttons">
            <span class="welcomename">Welcome, <?php echo htmlspecialchars($_SESSION['fname']); ?>!</span>
            <a href="../backend/logout.php" class="button login-btn">Logout</a>
        </div>
        <?php } ?>

        
    </div>

    <!-- Navigation menu -->
    <div class="topnav">
        <a href="../index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="bestsellers.php">Best-Sellers</a>
        <a href="favorites.php">Turki's Favorites</a>
        <a href="upcoming.php">Upcoming Events</a>
        <a href="gallery.php">Author Gallery</a>
    </div>
</div>
<!-- Header section ends -->
