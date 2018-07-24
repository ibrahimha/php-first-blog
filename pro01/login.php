<?php
	require('config/config.php');
	require('config/db.php');

	// Create Query
	$query = 'SELECT * FROM users';

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>

<?php include('inc/header.php');    ?>
<?php include('inc/navbar.php');    ?>

<hr>
<div class="container">
<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
    <div class="card-header">Login</div>
        <div class="card-body">
            <div class="form-group">
                <label class="col-form-label" for="inputDefault">Username</label>
                <input type="text" name="username" class="form-control" placeholder="username">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
            <a href="admin.php" class="btn btn-primary">Login as Admin</a>
            
        </div>


    </div>

</div>



<?php include('inc/footer.php')    ?>