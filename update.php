<!-- Get Data => Show => Edit => Update -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Page</title>
	
</head>
<body>
   <?php
 
   require("./db_connection.php");
 // echo $_GET['id'];

  $id = $_GET['id'];

  $sql = "SELECT * FROM work WHERE id = $id";
  //  // echo "<pre>";
  $query = mysqli_query($conn,$sql);  
  // // print_r(mysqli_fetch_assoc($query));

  $data = mysqli_fetch_assoc($query);  // Get data step

   if(isset($_POST['Btn'])){
       $taskId = $_POST['taskId'];
       $taskName = $_POST['taskName'];

       $updateSQL = "UPDATE work SET name='$taskName' WHERE id=$taskId";

       if(mysqli_query($conn,$updateSQL)){
       	header("location:read.php");
       }else{
       	echo "Update error...";
       }
   }
               
?>

<a href="./read.php">List Page</a>
<form method="POST">
	<label>Tasks</label>
	<input type="hidden" name="taskId" value="<?php echo $data['id'] ?>">
	<input type="text" name="taskName" value="<?php echo $data['name'] ?>" required>	
	<button name="Btn">Update</button>
</form>

</body>
</html>

