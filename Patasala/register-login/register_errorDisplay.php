<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyfields"){
            echo "<p>Fill in <b>all</b> of the fields</p>";
        }
        else if($_GET["error"] == "invalidusername"){
            echo "<p>Invalid <b>username</b>.</p>";
        }
        else if($_GET["error"] == "invalidemail"){
            echo "<p>Invalid <b>email</b>.</p>";
        }
        else if($_GET["error"] == "invalidpass"){
            echo "<p><b>Password</b>s don't match.</p>";
        }
        else if($_GET["error"] == "invalidpasslen"){
            echo "<p>Your <b>password</b> needs to be at least 8 characters long.</p>";
        }
        else if($_GET["error"] == "userexists"){
            echo "<p><b>username</b> or <b>email</b> already exists.</p>";
        }
        else if($_GET["error"] == "none"){
            header("Location: login_home.php");
            echo "<p>Congratulations. You have successfully signed up.</p>";
        }
    }
?>