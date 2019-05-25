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

        <title>Journal</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">                
                <div class="col-6 heading-index">
                    <div class="display-4 heading-text heading-4">Journal</div>
                </div>
                <div class="col-6 heading-index">
                    <div class="display-5 heading-text description-text">A sophisticated way to keep eye on daily expenses!</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 signup-column">

                    <?php
                        $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                        if (strpos($fullURL, "msg=error") == true) {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Oops!</strong> Invalid username or password!
                                    <button type="button" onclick="handleMargin();" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
                        }
                    ?>

                    <div class="card signup-card">
                        <div class="card-body">
                            <div class="display-5 signup-title">Sign Up</div>
                            <form method="POST" action="BackEnd/reg.php">
                                <div class="signin-input">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" id="exampleInputUsername"
                                            placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirmPassword" class="form-control" id="exampleInputPassword"
                                            placeholder="Confirm password">
                                    </div>
                                    <div class="signin-btn" id="success-msg">
                                        <button type="submit" name="signup" class="btn btn-primary"><img src="icons/key.svg" class="inverted-img"></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 signin-column">

                    <?php
                        $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                        if (strpos($fullURL, "msg=error") == true) {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Oops!</strong> Invalid username or password!
                                    <button type="button" onclick="handleMargin();" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
                        }
                    ?>

                    <div class="card signin-card">
                        <div class="card-body">
                            <div class="display-5 signin-title">Sign in</div>
                            <form method="POST" action="BackEnd/validate.php">
                                <div class="signin-input">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" id="exampleInputUsername"
                                            placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword"
                                            placeholder="Password">
                                    </div>
                                    <div class="signin-btn" id="success-msg">
                                        <button type="submit" name="signin" class="btn btn-primary"><img src="icons/log-in.svg" class="inverted-img"></button>
                                    </div>
                                </div>
                            </form>
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
