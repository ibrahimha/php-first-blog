<?php include('inc/dashheader.php');    ?>

<div class="container">
<div class="card text-white bg-primary mb-3" style="max-width: 100%;">
<a href="users.php" class="btn btn-primary">Back</a>
    <div class="card-header">Create</div>
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
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" name="reg" class="btn btn-primary">Submit</button>
            
        </div>


    </div>

</div>