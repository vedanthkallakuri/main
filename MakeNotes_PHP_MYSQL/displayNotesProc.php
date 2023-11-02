<?php

require_once "Db_conn.php";
require_once "functions.php";

if(isset($_POST["submit"])){
    $begDate = $_POST["begDate"];
    $endDate = $_POST["endDate"];
    $db = new DatabaseConn;
    $conn = $db->dbOpen();

    if(isempty($begDate, $endDate)){
        echo "Please fill in all fields";
    }
    else{
        $tableValues = filterDates($begDate, $endDate, $conn);
        echo $tableValues;
    }

}






?>