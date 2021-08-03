
<?php

//including the database connection file 
include("config.php");

//getting id of the data from url
$ad = $_GET["id"];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM user WHERE id = $ad");

if($result){
    echo "Sucessfully run";
}
else{
    echo "Failed";
}

//redirecting to the display page (index.php in our case)
header("Location:http://localhost/project/index.php");
?>