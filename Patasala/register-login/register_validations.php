<?php
    require_once("functions.php");

    if(isset($_POST["submit"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];                                           
        $username = $_POST["username"];      
        $password1 = $_POST["password1"];                                              
        $password2 = $_POST["password2"];                                                           
        if(emptyRegisterFields($firstname, $lastname, $email, $username, $password1, $password2)){
            header("Location: register_home.php?error=emptyfields&firstname=$firstname&lastname=$lastname&user=$username&email=$email"); 
            exit();    
        }
        else if(invalidUser($username)){
            header("Location: register_home.php?error=invalidusername&firstname=$firstname&lastname=$lastname&email=$email");
            exit();
        }
        else if(invalidEmail($email)){
            header("Location: register_home.php?error=invalidemail&firstname=$firstname&lastname=$lastname&user=$username");
            exit();
        }
        else if(invalidPwd($password1, $password2)){
            header("Location: register_home.php?error=invalidpass&firstname=$firstname&lastname=$lastname&user=$username&email=$email");
            exit();
        }
        else if(invalidPwdLen($password1)){
            header("Location: register_home.php?error=invalidpasslen&firstname=$firstname&lastname=$lastname&user=$username&email=$email");
            exit();
        }
        else if(userExists($username, $email)){
            header("Location: register_home.php?error=userexists&firstname=$firstname&lastname=$lastname");
        }
        else{
            createUser($firstname, $lastname, $email, $username, $password1);
            exit();
        }
    }
?>