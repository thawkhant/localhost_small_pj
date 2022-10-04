<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Todo list</title>
</head>
<body>
    <h1>Todo List</h1>

    <form  method="POST">
    		<label for="name">Your Tasks</label>
    		<input type="text" name="taskName" id="name" placeholder="Enter Your Task...">
    	<button type="submit" name="addBtn">Add</button>
    </form>

    <?php

    require_once("./db_connection.php");

     if(isset($_POST['addBtn'])){
     	$taskName = $_POST['taskName'];

        // for require

        if($taskName == "" || $taskName == null){
            echo "<small style='color:red;'>Message is required!</small>";
        }else{
                $sql = "INSERT INTO work(name) VALUES ('$taskName')";

        // if(mysqli_query(connection,query))

        if(mysqli_query($conn,$sql)){
            echo "Insert Success...";
        }else{
            echo "Query Fail..." . mysqli_error();
        }

        }

     
     }

    ?>
</body>
</html>