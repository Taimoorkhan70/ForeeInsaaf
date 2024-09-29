<?php
   mysqli_report(false);
   $connection = mysqli_connect("localhost","root","","techtvto_freelance");
    if(mysqli_connect_error()){
     echo "<p style='color:red;'>Error No:".mysqli_connect_errno()."</p>";
     echo "<p style='color:red;'>Error MSG:".mysqli_connect_error()."</p>";
    }
?>