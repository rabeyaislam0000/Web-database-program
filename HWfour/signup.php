

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  
  <script src="js/jquery.min.js"></script>
  
  
  <script src="js/popper.min.js"></script>
  
  
  <script src="js/bootstrap.min.js"></script>
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
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="signup.php">Signup</a>
    </li>
    
  </ul>
</nav>
    </div>     
</div>
<div class="row" style="height:700px">
    <div class="col-sm-4" style="background-color: red ;"></div>
    <div  class="col-sm-8" style="background-color: blue ; ">
    <h2 >Registration form</h2>
  <form method="POST" action="signup.php" >
    <div class="form-group">
	First Name:
      <input type="fname" class="form-control" id="fname" placeholder="First Name" name="fname">
    </div>
    <div class="form-group">
	Last Name
      <input type="lname" class="form-control" id="lname" placeholder="Last Name" name="lname">
	</div>
  Phone:
<div class="form-group">
      <input type="phone" class="form-control" id="phone" placeholder="Phone Number" name="email">
    </div>

    
	Email:
	<div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	Password:
    <div class="form-group">
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div> 
Confrim Password:	
	<div class="form-group">
      <input type="cpassword" class="form-control" id="password2" placeholder="Confirm password" name="password2">
    </div>
		Gender:
<div class="form-check">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Male
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Female
      </label>
    </div>
	 <div class="form-check">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Others
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>      
</div>

<div class="row">
    <div class="col-sm-12" style="background-color: green ; height:50px;"></div>     
</div>
</div>

</body>
</html>



