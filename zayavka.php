<?php
    $conn=new mysqli('localhost', 'root', '','users');
    $name=$_POST['name'];
    $category=$_POST['category'];
    $message=$_POST['message'];
    $query="INSERT INTO zayavki VALUES(NULL, '$name', '$category', '$message')";
    $conn->query($query);
    header("Location:index.php");?>
