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

        <title>About Us</title>
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
                            <li class="nav-item selected-nav-item">
                                <a class="nav-link activated-link" href="aboutUs.php">AboutUs</a>
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
            <div class="row aboutUs-title">
                <div class="col-12">
                    <div class="display-4">About Us</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="team-div">
                        <div class="card team-card">
                            <img class="team-img" src="pictures/person-1.png">
                            <div class="display-4 team-member-name"><strong>Person-1</strong></div>
                            <p class="team-member-skill"><strong>Lead Designer</strong></p>
                            <p class="team-member-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="team-div">
                        <div class="card team-card">
                            <img class="team-img" src="pictures/person-2.png">
                            <div class="display-4 team-member-name"><strong>Person-2</strong></div>
                            <p class="team-member-skill"><strong>Lead Developer</strong></p>
                            <p class="team-member-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="team-div">
                        <div class="card team-card">
                            <img class="team-img" src="pictures/person-3.jpg">
                            <div class="display-4 team-member-name"><strong>Person-3</strong></div>
                            <p class="team-member-skill"><strong>Lead Marketer</strong></p>
                            <p class="team-member-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="padding-left: 0%; padding-right: 0%;">
                    <footer class="page-footer font-small unique-color-dark">
                        <div style="background-color: #800000; color: #fff;">
                            <div class="container">
                                <div class="row py-4 d-flex align-items-center">
                                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                                        <h6 class="mb-0">Get connected with us on social networks!</h6>
                                    </div>
                                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                                        <!-- Facebook -->
                                        <a class="fb-ic">
                                            <i class="fab fa-facebook-f white-text mr-4"><img class="inverted-img" src="icons/facebook.svg"></i>
                                        </a>
                                        <!-- Twitter -->
                                        <a class="tw-ic">
                                            <i class="fab fa-twitter white-text mr-4"><img class="inverted-img" src="icons/twitter.svg"></i>
                                        </a>
                                        <!-- Google +-->
                                        <a class="github-ic">
                                            <i class="fab fa-github white-text mr-4"><img class="inverted-img" src="icons/github.svg"></i>
                                        </a>
                                        <!--Linkedin -->
                                        <a class="li-ic">
                                            <i class="fab fa-linkedin-in white-text mr-4"><img class="inverted-img" src="icons/linkedin.svg"></i>
                                        </a>
                                        <!--Instagram-->
                                        <a class="ins-ic">
                                            <i class="fab fa-instagram white-text"><img class="inverted-img" src="icons/instagram.svg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container text-center text-md-left mt-5">
                            <div class="row mt-3">
                                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                    <h6 class="text-uppercase font-weight-bold">Company name</h6>
                                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipisicing elit.</p>
                                </div>
                                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                    <p>
                                        <a href="#!">Product1</a>
                                    </p>
                                    <p>
                                        <a href="#!">Product2</a>
                                    </p>
                                    <p>
                                        <a href="#!">Product3</a>
                                    </p>
                                    <p>
                                        <a href="#!">Product4</a>
                                    </p>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                    <p>
                                        <a href="#!">Your Account</a>
                                    </p>
                                    <p>
                                        <a href="#!">Become an Affiliate</a>
                                    </p>
                                    <p>
                                        <a href="#!">Shipping Rates</a>
                                    </p>
                                    <p>
                                        <a href="#!">Help</a>
                                    </p>
                                </div>
                                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                    <p>
                                        <i class="fas fa-home mr-3"><img src="icons/home.svg"></i> Gauridad, RJ-360006, India</p>
                                    <p>
                                        <i class="fas fa-envelope mr-3"><img src="icons/mail.svg"></i> info@example.com</p>
                                    <p>
                                        <i class="fas fa-phone mr-3"><img src="icons/phone.svg"></i> + 01 234 567 88</p>
                                    <p>
                                        <i class="fas fa-print mr-3"><img src="icons/phone.svg"></i> + 01 234 567 89</p>
                                </div>
                            </div>
                        </div>
                    </footer>
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
