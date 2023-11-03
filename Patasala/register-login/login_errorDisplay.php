<?php
    if(isset($_GET["error"])){
        
        if($_GET["error"] == "emptyfields"){
            echo "<p>Fill in all of the fields</p>";
        }
        else if($_GET["error"] == "invaliduser"){
            echo "<p>Invalid username</p>";
        }
        else if($_GET["error"] == "invalidpassword"){
            echo "<p>Invalid password</p>";
        }
        else if($_GET["error"] == "none"){
            echo "<p>You have successfully logged in</p>";
        }
    }
?>