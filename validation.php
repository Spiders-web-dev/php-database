<?php

	$hostname = "localhost";
	$username = "miraz007";
	$password = "bandit007";
	$dbname = "task";

    

	$conn2 = mysqli_connect($hostname, $username, $password, $dbname);

    $UserName = $_POST["username"];
    $Password = $_POST["password"];

    $s = "select * from user where UserID = '$UserName' && password = '$Password'"; 
    $result = mysqli_query($conn2, $s);

    $num = mysqli_num_rows($result);

    if(num==1){
       header("Location:index.php");

    }else{
        header("Location:login.php");
        }
