
<?php

    //  var_dump($_GET);

    // echo $_GET['id'];
     
     require_once("db_connection.php");


    $id = $_GET['id'];

    $sql = "DELETE FROM work WHERE id = $id";

    if(mysqli_query($conn,$sql)){
    	// echo "Delete success";
    	header("location:./read.php");
    }else{
    	echo "Delete Fail " . mysqli_error();
    }


?>