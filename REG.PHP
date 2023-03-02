<?php  
	$con= new mysqli("localhost","root","","kinjal");
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$contact=$_POST['contact'];
		$sql="insert into `reg`(`name`,`email`,`password`,`contact`)values('$name','$email','$password','$contact')";
		$res=$con->query ($sql);
	}
?>	


<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
	<b>Register:</b></br></br>
	<form action="" method="post">
		<label><b>name:</b></label><br>
		<input type="text"name="name"action="<?php $_SERVER['PHP_SELF']; ?>"class="form-control"placeholder="enter name"required ></br>
		<label><b>email:</b></label>
		<input type="text"name="email"class="form-control"placeholder="enter email"required ></br>
		<label><b>password:</b></label><br>
		<input type="password"name="password"class="form-control"placeholder="enter password"required ></br>
		<label><b>mobile:</b></label><br>
		<input type="contact"name="contact"class="form-control"placeholder="enter mobile"required ></br>
		<input type="submit"value="register" name="submit" class="btn btn-primary w-30 ">
		
		</form>
	</div>
