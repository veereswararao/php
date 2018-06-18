<?php
include("db.php");
$sql = "SELECT * FROM images";
$result = mysqli_query($conn, $sql);

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<tr>";
       echo "<img  width='200px' height='200px' src='UPLOADS/".$row['file']."'";
	  
	
echo "</tr>";
    }

mysqli_close($conn);
?>