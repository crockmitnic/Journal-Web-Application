<?php
session_start();
?>

<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Bootstrap-4/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="Bootstrap-4/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">

        <title>Estimation</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-md navbar-light bg-light">
                    <a class="navbar-brand" href="home.php">Journal</a>
                    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="statistics.php">Statistics</a>
                            </li>
                            <li class="nav-item selected-nav-item">
                                <a class="nav-link activated-link" href="estimation.php">Estimation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contactUs.php">ContactUs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutUs.php">AboutUs</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-btn">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2"   aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">
                                    <div class="border">
                                        <?php echo $_SESSION["username"]; ?>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link logout-link" href="index.php">
                                    <span data-toggle="tooltip" title="Sign out"><img src="icons/log-out.svg" class="inverted-img"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <canvas id="mycanvas3" class="graph-canvas"></canvas>
                </div>
                <div class="col-2"></div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="Bootstrap-4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="JS/jquery.min.js"></script>
        <script type="text/javascript" src="JS/Chart.min.js"></script>
        <script type="text/javascript" src="JS/graph_script.js"></script>
        <!-- local javascript file -->
        <script src="JS/script.js"></script>
    </body>

</html>