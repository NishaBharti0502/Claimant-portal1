<?php SESSION_start(); ?>
<!doctype html>
<html>
<head>
<title>signin</title><style>.c2{
color:white;
px-4;
background-color:green;
font-size:20px;}</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4 offset-md-4 form-div login">
<form action="loginsuccess.php" method="post">
<div class="c2"><p><?php if(isset($_SESSION['msg'])){
echo $_SESSION['msg'];}
else { echo $_SESSION['msg']="Please signin again.";}
?></p></div>
<h3><class="text-center">SIGN IN</h3>
<div class="form-group">
<label for="username">Username</label>
<input type="text" name="usernam"< class="form-control form-control-lg">
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" name="pass"< class="form-control form-control-lg required">
</div>
<div class="form-group">
<button type="submit" name="submit" class="btn btn-primary btn-block btn-lg">SIGN IN</button>
</div>
<p class="text-center">Not yet a member? <a href="signup.php">SIGN UP</a></p>
</form>
</div>
</div>
</div>
</body>
</html>