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
		<h2>SIGN UP</h2>
	</div>
	<form action="create.php" method="POST" id="form"  class="form">
		<div class="form-control">

			<label  for="username">Username</label>
			<input type="text" name="username" placeholder="username" id="username" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
        <div class="form-control">
			<label for="email">Email</label>
			<input type="text" name="email" placeholder="email" id="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
        <div class="form-control">
			<label for="country">Country</label>
			<input type="text" name="country" placeholder="Country" id="country" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
            
			<label for="phone">Phone</label>
			<input type="tel" name="phone" placeholder="Phone" id="phone" />
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
		<div class="form-control">
			<label for="username">Confirm Password</label>
			<input type="password" name="cfpassword" placeholder="Confirm Password" id="password2"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>

		<button class="button" type="submit" name="submit">SIGN UP</button>

        <p>Exisitng User? <a href="sign-in.php">Sign in</a></p>
	</form>
</div>
<?php include('scripts.php')?>;

</body>

</html>