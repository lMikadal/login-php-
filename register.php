<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid my-5 w-50">
        <?php include('errors.php'); ?>
        <div class="card rounded">     
            <div class="card-body">
                <h1 class="card-title text-center"><b>Register</b></h1>
                <form action="register_db.php" method="POST">
                    <div class="row">
                        <div class="col col-md-6 mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstname" required>
                            
                        </div>
                        <div class="col col-md-6 mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastname" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Eamil</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_com" class="form-label">Comfirm Password</label>
                        <input type="password" class="form-control" name="password_com" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="sing_up">Sing Up</button>
                </form>
            </div>
            <div class="card-footer text-center">
                <p>Already have an Account? <a href="login.php">Sign in</a></p>
            </div>
        </div>
    </div>
    

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>