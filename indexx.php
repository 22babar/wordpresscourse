<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
 <a  href=""></a>
 
 <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pchs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT  siteUrl,fullName FROM wordpress";
$result = mysqli_query($conn, $sql);

?>

<tbody>
    <table>
    <th>
        <tr>
            <th id="name">Wordpress Youtube links from DigiSkills</th>
           
        </tr>
    </th>


<?php

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?><tr>
                <td><a target="_blank" style="font-size: 20px;" href="<?php echo $row['siteUrl']; ?>">
                 <?php echo $row['fullName']."</a>" ; ?></td>
                 <!-- <th><a href="http://"></a> -->
                  <!-- <?php echo $row['siteUrl']; ?> -->
                <!-- </th>  -->
               
</tr>
                <?php
    }



// for ($x = 0; $x <= 127; $x++) {
//     echo $x;
// }
 
 
 
//  
?>
</table>
</tbody>
<a  target="_blank" class="drive_link" href="http://drive.google.com/drive/u/0/mobile/folders/1ezDZ3uDplBOjbuBGw1qxzzD64tiXhtDt?pli=1"type="submit">Other Courses link Google Drive</a>

    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/J_SYWBX0ekU" title="ECM101_Topic001_New" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


<iframe width="560" height="315" src="https://www.youtube.com/embed/SDzjW58cHnQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     -->
</body>
</html>



