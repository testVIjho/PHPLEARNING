<?php
require_once('includes/config-session.inc.php');
require_once('includes/signup-view.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup & Login</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-6">

            <!-- Signup Form -->
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="text-center mb-3">Signup Form</h3>

                    <form action="includes/signup.inc.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                           <?php inputUserName();?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <?php inputEmail();?>
                        </div>

                        <button type="submit"  name="signupSubmit" class="btn btn-primary w-100">Signup</button>
                    </form>
                </div>
            </div>

            <!-- Login Form -->
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mb-3">Login Form</h3>

                    <form action="includes/login.inc.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="login_name" class="form-control" placeholder="Enter your name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="login_email" class="form-control" placeholder="Enter your email">
                        </div>
                        <button type="submit" name="loginSubmit" class="btn btn-success w-100">Login</button>
                    </form>
                </div>
            </div>
            <?php
            check_signup_errors();
            ?>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>