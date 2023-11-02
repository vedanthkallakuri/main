<?php

    require_once '../classes/Db_conn.php';    

    $db = new DatabaseConn();
    $conn = $db->dbOpen();

    $sql = "TRUNCATE TABLE names";
    
    if ($conn->query($sql) == TRUE) {
        $response = (object)[
            'masterstatus' => 'success',
            'msg' => 'All data values were deleted'
        ];
        echo json_encode($response);
    }
    else{
        $response = (object)[
            'masterstatus' => 'error',
            'msg'=> 'There was a problem removing table records'
        ];
        echo json_encode($response);
    }
?>