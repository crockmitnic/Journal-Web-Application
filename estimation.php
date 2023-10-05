<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Estimation</title>
    <link rel="stylesheet" href="Bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand" href="home.php">Journal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="statistics.php">Statistics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="estimation.php">Estimation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php">About Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link">
                            <div class="border">
                                <?php echo $_SESSION["username"]; ?>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link logout-link" href="index.php" data-toggle="tooltip" title="Sign out">
                            <img src="icons/log-out.svg" class="inverted-img" alt="Sign out">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <canvas id="mycanvas3" class="graph-canvas"></canvas>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+J7Knujsl5/z5z4Oz3DGTs5f2p5zz51z5zF5O5Lr5+5z5m5l5m5n5l5O5O5N5m5n5m5N5M5e5f5O5e5M5u5M5N5E5M5N5E5N5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5E5>
