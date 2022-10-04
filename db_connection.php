<?php 

  $conn = mysqli_connect('localhost','root','','todo_list');

  // if($conn){
  // 	echo "db is connected";
  // }else{
  // 	echo "Connection Fail..." . mysqli_connection_error();
  // }


  if(!$conn){
  	echo "Connection Fail..." . mysqli_connection_error();
  }