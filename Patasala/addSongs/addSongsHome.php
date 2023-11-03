<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href = "addSongsHome.css" rel = "stylesheet">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action = "addSongsHome.php">
        <input type = "text" name = "songName">
        <input type = "text" name = "songAuthor">
        <input type = "text" name = "songComposer">
        <input type = "text" name = "songRagam">
        <input type = "text" name = "songTalam">
        <input type = "text" name = "songMovie">
        <input type = "submit" name = "submit">
    </form>
</body>
</html>

<?php
    require_once "../db/Db_conn.php";
    if (isset($_POST["submit"])){
        $db = new DatabaseConn;
        $conn = $db->dbOpen();
    }
?>