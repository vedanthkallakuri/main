
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style> @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');</style>
    <link href="dashboard2.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>

    <header>
        <h1 class = "logo"><div class = "logo-white-letters">Pata</div><div class = "logo-blue-letters">sala</div></h1>
        <input type = "checkbox" id = "nav-toggle" class = "nav-toggle">
        <nav>
            <ul>
                <li><a href = "#">Dashboard</a></li>
                <li><a href = "#">Music</a></li>
                <li><a href = "#">Teachers</a></li>
                <li>
                    <div class = "nav-search-container">
                        <form method = "POST" action = "dashboard_home.php">
                            <input type = "text" placeholder = "Search your songs">
                            <label for = "nav-search" class = "nav-search-label"><span class="material-icons-outlined">search</span></label>
                            <input type= "submit" id = "nav-search">
                        </form>
                    </div>
                </li>
                <li><a href = "#">vedanth</a>
                    <ul>
                        <li><a href = "#">Profile<a></li>
                        <li><a href = "#">Info<a></li>
                        <li><a href = "logout.php">Logout<a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <label for = "nav-toggle" class = "nav-toggle-label">
            <span></span>
        </label>
    </header>
    
   
    <main>
        
    </main>
</body>
</html>