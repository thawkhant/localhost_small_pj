<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Read</title>
    <style type="text/css">
        th{
            width: 250px;
            text-align: center;
        }

        td{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Task List</h1>
    <a href="./create.php">Create Page</a>
    <table border="1">

    	<thead>
    		<tr>
    			<th>ID</th>
    			<th>Name</th>
    			<th>Date</th>
    			<th>Status</th>
    		</tr>
    	</thead>

    	<tbody>
    		<!-- <tr>
    			<td>1</td>
    			<td>Thaw Khant</td>
    			<td>04.10.2022</td>
    			<td>
    				<a href="#">Update</a> |
    				<a href="#">Delete</a>
    			</td>
    		</tr> -->

    		<?php
                 require_once("./db_connection.php");

                 $sql = "SELECT * FROM work";
                 $query = mysqli_query($conn,$sql);
                 
                  // echo "<pre>";
                // var_dump($query);

                 $totalRow = mysqli_num_rows($query);  // how many rows in database 
                 // var_dump($totalRow);

                //  echo "<pre>";
                 // var_dump(mysqli_fetch_assoc($query));  // bar par lal kyi dar

           
                  while($row = mysqli_fetch_assoc($query)){

                  $time = date('d-m-Y g:i:a',strtotime($row['created_at']));

                 echo " <tr>
    			<td>{$row['id']}</td>  // database htal ka value ko yu dar
    			<td>{$row['name']}</td>
    			<td>$time</td>
    			<td>
    				<a href='./update.php?id={$row['id']}'>Update</a> |
    				<a href='./delete.php?id={$row['id']}'>Delete</a>
    			</td>
    		</tr> ";
                  }
               
    		?>
    	</tbody>
    </table>
</body>
</html>