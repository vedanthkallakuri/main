<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Display Notes</h1>
        <a href="addNotes.php">Add Notes</a>

        <form method="POST" action="displayNotes.php">
            <div class="form-group">
                <label for="begDate">Beginning Date</label>
                <input type="datetime-local" class="form-control" id="begDate" name="begDate">
            </div>
            <div class="form-group">
                <label for="endDate">End Date</label>
                <input type="datetime-local" class="form-control" id="endDate" name="endDate">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Get Notes">
        </form>
        <br>
        
        <?php require_once "displayNotesProc.php"; ?>

    </div>
</body>
</html>