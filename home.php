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

        <title>Dashbord</title>
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
                            <li class="nav-item">
                                <a class="nav-link" href="estimation.php">Estimation</a>
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
                <div class="col-9 col-md-9 col-sm-9 col-xs-9 table-column">
                    <table class="table table-hover">
                        <thead style="background-color: rgba(0,0,0,.03);">
                            <tr>
                                <th scope="col">Record ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Type</th>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price per unit</th>
                                <th scope="col">Total price</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $connection = new mysqli("localhost", "root", "@root", "users");
                                $GLOBALS["total_buy"] = $GLOBALS["total_sell"] = 0;
                            
                                $sql = 'SELECT * FROM record WHERE username="' . $_SESSION["username"] . '"';
                                $result = $connection->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo '<tr>';
                                        echo '<th scope="row">' . $row["record_id"] . '</th>';
                                        echo '<td>' . $row["date"] . '</td>';
                                        echo '<td>' . $row["type"] . '</td>';
                                        echo '<td>' . $row["product_name"] . '</td>';
                                        echo '<td>' . $row["quantity"] . '</td>';
                                        echo '<td>' . $row["price_per_unit"] . '</td>';
                                        if ($row["type"] == "Buy") {
                                            echo '<td style="color: red;"><strong>' . (-1) * ($row["total_price"]) . '</strong></td>';
                                            $GLOBALS["total_buy"] += $row["total_price"];
                                        } else {
                                            echo '<td style="color: green;"><strong>' . $row["total_price"] . '</strong></td>';
                                            $GLOBALS["total_sell"] += $row["total_price"];
                                        }
                                        echo '<td>' . $row["description"] . '</td>';
                                        echo '</tr>';
                                    }
                                }
                                else {
                                    echo '<tr>';
                                    echo '<th scope="row">0</th>';
                                    echo '<td>Null</td>';
                                    echo '<td>Null</td>';
                                    echo '<td>Null</td>';
                                    echo '<td>Null</td>';
                                    echo '<td>Null</td>';
                                    echo '<td>Null</td>';
                                    echo '<td>Null</td>';
                                    echo '</tr>';
                                }
                                $connection->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-3 col-md-3 col-sm-3 col-xs-3 card-column">
                    <div class="row">
                        <div class="col-12 col-md-12 col-sm-12 col-xs-12 action-panel-column">
                            <div class="card display-card">
                                <div class="card-header">
                                    <strong>Readings</strong>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" id="date"></li>
                                    <?php
                                        echo '<li class="list-group-item" style="color: red;"><strong style="color: black;">Total Buy:</strong><strong> ' . $GLOBALS["total_buy"] . '</strong></li>';
                                        echo '<li class="list-group-item" style="color: green;"><strong style="color: black;">Total Sell:</strong><strong> ' . ($GLOBALS["total_sell"]) . '</strong></li>';
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-sm-12 col-xs-12 action-panel-column">
                            <div class="card display-card action-card">
                                <div class="card-header">
                                    <strong>Actions</strong>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="addRecord.php">
                                        <button type="button" class="btn btn-success btn-action"><span data-toggle="tooltip" title="Add record"><img src="icons/plus-circle.svg" class="inverted-img"> Add</span></button>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="card display-card delete-record-card">
                                            <div class="card-header">
                                                <strong>Delete Record</strong>
                                            </div>
                                            <form action="BackEnd/deleteRecord.php" method="post">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroup-sizing-default">Record ID</span>
                                                            </div>
                                                            <input type="text" name="deleteField" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <button type="submit" name="delete" class="btn btn-danger btn-delete"><span data-toggle="tooltip" title="Delete record"><img src="icons/trash.svg" class="inverted-img"> Delete</span></button>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <button type="button" onclick="handleMargin();" class="btn btn-primary btn-action"><span data-toggle="tooltip" title="Refresh records"><img src="icons/refresh-cw.svg" class="inverted-img"></span> Refresh</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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
        <!-- local javascript file -->
        <script src="JS/script.js"></script>
    </body>

</html>
