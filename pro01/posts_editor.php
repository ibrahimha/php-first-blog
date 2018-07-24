<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$body = mysqli_real_escape_string($conn, $_POST['body']);
		$username = mysqli_real_escape_string($conn,$_POST['username']);

		$query = "UPDATE blog SET 
					title='$title',
					username='$username',
					body='$body' 
						WHERE id = {$update_id}";

		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}

	// get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// Create Query
	$query = 'SELECT * FROM blog WHERE id = '.$id;

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($conn);
?>


<?php include('inc/dashheader.php');    ?>

<div class="container">
<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
<a href="admin.php" class="btn btn-primary">Back</a>
    <div class="card-header">Posts Editor</div>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

        <div class="card-body">
            <div class="form-group">
                <label class="col-form-label" for="inputDefault">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $post['title']; ?>">
            </div>

            

            <div class="form-group">
                <label for="exampleTextarea">Post Aera</label>
                <textarea class="form-control" id="exampleTextarea" rows="10"> <?php echo $post['body']; ?> </textarea>
            </div>

             <div class="form-group">
                <label class="col-form-label" for="inputDefault">Username</label>
                <input type="text" name="username" class="form-control" placeholder="username" value="<?php echo $post['username']; ?>">
            </div>


            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            
        </div>

    </form>
    </div>

</div>