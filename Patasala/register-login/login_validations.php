<?php
    require_once 'functions.php';
    
    if(isset($_POST["submit"])){
        $username = $_POST["username"];      
        $password = $_POST["password"];
        
        if(emptyLoginFields($username, $password)){
            header("Location: login_home.php?error=emptyfields&username=$username"); 
            exit();
        }
        else{
            loginUser($username, $password);
            
        }
    }
?>