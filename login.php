
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Login</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body background="images/login.jpg">

    <div id="log_cont">
    <form action="proseslogin.php" method="POST">
    <?php
	session_start();
	if(isset($_SESSION['level']))
	if(isset($_SESSION['username'])) {
	header('location:center.php');
	}
	require_once("konek.php");
?>

<div class="col-md-4 col-md-offset-4 form-login">
   <div class="outter-form-login">
   	<div class="logo-login">
   		<em class="glyphicon glyphicon-user"></em>
   	</div>
   	 <form action="" class="inner-login" method="post">
   	 	<h3 class="text-center title-login">Login</h3>
   	 	<div class="form-group">
   	 		<input type="text" class="form-control" name="username" placeholder="Username" required>
   	 	</div>

   	 	<div class="form-group">
   	 		<input type="password" class="form-control" name="password" placeholder="Password" required>
   	 	</div>

   	 	<input type="submit" name="login" class="btn btn-block btn-custom-green" value="LOGIN"/>

   	 	<div class="text-center forget">
   	 		<p><a href="index.html" class="btn btn-danger"><i class="glyphicon glyphicon-backward"></i> Back</a></p>
      
   	 </form>
   </div>
 </div>
 
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>

 </tbody>
     </table>
   </form>
</div>