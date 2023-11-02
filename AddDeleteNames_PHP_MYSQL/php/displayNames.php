<?php
    require_once '../classes/Db_conn.php';    

    $db = new DatabaseConn();
    $conn = $db->dbOpen();

    $sql = "SELECT * FROM names";

    $STH = $conn->query($sql);

    $namelist = "";
   
    while($row = $STH->fetch()) {
        $dbName = $row['name'];

        $namelist .= "<p>$dbName</p>";
    }




    $response = (object)[
        'masterstatus' => 'success',
        'names' => $namelist
        ];
        echo json_encode($response);
    
    


    
?>

