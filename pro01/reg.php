<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);

		$query = "INSERT INTO users(username,email,password) VALUES('$username', '$email' ,'$password')";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
?>

<?php include('inc/header.php');    ?>
<?php include('inc/navbar.php');    ?>
<hr>
<div class="container">
<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
    <div class="card-header">Reigster</div>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="card-body">
        

            <div class="form-group">
                <label class="col-form-label" for="inputDefault">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" name="reg" class="btn btn-primary">Reigster</button>
        
        </div>

    </form>
    </div>

</div>

<?php include('inc/footer.php')    ?>