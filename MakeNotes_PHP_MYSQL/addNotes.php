<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Add Note</h1>
        <?php require_once "addNotesProc.php";?>
        <form method="POST" action="addNotes.php">
            <div class="form-group">
                <label for="dateTime">Data and Time</label>
                <input type="datetime-local" class="form-control" id="dateTime" name="dateTime">
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <textarea class="form-control" id="note" name="note" rows="3"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Add Note">
        </form>

    </div>
</body>
</html>