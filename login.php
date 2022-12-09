
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="chms.jpg">

    <title>Mable  University Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
        <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <style>
      body{
        display: flex;
        height: calc(100%);
        width: calc(100%);
        justify-content: center;
        align-items: center;
      }
      .login-form {
  display: block;
  position: fixed;
  border:5px solid grey;
  border-radius: 20px;
  padding: 30px;
  width: 500px;
  background-color: red;
  left:360px;
  top:250px;
 } 
 .erlert{
  display:block;
  border-radius:5px;
  background-color: white;
  padding: 5px;
}
    </style>
  </head>
<body style="background-color: white;">
  

<div class="container-fluid">
<img src="mable.png">
  <div class="login-form" id="login_modal" role="dialog" >
<center><h1>Mable University Login</h1></center>

  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="user">User:</label>
      <div class="col-md-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
        <input type="text" class="form-control" id="user" name="user" placeholder="Enter User" autocomplete="off">
      </div>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-md-10">
      <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key fa" aria-hidden="true"></i></span>
          
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-md-offset-9  col-md-12">
      <!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Create New</button>-->
        <button type="hidden"  class="btn btn-warning">Login</button>
       
      </div>
    </div>
  </form>
   <?php
  include 'connect.php';
  ?>
   </div>          
</div>


    <script src="assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  
</html>
