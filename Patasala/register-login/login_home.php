<?php
    require_once("login_validations.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="login.css" rel="stylesheet">
    <title>Login</title>
</head>
    <header>    
        <h1 class="patasala"><div class="blue">pata</div>sala</h1>
        <nav>
            <ul>
                <li><a class=a-link href="login_home.php">Login</a></li>
                <li><a class="a-button" href="register_home.php">Get Started</a></li>
            </ul>
        </nav>
    </header>
<body>
    <main>
        <div class="page-wrapper">
            <h2>Login to <i class="patasala"><div class="blue">Pata</div>sala</i></h2>            
            <form action="login_home.php" method="POST">
                <?php require_once("login_inputDisplay.php"); ?>
                <div class="row">
                    <div class="field">
                        <label for="password">password</label>
                        <input type="password" name="password" id="password">
                    </div>
                </div>
                <?php require_once("login_errorDisplay.php"); ?>
                <input type="submit" name="submit" id="submit" value="Login">
            </form> 
            <p class="p-register-redirect">Don't have an account? <a href="register_home.php">Click Here</a></p> 
        </div>
    </main>
</body>
</html>