<?php
session_start();
include "./dbconfig.php";

if(isset($_GET['logout'])) {
    session_destroy();
    header("Location:./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link href="./assets/external.css" rel="stylesheet" type="text/css" />
    <style> 
        .card {
            position: relative;
        }
        #audio-controller {
            position: absolute;
            top:17.5vw;
            width: 
            background-color:transparent;
        }  
        #audio-controller::-webkit-media-controls {
            background-color: transparent;
        }
        #audio-controller::-webkit-media-controls-panel {
            background-color:transparent;
        }
        #audio-controller::-webkit-media-controls-enclosure {
            background-color:#ffffffa6;

        }

    </style>
</head>
<body>
    
    <header>
        <a href="./legal/privacy.html" target="_blank">Privacy Policy</a>
        <a href="./legal/tnc.html" target="_blank">Terms and Conditions</a>

        <?php if(!isset($_SESSION['username'])) { ?>
        <div id="dropdown">
            <button>LOGIN</button>
            <div id="dropdown-content">
                <a href="./auth/login.php">Login into existing account</a>
                <a href="./auth/register.php">Create a new account</a>
            </div>
        </div>

        <?php } else { ?>

        <div id="dropdown">
            <button><?php echo $_SESSION['username'] ?></button>
            <div id="dropdown-content">
                <a href="./auth/changepwd.php">Change account password</a>
                <a href="./index.php?logout=true">Logout</a>
            </div>
        </div>

        <?php } ?>


    </header>

    <section id="branding">
        <div class="left-aligned-container">
            <img src="./assets/musichub-logo.gif" alt="Music Hub" height="150px" />
            <div id="company-brand">
                <h1>MUSIC HUB</h1>
                <p>------------------------------------------------<br />One stop shop for all your musical needs</p>
            </div>
        </div>
        <div class="right-aligned-container">
            <form id="search-form" method="get" action="search.php">
                <input type="search" placeholder="Search for songs, artists, playlists, etc..." id="search-input" name="query" />
                <button type="submit" id="search-btn"><i class="bi bi-search"></i></button>
            </form>
            <button type="button" id="menu-open" onclick="document.getElementById('menu').style.display = 'block';document.getElementById('menu-open').style.display = 'none';document.getElementById('menu-close').style.display = 'block'"><i class="bi bi-list"></i></button>
            <button type="button" id="menu-close" onclick="document.getElementById('menu').style.display = 'none';document.getElementById('menu-close').style.display = 'none';document.getElementById('menu-open').style.display = 'block'"><i class="bi bi-x-lg"></i></button>
        </div>
    </section>

    <nav id="menu">
        <li><a href="./index.html">Home</a></li>
        <li><a href="./hits.html">Top Hits</a></li>
        <li><a href="./recent.html">Recently Added</a></li>
        <li><a href="./favs.html">Favourites</a></li>
        <li><a href="./playlists.html">Playlists</a></li>
        <li><a href="./about.html">About Us</a></li>
    </nav>

    <main>
        <div class="m-5 row row-cols-2 row-cols-md-4 g-4">
            
            <?php
                $sql_query = "SELECT * from music ORDER BY name;";
                $result = mysqli_query($conn,$sql_query);
                while($rows = mysqli_fetch_array($result)) {
            ?>

            <div class="col">
                <div class="card h-100">
                        <img src="./assets/musicimg/<?php echo $rows['image'] ?>" class="card-img-top" alt="...">
                        <audio id="audio-controller" controls>
                            <source src="./assets/music/<?php echo $rows['link'] ?>" />
                        </audio>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $rows['name'] ?></h5>
                        <p class="card-text"><?php echo $rows['singer'] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Views:<?php echo $rows['views'] ?></small>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </main>
    <footer></footer>
</body>
</html>