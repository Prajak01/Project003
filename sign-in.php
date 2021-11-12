<?php require_once('connect_db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
	<div class="header">
		<h2>SIGN IN</h2>
	</div>
	<form action="sign-in.php" method="POST" id="form" class="form">
		<div class="form-control">
			<label for="username">Username</label>
			<input type="text" name="username" placeholder="username" id="username" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>

		<div class="form-control">
			<label for="username">Password</label>
			<input type="password" name="password" placeholder="Password" id="password"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-group text-center">
			<input type="checkbox" tabindex="3" class="ture" name="remember" id="remember">
			<label for="remember"> Remember Me </label><a href="#"> Forgot Password ?</a>
		</div>

		<button class="button" type="submit" name="submit">SIGN IN</button>

		<p>New User? <a href="index.php">Sign Up</a></p>

	</form>
			

</div>

</body>

</html>

<?php
    session_start();
	include('connect_db.php');
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']); 
        $password = mysqli_real_escape_string($conn, $_POST['password']); 
        
        $sql = "SELECT * FROM `register` WHERE `username` = '".$username."' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc(); //เช็คว่ามีข้อมูลหรือเปล่า
        if(!empty($row) && password_verify($password, $row['password'])){
          $_SESSION['username'] = $row['username'];
            header('Location:test.php');
          }else{
            header('Location:test.php');
          }
    }
?>