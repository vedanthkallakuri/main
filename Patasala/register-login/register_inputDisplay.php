<?php

    if(isset($_GET["firstname"])){
        $firstname = $_GET["firstname"];
        echo '
        <div class="row">
            <div class="col">
                <div class="field">
                    <label for="firstname">firstname</label>
                    <input type="text" name="firstname" id="firstname" value="'.$firstname.'">
                </div>
            </div>';
        
    }
    else{
        echo '
        <div class="row">
            <div class="col">
                <div class="field">
                    <label for="firstname">firstname</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
            </div>';
    }
    if(isset($_GET["lastname"])){
        $lastname = $_GET["lastname"];
        echo '
            <div class="col">
                <div class="field">
                    <label for="lastname">lastname</label>
                    <input type="text" name="lastname" id="lastname" value="'.$lastname.'">
                </div>
            </div>
        </div>';
    }
    else{
        echo '
            <div class="col">
                <div class="field">
                    <label for="lastname">lastname</label>
                    <input type="text" name="lastname" id="lastname">
                </div>
            </div>
        </div>';
    }
    
    if(isset($_GET["email"])){
        $email = $_GET["email"];
        echo '
        <div class="field">
            <label for="email">email</label>
            <input type="text" name="email" id="email" value="'.$email.'">
        </div>';
    }
    else{
        echo '
        <div class="field">
            <label for="email">email</label>
            <input type="text" name="email" id="email">
        </div>';
    }
    if(isset($_GET["user"])){
        $username = $_GET["user"];
        echo '
        <div class="field">
            <label for="username">username</label>
            <input type="text" name="username" id="username" value="'.$username.'">
        </div>';
    }
    else{
        echo '
        <div class="field">
            <label for="username">username</label>
            <input type="text" name="username" id="username">
        </div>';
    }  
?>