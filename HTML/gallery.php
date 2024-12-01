<?php
ob_start();
?>

<!DOCTYPE XHTML 1.0 Strict">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <!-- Meta tags and external stylesheet -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../global/style.css"/>
    <link rel="icon" href="../Images/favicon.ico"/>

    <!-- Page title -->
    <title>Turki's Bookstore</title>
</head>
<body>
<?php
    include "../Includes/header.php"
    ?>
    <div class="mid">
        <div class="card">
        <h1>Author Gallery</h1>
        <h3 class="centeredtext"> Welcome to the Author Gallery, here you will see the most influential Authors of our time and information about them</h3>
        <!-- The expanding image container -->
        <div class="container">

            <!-- Expanded image -->
            <img id="expandedImg" src="../Images/stephenking.jpg" alt="Stephen King" style="width:30%"/>

            <!-- Image text -->
            <div id="imgname">Stephen King</div>
            <div id="imgtext" class="centeredtext">
                Known as the 'King of Horror,' Stephen King has authored over 60 novels, captivating readers with his gripping stories of suspense, supernatural elements, and human emotion.
            </div>
            <div></div>
        
        </div>

        <div class="row">
            <div class="column">
                <img src="../Images/stephenking.jpg" alt="Stephen King" onclick="myFunction(this);"/>
            </div>
            <div class="column">
                <img src="../Images/georgerrmartin.jpg" alt="George R. R. Martin" onclick="myFunction(this);"/>
            </div>
            <div class="column">
                <img src="../Images/jamesclear.jpg" alt="James Clear" onclick="myFunction(this);"/>
            </div>
            <div class="column">
                <img src="../Images/conandoyle.jpg" alt="Conan Doyle" onclick="myFunction(this);"/>
            </div>
            
        </div>





        </div>
    </div>

    <script  type="text/javascript">
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgname = document.getElementById("imgname");
    var imgtext = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgname.innerHTML = imgs.alt;

    if (imgs.alt === "Stephen King") {
        imgtext.innerHTML = "Known as the 'King of Horror,' Stephen King has authored over 60 novels, captivating readers with his gripping stories of suspense, supernatural elements, and human emotion.";
    } else if (imgs.alt === "George R. R. Martin") {
        imgtext.innerHTML = "The mastermind behind A Song of Ice and Fire, George R. R. Martin weaves epic fantasy tales filled with political intrigue, complex characters, and unexpected twists.";
    } else if (imgs.alt === "James Clear") {
        imgtext.innerHTML = "A modern self-help author, James Clear is best known for Atomic Habits, where he shares practical strategies to build lasting habits and improve personal growth.";
    } else if (imgs.alt === "Conan Doyle") {
        imgtext.innerHTML = "The creator of the legendary detective Sherlock Holmes, Sir Arthur Conan Doyle wrote stories that continue to define the mystery genre with their sharp intellect and thrilling plots.";
    }
}

</script>


    <?php
    include "../Includes/footer.php"
    ?>
</body>
</html>