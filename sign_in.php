<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="nav">
        <img src="images/logo.png" alt="">
    </div>
    <div class="signin-container">
        <div class="Sign-In">Sign In</div>
        <form class="signin-form" action="index_signin.php" method="post">
            <input class="form-input" type="email" name="email" placeholder="Enter your Email" required>
            <input class="form-input" type="password" name="password" placeholder="Password" required>
            <br>
            <button class="form-button" type="submit">Sign In</button>
            <div class="form-group remember-me">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Remember Me</label>
            </div>
            <div class="need-help">
                <a href="#">Need Help?</a>
            </div>
        </form>
    </div>
</body>

</html>