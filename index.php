<?php

include_once 'config/db.php';

$sql = "SELECT * FROM mchs_organizations;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

/*

                        if ($resultCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                            echo "<tr><a target='club_frame' href=clubs.php#club-id-". $row['club_id']. ">" . $row['club_name'] . "</a></tr><br>";
                            }
                        }
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Portal</title>
    <link rel="shortcut icon" href="src/icon_page/favicon.ico">
    <link rel="stylesheet" href="style.css"> 
  </head>
  <body>
    <div class="content-wrapper">
        <div class="container">
            <div class="header"></div>
            <div class="content-side">
                <div class="list-header">
                    <h2>CLUB LIST</h2>
                </div>
                <div id="list" class="list-body">
                    <table>
                    </table>
                </div>
            </div>
        </div>
      </div>
  </body>
</html>