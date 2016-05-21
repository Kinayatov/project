<?php
    $conn=new mysqli('localhost', 'root', '','users');

    $login=$_POST['login'];
    $password=$_POST['password'];

    $query=$conn->query("SELECT * FROM `users` WHERE (`Login`='$login' || `Password`='$password' AND `type`=1)");
    if (mysqli_num_rows($query)>0){
      session_start();
      $_SESSION['login']=$login;
      header("Location:admin.php");
    }
    else {
      $query1=$conn->query("SELECT * FROM `users` WHERE (`Login`='$login' AND `Password`='$password' AND `type`=0)");
      if (mysqli_num_rows($query1)>0){
      session_start();
      $_SESSION['login']=$login;
      header("Location:index.php");
      }
      
    }
?>
