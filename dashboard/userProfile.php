<?php
require ('../imacConnect.php'); 
session_start();
?>
<link rel="stylesheet" href="css/userProfile.css">
<div id="userProfile">
  <div id="userHeader">
    <h3 id="name">User Details</h3>
    <A  id="edit">Edit Profile</A>
  </div>
  <div> 
    <table>
      <tbody>
        <?php 
        $sql = "SELECT * FROM $tableNameDUD WHERE `Unique ID'='CSCMPN00' ";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0){
          $row=mysqli_fetch_assoc($result);
          echo "<tr><td>Name:</td><td>".$row['First Name']." ".$row['Last Name']."</td></tr>";
          echo "<tr><td>Unique ID:</td><td>".$row['Unique ID']."</td></tr>";
          echo "<tr><td>Department:</td><td>".$row['Department']."</td></tr>";
          echo "<tr><td>Role:</td><td>".$row['Role']."</td></tr>";
          echo "<tr><td>E-Mail ID:</td><td>".$row['Email ID']."</td></tr>";
          echo "<tr><td>Mobile:</td><td>".$row['Mobile']."</td></tr>";
        }else{
          echo "<tr><td>NO DATA AVAILABLE.</td></tr>";
          echo "$_SESSION['userId']";
        }
        ?>
    </tbody>
  </table>
</div>