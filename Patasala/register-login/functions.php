<?php
    require_once ('../db/Db_conn.php');

    function emptyRegisterFields($username, $email, $password1, $password2){
        if(empty($username) || empty($email) || empty($password1) || empty($password2)){
            return true;
            exit();
        }else{
            return false;
        }

    }
    
    function userExists($username, $email){
        $DBH = new DatabaseConn;                                                        
        $conn = $DBH->dbOpen();
        $sql = "SELECT user_username FROM userData WHERE user_username = :userName OR user_email = :userEmail"; 
        $stmt = $conn->prepare($sql);                                                
        $stmt->bindValue(':userName', $username);
        $stmt->bindValue(':userEmail', $email);                                                                    
        $stmt->execute();                                                        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if(isset($row["user_username"]) || isset($row["user_email"])){
            return true;
            exit();
        }else{
            return false;
        }
    }

    function invalidUser($username){
        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            return true;
        }
        else{
            return false;
        }
        
    }

    function invalidEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
            exit();
        }else{
            return false;
        }
    }

    function invalidPwd($password1, $password2){
        if($password1!=$password2){
            return true;
        }else{
            return false;
        }
    }

    function invalidPwdLen($password){
        if(strlen($password)<8){
            return true;
            exit();
        }else{
            return false;
        }
    }

    function createUser($firstname, $lastname, $email, $username, $password){
        $db = new DatabaseConn();
        $conn = $db->dbOpen();

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO userData (user_firstname, user_lastname, user_email, user_username, user_password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $firstname);
        $stmt->bindParam(2, $lastname);
        $stmt->bindParam(3, $email);
        $stmt->bindParam(4, $username);
        $stmt->bindParam(5, $hashedPwd);
        //$stmt->execute();
        if(!$stmt->execute()){
            header("Location: register_home.php?error=stmtfailed");
            exit();
        }
        header("Location: register_home.php?error=none");
        $conn = null;
    }
          
    function emptyLoginFields($username, $password){
        if(empty($username) || empty($password)){
            return true;
            exit();
        }else{
            return false;
        }
    }

    function loginUser($username, $password){
        $db = new DatabaseConn;
        $conn = $db->dbOpen();
        
        $userExists = userExists($username, $username);
        
        if($userExists===false){
            header("Location: login_home.php?error=invaliduser");
            exit();
        }
        else{
            $sql = "SELECT user_password FROM userData WHERE user_username = :userName OR user_email = :userEmail";
            $stmt = $conn->prepare($sql);                                                
            $stmt->bindValue(':userName', $username);
            $stmt->bindValue(':userEmail', $username);
            $stmt->execute();                                                        
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $hashedPwd = $row["user_password"];

            if(!password_verify($password, $hashedPwd)){
                header("Location: login_home.php?error=invalidpassword");
                exit();
            }
            else{
                session_start();
                $_SESSION["username"] = $username;
                $_SESSION["access"] = "accessGranted";
                header("Location: ../dashboard/dashboard_home.php?error=none");
                exit();
            }
        }
        
    }

    function getUser($username){
        $db = new DatabaseConn;
        $conn = $db->dbOpen();

        $sql = "SELECT user_firstname FROM userData WHERE user_username = :userName OR user_email = :userEmail";
        $stmt = $conn->prepare($sql);                                                
        $stmt->bindValue(':userName', $username);
        $stmt->bindValue(':userEmail', $username);
        $stmt->execute();                                                        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $row["user_firstname"];
    }

?>
