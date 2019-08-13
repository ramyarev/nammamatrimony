<?php 
session_start();
require('config.php');
if($_POST['login']=='LogIn')
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$designation=$_POST['designation'];
	$getrow=mysqli_query($conn,"select * from tbl_adminlogin where username='".$username."' and password='".$password."' and designation='".$designation."'");
	
	$rowcount=mysqli_num_rows($getrow);
	$fetrow=mysqli_fetch_array($getrow);
	if($rowcount==1)
	{
	    
		$_SESSION['adminid']=$fetrow['id'];
		header('location:admin/index.php');
		
	}
	else
	{
		echo "<script>alert('Invalid Login');</script>";
	}
}

?>
<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="plugins/images/icon.png">
    <title>Namma Matrimony</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
<!-- animation CSS -->
<link href="admin/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="admin/css/style.css" rel="stylesheet">

</head>
<body style="background-color:#e6f7ff">
<section id="wrapper" class="login-register">
  <div class="login-box login-sidebar" style="background-color:#e6f7ff">
    <div class="white-box"  style="background-color:#e6f7ff" align="center">
      <form class="form-horizontal form-material" id="loginform" action=""  method="post">
        <a href="javascript:void(0)" class="text-center db">
        <img src="images/logo.png" alt="Home" style="width:300px;height:200px;"/>
       
        <div class="form-group m-t-40">
		 <label for="example-search-input" class="col-12 col-form-label">User Name</label>
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" name="username"  placeholder="Username">
          </div>
        </div>
        <div class="form-group">
		 <label for="example-search-input" class="col-12 col-form-label">Password</label>
          <div class="col-xs-12">
            <input class="form-control" type="password" required="" name="password" placeholder="Password">
          </div>
        </div>
		
		 <div class="form-group">
          <label for="example-search-input" class="col-12 col-form-label">Staff Destination</label>
         <div class="col-xs-12">
				<select class="form-control" data-validetta="required" required name="designation" id="designation">
				<option value="">-select-</option>
			   <option value="hr">Hr</option>
				<option value="accounts" >Accounts</option>
				 <option value="tele caller">Tele caller</option>
				<option value="admin" >Admin</option>
				<option value="promotion">Promotion</option>
				</select>
                                   
                                    </div>
                                </div>
								<div class="form-group text-center m-t-20">
          <div class="col-xs-12">
		  <input type="submit" name="login" id="login" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" value="LogIn">
          </div>
        </div>
       
      </form>
	
	  
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="admin/bootstrap/dist/js/tether.min.js"></script>
<script src="admin/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

<!--slimscroll JavaScript -->
<script src="admin/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="admin/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="admin/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
