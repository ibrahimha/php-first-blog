<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$body = mysqli_real_escape_string($conn, $_POST['body']);
		$username = mysqli_real_escape_string($conn,$_POST['username']);

		$query = "INSERT INTO blog (title,body,username) VALUES('$title', '$body' ,'$username')";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
?>

<?php include('inc/dashheader.php');    ?>

<div class="container">
<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
<a href="admin.php" class="btn btn-primary">Back</a>
    <div class="card-header">Add New Post</div>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    
        
        
        <div class="card-body">
            <div class="form-group">
                <label class="col-form-label" for="inputDefault">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>

            

            <div class="form-group">
                <label for="exampleTextarea">Post Aera</label>
                <textarea class="form-control" id="exampleTextarea" rows="10" name="body"></textarea>
            </div>

            <div class="form-group">
                <label class="col-form-label" for="inputDefault">Username</label>
                <input type="text" name="username" class="form-control" placeholder="username" >
            </div>

            <input type="submit" name="submit" value="Submit"  class="btn btn-primary"></button>
            
        </div>

    </form>
    </div>

</div>