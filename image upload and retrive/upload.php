<?php

include("db.php");
if(isset($_POST['submit'])) {
$file = rand(1000,100000)."-".$_FILES['image']['name'];
 $file_loc = $_FILES['image']['tmp_name'];
 $file_size = $_FILES['image']['size'];
 $file_type = $_FILES['image']['type'];
 $folder="./UPLOADS/";
 move_uploaded_file($file_loc,$folder.$file);
$res = mysqli_query($conn, "INSERT INTO images (file,type,size)VALUES ('$file' ,'$file_type' , '$file_size')");
echo $res;


if($res) {
  echo "success";
    }
    else{
         echo("Error description: " . mysqli_error($conn));
    
    }
}

mysqli_close($conn);
?>




