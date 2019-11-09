<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  
  <script src="js/jquery.min.js"></script>
  
  
  <script src="js/popper.min.js"></script>
  
  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/signfvalid.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-sm-12" style="background-color: red ; height:50px;">

  
  </div>     
</div>
<div class="row">
    <div class="col-sm-12" style="background-color:green;height:50px;">
    <nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="view/signupf.php">Signup</a>
    </li>
    
  </ul>
</nav>
    </div>     
</div>
<div class="row" style="height:400px">
   <div class="col-sm-4" style="background-color: red ;"></div>
    <div  class="col-sm-8" style="background-color: blue ; ">
 <form method="POST" action="controller/uchack.php" id="sform" onsubmit="return formvali()">
    <div class="form-group">

     
  <h3>UserName:</h3>
  <div>
      <input type="text" class="form-control" id="uname" placeholder="Enter uname" name="uname">
    </div><br>
  <h3>Password:</h3>
    <div>
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
    </div> 
    <br>
    <br>
    <input type="submit" class="btn btn-primary" value ="Login">

  </form>








    </div>      
</div>
</div>
<div class="row">
    <div class="col-sm-12" style="background-color:green ; height:50px;"></div>     
</div>
</div>

</body>
</html>



