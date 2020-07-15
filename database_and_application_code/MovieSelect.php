<?php
     require_once('./library.php');
     $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
     // Check connection
     if (mysqli_connect_errno()) {
           echo("Can't connect to MySQL Server. Error code: " .
mysqli_connect_error());
           return null;
     }
     // Form the SQL query (a SELECT query)
     $sql="SELECT * FROM Movie ORDER BY Title";
     $result = mysqli_query($con,$sql);

     if(mysqli_num_rows($result) > 0){
	$output_data .='
		Title
		Duration
		Gross
		Language
		Movie Review
		Genre
     	';
	while($row = mysqli_fetch_array($result)){
		$output_data .= ' '.$row["Title"].',' . $row["Duration"].','. $row["Gross"]. ','. $row["Language"].','. $row["Movie_Review"].','. $row["Genre"].'
			   ';
}
	$output_data .= '';
	header('Content-Type: text/x-csv');
	header('Content-Disposition: attachment; filename=download.csv');
	echo $output_data;
}
	
     mysqli_close($con);
?>
