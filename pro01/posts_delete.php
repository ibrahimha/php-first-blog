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

	// Create Query
	$query = 'SELECT * FROM blog';

	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
    mysqli_close($conn);
    //<img src="inc/icon.png" alt="user_editor.php" style="width="32" height="32"> </td>
    
?>








<?php include('inc/dashheader.php');    ?>
<div class ="container">
<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
<a href="admin.php" class="btn btn-primary">Back</a>
<hr>

<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Usernaem</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <?php foreach($posts as $post):    ?>
    <tbody>
        <tr class="table-active">
        <th scope="row"> <?php echo $post['id'];   ?></th>
        <td><?php echo $post['title'];   ?></td>
        <td><?php echo $post['body'];   ?></td>
        <td><?php echo $post['username'];   ?></td>
        <td> <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				  <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
				  <input type="submit" name="delete" value="Delete" class="btn btn-danger">
			  </form> </td>
        </tr>
    </tbody>
    <?php endforeach; ?>
</table>
<hr>

</div>




