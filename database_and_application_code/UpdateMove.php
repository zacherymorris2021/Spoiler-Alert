<?php
   require_once("./library.php"); // To connect to the database
   $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
   // Check connection
   if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
   // Form the SQL query (an INSERT query)
   $sql="UPDATE Movie SET Movie_Review='$_POST[review]' WHERE Title='$_POST[title]'";
   if (!mysqli_query($con,$sql))
     {
     die('Error: ' . mysqli_error($con));
     }
   echo "1 record added"; // Output to user
   mysqli_close($con);
?>
