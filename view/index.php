<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AR | LOGIN</title>
    <script src="https://kit.fontawesome.com/de820b69c2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href="../assets/css/styles.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="/assets/css/styles.css"> -->
</head>

<!--Sección centrode la pagina-->

<div class="login">
    <div class="center__container">
        <div class="title">Welcome to login</div>
        <div class="two__cols">
            <h1>Don't have an account?</h1>
            <a href='/registro.html'>SignUp</a>
        </div>
    </div>
    <div class="login__container">
        <div class="logo">LOGIN</div>

        <div class="sign__log">
            <button class="sign_save log_one">
            <i class='bx bxl-google' ></i>
                <h1>Login</h1>
            </button>
            <button class="sign_save log_two">
            <i class='bx bxl-facebook-circle'></i>
                <h1>Login</h1>
            </button>
        </div>

        <form id="loginForm" class="signupForm">
            <div class="input__field">
                <i class="bx bx-mail-send"></i>
                <input type="email" class="input" id="email" placeholder="Email" required autocomplete="off">
            </div>
            <div class="input__field">
                <i class="bx bx-lock-alt"></i>
                <input type="password" class="input" id="password" placeholder="Password" required autocomplete="off">
            </div>
            <div class="three_cols">
                <label for="check"><input type="checkbox" id="check">Remember Me</label>
                <a href="#">Forgot Password</a>
            </div>
            <div class="submits">
                <input type="submit" id="submit" class="submit" value="Login">
            </div>
        </form>
    </div>
</div>







<body>
    <script src="../assets/js/login.js"></script>
</body>

</html>
