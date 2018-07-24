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
?>
<?php include('inc/header.php');    ?>
<?php include('inc/navbar.php');    ?>
<hr>

    <div class="container">
        <div class="col-md-8" style="max-width: 100%;">
        
                <?php foreach($posts as $post):    ?>
                <hr>
                <h1 class="my-4"> <?php echo $post['title']; ?>   </h1>

                <!-- Blog Post -->
                <div class="card mb-4">
                <img class="card-img-top" src="https://source.unsplash.com/user/erondu/1600x900" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $post['title']; ?></h2>
                    <p class="card-text"><?php echo $post['body']; ?></p>
                  
                    <br>
                    <a href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on <?php echo $post['created_at']; ?> By <?php echo $post['username']; ?>
                    
                </div>

                <?php endforeach; ?>
        </div>
    </div>





<?php include('inc/footer.php')    ?>