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
        <div class="cart-container">

            <!-- Contact card starts -->
            <div class="card">
                <h1>Contact Us!</h1>
                <h3>Feel free to contact us at:</h3>
                <h3>Phone: +966596163689</h3>
                <h3>Email: <a class="email-contact" href="mailto:aabdulazizalturki@stu.kau.edu.sa">aabdulazizalturki@stu.kau.edu.sa</a></h3>
            </div>

            <!-- Add more fields to the form -->
<div class="card">
    <h1>Feedback Form</h1>
    <form action="/submit_feedback.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname" required>

            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </fieldset>

        <fieldset>
            <legend>Feedback</legend>
            <label for="bookname">Book name (optional):</label>
            <input type="text" id="bookname" name="bookname">
            
            <label for="satisfaction">Satisfaction level:</label>
            <div class="radiocontainer">
                <div class="radelement">
                <input type="radio" id="satisfied" name="satisfaction" value="satisfied">
                <label for="satisfied">Satisfied</label>
                </div>

                <div class="radelement">
                <input type="radio" id="not_satisfied" name="satisfaction" value="not_satisfied">
                <label for="not_satisfied">Not Satisfied</label>
                </div>  
            </div>
            <label for="genre_fiction">Select your favorite genres:</label>

            <div class="radiocontainer">
                <div class="radelement">
                    <input type="checkbox" id="genre_fiction" name="genre" value="fiction">
                    <label for="genre_fiction">Fiction</label>
                </div>
                <div class="radelement">
                    <input type="checkbox" id="genre_nonfiction" name="genre" value="nonfiction">
                    <label for="genre_nonfiction">Non-Fiction</label>
                </div>
            </div>
            <label for="recommend">Would you recommend us?</label>
            <select id="recommend" name="recommend">
                <option value="yes">Yes</option>
                <option value="maybe">Maybe</option>
                <option value="no">No</option>
            </select>
            <label for="feedback">Additional Comments:</label>
            <textarea id="feedback" name="feedback" rows="5"></textarea>
        </fieldset>
        <input type="submit" value="Submit Feedback">
    </form>
</div>

        </div>
    </div>


    <?php
    include "../Includes/footer.php"
    ?>


</body>
</html>
