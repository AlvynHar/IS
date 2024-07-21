<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EMS</title>

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/auth.css">
    <style>
        .video-container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        #background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="home.html"><img src="img/logo.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-5">Log in to enjoy EMS services</p>

                    <form action="php/login.php" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input required type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input required type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="register.php" class="font-bold">Sign up</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
                    </div>
                </div>
            </div>
            <!-- For the blue column-->
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    <div class="video-container">
                        <video autoplay muted loop id="background-video">
                            <source src="assets/log.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        <?php  if($_GET['msg'] == 'error'): ?>
            alert('Login failed, Please try again');
            <?php  endif; ?>

        <?php  if($_GET['msg'] == 'login'): ?>
            alert('Kindly login to access the Dashboard');
            <?php  endif; ?>
    </script>
    
        
</body>

</html>