<?php
	require('config/config.php');
	require('config/db.php');



  if(isset($_POST['delete'])){
		// Get form data
		$delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

		$query = "DELETE FROM blog WHERE id = {$delete_id}";

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
  <?php include('inc/header.php');    ?>
  <?php include('inc/navbar.php');    ?>
	
    <div class="container">
    <div class="row">

<!-- Post Content Column -->
<div class="col-lg-8">

  <!-- Title -->
  <h1 class="mt-4"><?php echo $post['title']  ?></h1>

  <!-- Author -->
  <p class="lead">
    by
    <a href="#"><?php echo $post['username']   ?></a>
  </p>

  <hr>

  <!-- Date/Time -->
  <p>Posted on <?php echo $post['created_at']  ?></p>

  <hr>

  <!-- Preview Image -->
  <img class="img-fluid rounded" src="https://source.unsplash.com/user/erondu/1600x900" alt="">

  <hr>

      <h5><?php echo $post['body']   ?></h5>
      <hr>
      <hr>

        <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Back</a>

        <hr>
        <a href="<?php echo ROOT_URL; ?>posts_editor.php?id=<?php echo $post['id']; ?>" class="btn btn-default">Edit</a>

        <hr>
        <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				  <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
				  <input type="submit" name="delete" value="Delete" class="btn btn-danger">
			  </form>
      
		</div>
	<?php include('inc/footer.php'); ?>