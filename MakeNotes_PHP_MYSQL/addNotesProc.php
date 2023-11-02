<?php

require_once "Db_conn.php";
require_once "functions.php";

    if(isset($_POST["submit"])){
        $dateTime = $_POST["dateTime"];
        $note = $_POST["note"]; 
        $db = new DatabaseConn;
        $conn = $db->dbOpen();

        if(isempty($dateTime, $note)){
            echo "Please fill in all fields";
        }
        else {
            addDb($dateTime, $note, $conn);
            echo "<a href='displayNotes.php'>Display notes</a>";
        }

    }


?>