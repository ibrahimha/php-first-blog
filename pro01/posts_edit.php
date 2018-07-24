<?php
	require('config/config.php');
	require('config/db.php');

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
        <th scope="col">Edit</th>
        </tr>
    </thead>
    <?php foreach($posts as $post):    ?>
    <tbody>
        <tr class="table-active">
        <th scope="row"> <?php echo $post['id'];   ?></th>
        <td><?php echo $post['title'];   ?></td>
        <td><?php echo $post['body'];   ?></td>
        <td> <a href="<?php echo ROOT_URL; ?>posts_editor.php?id=<?php echo $post['id']; ?>" class="btn btn-secondary">Edit</a> </td>
        </tr>
    </tbody>
    <?php endforeach; ?>
</table>
<hr>

</div>




