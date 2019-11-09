<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer Registration form </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  
  
  <script src="../js/jquery.min.js"></script>
  
  
  <script src="../js/popper.min.js"></script>
  
  
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/signfvalid.js"></script>
</head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-sm-12" style="background-color: red ; height:50px;"></div>     
</div>
<div class="row">
    <div class="col-sm-12" style="background-color: green ; height:50px;">
    <nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../index.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="signupf.php">Signup</a>
    </li>
    
  </ul>
</nav>
    </div>     
</div>
<div class="row" style="height:400px">
    <div class="col-sm-4" style="background-color: red ;"></div>
    <div  class="col-sm-8" style="background-color: blue ; ">
    <h2 >Customer Registration form</h2>



  <form class="form-group" method="POST" action="../model/cu_insert.php" name="sform" id="sform" onsubmit=" return formvali();">
    <div class="form-group">
	Name:
      <input type="text" class="form-control" id="name"  name="name">
    </div>
    <div class="form-group">
	UserName
      <input type="text" class="form-control" id="uname"  name="uname">
	</div>
  Phone:
<div class="form-group">
      <input type="phone" class="form-control" id="phone"  name="phone">
    </div>

    
	
	Password:
    <div class="form-group">
      <input type="password" class="form-control" id="pass" name="pass">
    </div> 


    <input type="submit" value="Signup">
  </form>
    </div>      
</div>

<div class="row">
    <div class="col-sm-12" style="background-color: green ; height:50px;"></div>     
</div>
</div>

</body>
</html>



