<?php
    
    require_once("register_validations.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="register.css" rel="stylesheet">
    <title>Register</title>
</head>

<body>

    <header>
        <h1 class="patasala"><div class="blue">pata</div>sala</h1>
        <nav>
            <ul>
                <li><a class=a-link href="login_home.php">Login</a></li>
                <li><a class="a-button" href="register_home.php">Get Started</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="page-wrapper">
            <h2>Learning Music Made Easy with <i class="patasala"><div class="blue">Pata</div>sala</i></h2>
            <h3>Organize all your music in one place</h3>
            <form action="register_home.php" method="POST">
                <?php require_once("register_inputDisplay.php"); ?>
                    <div class="row">
                        <div class="col">
                            <div class="field">
                                <label for="password1">password</label>
                                <input class="half-len"  type="password" name="password1" id="password1" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="field">
                                <label for="password2">confirm password</label>
                                <input class="half-len" type="password" name="password2" id="password2">
                            </div>
                        </div>
                        <!--<label for="isTeacher">Are you a teacher?</label>
                        <input type="radio" name="is_teacher" id="is_teacher">-->
                    </div>
                    <?php require_once("register_errorDisplay.php") ?>

                    <input type="submit" name="submit" id="submit" value="Start Your Musical Journey">

            </form> 
            <p class="p-login-redirect">Already have an account? <a href="login_home.php">Click Here</a></p>
        </div>
    </main> 
    
</body>
</html>
    