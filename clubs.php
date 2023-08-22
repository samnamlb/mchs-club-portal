<?php

include_once 'config/db.php';

$sql = "SELECT * FROM mchs_organizations;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clubs</title>
    <link rel="shortcut icon" href="src/icon_page/favicon.ico">
    <link rel="stylesheet" href="style2.css"> 
  </head>
  <body>
    <div class="container">
        <div class="content-main">
        <?php
            if ($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                echo "<div id=club-id-" . $row['club_id'] . ">";
                echo "<div class='club-header'><h1>" . $row['club_name'] . "</h1></div>";
                echo "<div class='club-description'>" . $row['club_description'] . "</div>";
                echo "<div class='club-advisor'><b>Club Advisor:</b> " . $row['club_advisor'] . "</div>";
                echo "<div class='club-president'><b>President:</b> " . $row['club_pres'] . "</div>";
                echo "<div class='meet-time'><b>Meeting Time:</b> " . $row['meet_time'] 
                    . " | " . $row['meet_frequency'] . "</div>";
                echo "<div class='club-location'><b>Location/Room Num:</b> " . $row['room_no'] . "</div>";
                    if (!(strtoupper($row['club_link']) == "N/A" or null)){
                        echo "<div class='club-link'><a href=" . $row['club_link'] . ">" . $row['club_link'] . "</a></div>";
                    }
                echo "</div>";
                }
            }
        ?>
        </div>
    </div>
	<!--   <script src="index.js"></script>    -->
  </body>
</html>