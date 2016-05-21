<?php  
  session_start();
  $conn=new mysqli('localhost', 'root', '','users');
  $query = "SELECT * FROM zayavki";
  $result = $conn->query($query)
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Page</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/my-classes.css" rel="stylesheet">
</head>
<body>
  <!--Navbar-->
      <nav class="navbar navbar-default" style="background-color:#002248;">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color:white;" href="">Admin page</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li style="float:right;"><a href="logout.php" style="color:white; margin-left:10px;" id="naved">LOG OUT</a></li>
        
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
      <ol class="breadcrumb" id="trad-menu" style="background-color:#002248;color:white;">
        <li><p href="">All requests:</p></li>
      </ol>
      <?php while($item = $result->fetch_assoc()){?>
        <div class="panel panel-success">
          <div class="panel-heading" style="background-color:#002248;color:white;" id="name"><?=$item['Name']?></div>
          <div class="panel-body">
            <p><span style="color:#002248;"><strong>Category: </strong></span><?=$item['Category']?></p>
            <p><span style="color:#002248;"><strong>Comment: </strong></span><?=$item['Message']?></p
            <p><button class="btn btn-success" type="submit" onclick="remove()" style="height:32px;float:left;margin-left:30px; display:inline-block;font-size:14px;background-color:#002248;">Accept</button></p>
          </div>
        </div>
      <?php } ?>
  </div>
  
 <script>
      function addDiv() {
        var name=$("#from").val();;
        $.ajax(
          'remove.php',{
            data:"from="+from+"&departure="+departure+"&return="+returned+"&to="+to+"&class="+clas+"&age="+age,
            success:function(data){
              $(".container").html(data);
              }
          }
          )
      }
  </script>
</body>
</html>


