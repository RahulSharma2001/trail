<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/sign_in.css">
    <title>
        Sign In
    </title>
</head>
<body bgcolor="#7fffd4">
<h1 class="heading" style="text-align: center">Social Hub</h1>
<form action="available.html" method="post">

    <div class="container"  >
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Your email ID" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit" name="sign_in">Login</button>
        <?php
        include ("signin_user.php")

        ?>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn"><a href="Sign_up.php"><b> SIGN UP</b></a></button>
        <span class="psw">Forgot <a href="#">password?</a></span>

    </div>
</form>

</body>
</html>