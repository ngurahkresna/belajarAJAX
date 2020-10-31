<?php require './fb-init.php'; ?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--  roboto font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<body class="p-5" style="background: #EBECF6">
<div class="container">
    <div class="row">
        <div class="col">
            <img src="img/login.png" class="d-flex p-2" style="width: 372px; vertical-align: middle; margin-top: 200px">
        </div>
        <div class="col d-flex justify-content-center">
            <div style="width: 450px; background: white; box-shadow: 0px 0px 100px rgba(85, 34, 185, 0.15); border-radius: 32px; padding: 40px;">
                <h1>Login</h1>

                <form style="margin-top: 40px;">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        <small id="emailHelp" class="form-text text-muted" style="text-align: end;">Forgot Password?</small>
                    </div>

                <button type="button" class="btn btn-primary btn-block"
                        style="background-color: #5321B7; border-color: #5321B7; margin-top: 40px;">Sign in
                </button>

                <p class="m-4" style="text-align: center">or sign in using</p>
                <?php if (isset($_SESSION['access_token'])) :

                    header("Location: http://localhost/belajarAjax/logged.php");
                    exit();

                    ?>

                <?php else: ?>

                    <div class="container">
                        <div class="row">

                            <div class="col d-flex justify-content-end">
                                <a href="<?php echo $login_url ?>">
                                    <img src="img/fb.png" alt="facebook" style="width: 50px; height: 50px;">
                                </a>
                            </div>

                            <div class="col d-flex justify-content-start">
                                <a href="">
                                    <img src="img/google.png" alt="google" style="width: 50px; height: 50px;">
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>