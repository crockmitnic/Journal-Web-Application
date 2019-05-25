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

        <title>Add record - Journal</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-md navbar-light bg-light">
                    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item back-arrow-item">
                                <a class="nav-link link-to-home" href="home.php"><span data-toggle="tooltip" title="Home"><img src="icons/arrow-left-circle.svg" class="inverted-img home-icon"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="navbar-brand-customized" href="home.php">Journal</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-btn">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2"   aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <?php
                        $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                        if (strpos($fullURL, "msg=success") == true) {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Congratulations!</strong> Record entered successfully!
                                    <button type="button" onclick="handleMargin();" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <style type="text/css">
                                    .addRecord-card {
                                        margin-top: 0%;
                                    }
                                </style>';
                        } else if (strpos($fullURL, "msg=error") == true) {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Oops!</strong> You might\'ve missed some value(s) to fill!
                                    <button type="button" onclick="handleMargin();" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <style type="text/css">
                                    .addRecord-card {
                                        margin-top: 0%;
                                    }
                                </style>';
                        }
                    ?>
                    <div class="card addRecord-card">
                        <div class="display-4 addRecord-title">Add Record</div>
                        <div class="card-body">
                            <form action="BackEnd/insertRecord.php" method="post">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Type of record</span>
                                    </div>
                                    <div class="card">
                                        <div class="card-body radio-btn-card">
                                            <div class="radio-btn">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="type_of_record" class="custom-control-input" checked="checked" value="Buy">
                                                    <label class="custom-control-label" for="customRadioInline1">Buy</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="type_of_record" class="custom-control-input" value="Sell">
                                                    <label class="custom-control-label" for="customRadioInline2">Sell</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                                    </div>
                                    <input type="date" name="date" class="form-control field" aria-label="Sizing example input"   aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Product Name</span>
                                    </div>
                                    <input type="text" name="product_name" class="form-control field" aria-label="Sizing example input"   aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Quantity</span>
                                    </div>
                                    <input type="text" name="quantity" class="form-control field" aria-label="Sizing example input"   aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Price per unit</span>
                                    </div>
                                    <input type="text" name="price_per_unit" class="form-control field" aria-label="Sizing example input"   aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                                    </div>
                                    <input type="text" name="description" class="form-control field" aria-label="Sizing example input"   aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="save-btn" id="success-msg">
                                    <button type="submit" name="save_record" class="btn btn-success"><span data-toggle="tooltip" title="Save record"><img src="icons/save.svg" class="inverted-img"></span></button>
                                    <button type="reset" onclick="eraseContent();" name="clear_record" class="btn btn-danger"><span data-toggle="tooltip" title="Clear record"><img src="icons/trash.svg" class="inverted-img"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
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
        <!-- local javascript file -->
        <script src="JS/script.js"></script>
        <!-- jQuary for loading boostrap tooltip -->
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });
        </script>
    </body>

</html>
