<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    
	<div class="container d-flex flex-column justify-content-center vh-100 position-relative">
		<h3 class="text-center">Create New Account</h3>	

		<form action="controller/users_controller.php" method="POST">
			<div class="form-group">
				<label class="form-label">Name</label>
				<input name="fullname" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label class="form-label">Email</label>
				<input name="email" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label class="form-label">Username</label>
				<input name="username" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label class="form-label">Password</label>
				<input name="password" type="text" class="form-control">
			</div>
			<button name="register" class="btn btn-info w-100 mt-2">Sign up</button>
			 
			<a href="login.php">Already have an account</a>
		</form>		
	</div>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
