<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    <title>login</title>
</head>

<body>
    <?php
    include '../layout/user.php';
    if (isset($_POST['btnSubmit'])) {
        $user = $_POST['userName'];
        $pass = ($_POST['password']);
        if (checkLogin($user, $pass)) {
            session_start();
            $_SESSION['admin'] = $user;
            header('location:dasboard.php');
        } else {
            echo '<div class="alert alert-danger">Đăng nhập không thành công</div>';
        }
    }

    ?>
    <div class="login-reg-panel">
        <form action="" method="POST">
            <div class="login-info-box">
                <h2>Have an account?</h2>
                <p>Lorem ipsum dolor sit amet</p>
                <label id="label-register" for="log-reg-show">Login</label>
                <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
            </div>

            <div class="register-info-box">
                <h2>Don't have an account?</h2>
                <p>Lorem ipsum dolor sit amet</p>
                <label id="label-login" for="log-login-show">Register</label>
                <input type="radio" name="active-log-panel" id="log-login-show">
            </div>

            <div class="white-panel">
                <div class="login-show">
                    <h2>LOGIN</h2>
                    <input type="text" name="userName" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" name="btnSubmit" value="Login">
                    <a href="">Forgot password?</a>
                </div>

                <div class="register-show">
                    <h2>REGISTER</h2>
                    <input type="text" placeholder="Email">
                    <input type="password" placeholder="Password">
                    <input type="password" placeholder="Confirm Password">
                    <input type="button" value="Register">
                </div>
            </div>
        </form>

    </div>


</body>

</html>