<?php

    require_once '../classes/Db_conn.php';

    function checkUsernameExists(){
        $DBH = new DatabaseConn;
        $conn = $DBH->dbOpen();
        

        $userName = $_POST["username"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];

        $sql = "SELECT user_username FROM user_data WHERE user_username = :userName";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':userName', $userName);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        
        if(empty($row)){
            return 1;
        }
        else{
            return 0;
        }
          
    }
    
    function checkPasswordLen(){
        $userName = $_POST["username"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];

        if(strlen($password1)>7){
            return 1;
        }
        else{
            return 0;
        }
    }

    function checkPasswordMatch(){
        $userName = $_POST["username"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];

        if($password1==$password2){
            return 1;
        }
        else{
            return 0;
        }
    }

    function userPassToDb() {
        
        $db = new DatabaseConn();
        $conn = $db->dbOpen();

        $stmt = $conn->prepare("INSERT INTO user_data (user_username, user_password) VALUES (?, ?)");
        //$stmt->bind_param("ss", $userName, $password1);
        $userName = $_POST["username"];
        $password1 = $_POST["password1"];

        //$sql = "INSERT INTO user_data (user_username, user_password) VALUES (?, ?)";
        //$stmt = $conn->$sql;
        $stmt->bindParam(1, $userName);
        $stmt->bindParam(2, $password1);
        $stmt->execute();

        
        
        //$stmt->close();
        //$db->close();
    }

    function getUsername(){
        $userName = $_POST["username"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];

        return $userName;

    }
    
    function errorsToDisplay(){
        
        $checkUserExists = "Username is taken. Please enter a new username";
        $checkPasswordLen = "Password has to be at least 8 characters long. Try again.";
        $checkPasswordMatch = "Passwords don't match";
    
    }
    
    



?>