<?php
    require_once "../classes/Db_conn.php";

    $db = new DatabaseConn;
    $conn = $db->dbOpen();

    function getUser(){
        session_start();
        return $_SESSION["username"];
    }
?>