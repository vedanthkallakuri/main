<?php

    if(isset($_GET["username"])){
        $username = $_GET["username"];
        echo '
        <div class="row">
            <div class="field">
                <label for="username">username/email</label>
                <input type="text" name="username" id="username" value="'.$username.'">
            </div>
        </div>';
    }
    else{
        echo '
        <div class="row">
            <div class="field">
                <label for="username">username/email</label>
                <input type="text" name="username" id="username">
            </div>
        </div>';
    }

?>