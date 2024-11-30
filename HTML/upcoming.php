<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../global/style.css">
    <link href="../global/print.css" media="print" rel="stylesheet" />
    <link rel="icon" href="../Images/favicon.ico">
    <title>Turki's Bookstore</title>
</head>
<body>
<?php
    include "../Includes/header.php"
    ?>
    <div class="mid">
        <div class="card">


        <table>
    <caption>Upcoming Events!</caption>
    <tr>
        <th>Event</th>
        <th>Date</th>
        <th>Start Time</th>
        <th>Author</th>

    </tr>

    <tr>
        <td rowspan="2">Meet and Greet</td>
        <td>Dec 12th, 2025</td>
        <td rowspan="2">9:00 AM</td>
        <td>George R. R. Martin</td>

    </tr>

    <tr>
        <td>Dec 13th, 2025</td>
        <td>J. K. Rowling</td>

    </tr>

    <tr>
        <td rowspan="2">Book Signing</td>
        <td>Jan 5th, 2026</td>
        <td rowspan="2">2:00 PM</td>
        <td>Margaret Atwood</td>

    </tr>

    <tr>
        <td>Jan 6th, 2026</td>
        <td>Neil Gaiman</td>

    </tr>

    <tr>
        <td>Storytelling Workshop</td>
        <td>Feb 14th, 2026</td>
        <td>10:00 AM</td>
        <td>Stephen King</td>

    </tr>

    <tr>
        <td>Children's Reading Hour</td>
        <td>Mar 20th, 2026</td>
        <td>11:30 AM</td>
        <td>Dr. Seuss Foundation</td>

    </tr>

    <tr>
        <td colspan="2">Poetry Slam Night</td>
        <td>6:00 PM</td>
        <td>Amanda Gorman</td>
    </tr>

    <tr>
        <td>Charity Book Auction</td>
        <td colspan="3">May 15th, 2026, 5:00 PM - Hosted by Various Authors</td>
        
    </tr>
</table>




        </div>
    </div>


    <?php
    include "../Includes/footer.php"
    ?>
</body>
</html>