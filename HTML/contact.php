<?php
ob_start();
?>
<!--
Name: Abdulelah Ali Alturki
ID: 2136110
Date: 9/24/2024
-->

<!DOCTYPE XHTML 1.0 Strict">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <!-- Meta tags and favicon -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../global/style.css"/>
    <link rel="icon" href="../Images/favicon.ico"/>
    <script src="../JS/validation.js" type="text/javascript"></script>

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
    <form id="feedbackform" method="post" onsubmit="return validateForm()" action="../backend/validation.php">
        <fieldset>
            <legend>Personal Information</legend>
            <label for="fname">First name<span>*</span></label>
            <input type="text" id="fname" name="fname"/>

            <label for="lname">Last name<span>*</span></label>
            <input type="text" id="lname" name="lname"/>
            <label for="email">Email<span>*</span></label>
            <input type="text" id="email" name="email"/>
            <div id="wrongemail"></div>
        </fieldset>

        <fieldset>
            <legend>Feedback</legend>
            <label for="bookname">Book Name</label>
            <input type="text" id="bookname" name="bookname"/>
            
            
            <p class="boldp"> Satisfaction level<span>*</span></p>
            <div class="radiocontainer">
                <div class="radelement">
                    <input type="radio" id="satisfied" name="satisfaction" value="satisfied"/>
                    <label for="satisfied">Satisfied</label>
                </div>

                <div class="radelement">
                <input type="radio" id="not_satisfied" name="satisfaction" value="not_satisfied"/>
                <label for="not_satisfied">Not Satisfied</label>
                </div>  
            </div>
            <p class="boldp">Select your favorite genres</p>
            <div class="radiocontainer">
                <div class="radelement">
                    <input type="checkbox" id="genrefiction" name="genre[]" value="fiction"/>
                    <label for="genrefiction">Fiction</label>
                </div>
                <div class="radelement">
                    <input type="checkbox" id="genrenonfiction" name="genre[]" value="nonfiction"/>
                    <label for="genrenonfiction">Non-Fiction</label>
                </div>
            </div>

            <label for="reading_format">Preferred Reading Format</label>
            <select id="reading_format" name="reading_format">
                <option value="">Select Your Preferred Format</option>
                <option value="hardcover">Hardcover Book</option>
                <option value="paperback">Paperback Book</option>
                <option value="ebook">E-Book</option>
                <option value="audiobook">Audiobook</option>
                <option value="digital_subscription">Digital Subscription</option>
            </select>

            <label for="recommend">Would you recommend us?<span>*</span></label>
            <select id="recommend" name="recommend">
                <option value="yes">Yes</option>
                <option value="maybe">Maybe</option>
                <option value="no">No</option>
            </select>
            <label for="feedback">Additional Comments:</label>
            <textarea id="feedback" name="feedback" rows="5" cols="50"></textarea>
        </fieldset>
        <div>
            <input type="submit" value="Submit Feedback"/>
        </div>
        
    </form>
    <?php
        // Check for messages in the URL
        if (isset($_GET['error']) && $_GET['error'] == 'usedemail') {
            echo "<div class='error-message'>This email has already been used to submit feedback.</div>";
        }
        if (isset($_GET['success']) && $_GET['success'] == 'feedbacksubmitted') {
            echo "<div class='success-message'>Thank you for your feedback! It has been submitted successfully.</div>";
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
