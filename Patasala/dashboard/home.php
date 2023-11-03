<?php
    require_once("proc.php");
    $output = "<h1>Welcome ".getUser()."</h1>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="dash.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <title>Dashboard</title>
</head>
<body>

    <header>
        <nav>
            <ul class="nav_links">
                <li><a href="logout.php"><i class="material-icons" style="font-size: 48px; color: white;">account_circle</i></a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <?php echo $output; ?>
        
        
        
    </div>

</body>
</html>