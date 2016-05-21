<?php
    $conn=new mysqli('localhost', 'root', '','users');
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $query="INSERT INTO users VALUES(NULL, '$name', '$surname', '$email', '$login', '$password', 0)";
    $conn->query($query);
    header("Location:index.php");?>
