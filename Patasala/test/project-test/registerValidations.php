<?php
    require_once('registerDataProc.php');

    function validate(){
        if(isset($_POST["submit"])){
            if(checkUsernameExists()==1){
                if(checkPasswordLen()==1){
                    if(checkPasswordMatch()==1){
                        userPassToDb();
                        header("Location: ../login/loginHome.php");
                    }
                    else{
                        return "your passwords don't match";
                    }
                }
                else{
                    return "your password needs to be at least 8 characters long";
                }
            }
            else {
                return "Username is taken. Please enter a new username";
            }
        }
    }
    


?>