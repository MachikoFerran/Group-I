<?php
// Delete cookies
setcookie("id", "", time() - 3600 * 24 * 30 * 12, "/");
setcookie("hash", "", time() - 3600 * 24 * 30 * 12, "/", null, null, true); // httponly !!!

//We redirect the browser to the page for checking our script
header("Location: login2.php");
exit;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HomePage</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVIGATION BAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index2.html">SHOPPING</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-center">
                <li class="nav-item active">
                    <a class="nav-link" href="index2.html">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="register2.php">REGISTER</a>
                </li>
            </ul>
        </div>

        <form class="form-inline">
            <input type="search" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
            <button class="button btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<div class="container">

    <div class="row">

        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

            <div class="card card-signin my-5">

                <div class="card-body bg-light">
                    <div class="wrapper">
                        <h2>Login</h2>
                        <p>Please fill in your credentials to login.</p>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control"
                                       value="<?php echo $username; ?>">
                                <span class="help-block"><?php echo $username_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                                <span class="help-block"><?php echo $password_err; ?></span>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Login">
                            </div>
                            <p>Don't have an account? <a href="register2.php">Sign up now</a>.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="py-5 bg-black">
    <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; SHOPPING 2019</p>
    </div>
    <!-- /.container -->
</footer>

</body>

</html>
