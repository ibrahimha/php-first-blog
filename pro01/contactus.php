<?php


?>

<?php include('inc/header.php');    ?>
<?php include('inc/navbar.php');    ?>


<hr>
<div class="container">
<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
    <div class="card-header">Contact US</div>
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
                <label for="exampleTextarea">Message</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>


            <button type="submit" name="reg" class="btn btn-primary">Submit</button>
            
        </div>


    </div>

</div>



<?php include('inc/footer.php')    ?>