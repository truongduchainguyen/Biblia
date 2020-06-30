<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblia Bookstore</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./Biblia.css">
    <link rel="stylesheet" href="./fixed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />

<script type="text/javascript">
    function validate() {
        var username = document.getElementById('username');
        var password = document.getElementById('password');

        if(username.value.trim() == "")
        {
            alert("Please fill in your username");
            return false;
        }
        else if(password.value.trim() == "")
        {
            alert("Please fill in your password");
            return false;
        }
        else if(password.value.trim().length < 5)
        {
            alert("Your password is too short");
            return false;
        }
    }
</script>

<body data-spy="scroll" data-target="#navbarResponsive">

<!--Start Home Section -->
<div id="home">

<!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"><img src="./logo_epsig_white_6.png"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Fiction
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Crime</a>
                        <a class="dropdown-item" href="#">Science Fiction</a>
                        <a class="dropdown-item" href="#">Romance</a>
                        <a class="dropdown-item" href="#">Horror</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Non-Fiction
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Philosophy</a>
                        <a class="dropdown-item" href="#">History</a>
                        <a class="dropdown-item" href="#">Encyclopedia</a>
                        <a class="dropdown-item" href="#">Guides and Manuals</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="cart.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cart
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <form id="login-form">
                            <div>
                                <label>Username</label>
                                <input type="text" placeholder="Username" required>
                            </div>
                            <div>
                                <label>Password</label>
                                <input type="password" placeholder="Password" required>
                            </div>
                            <div>
                                <input type="submit" value="Log In">
                            </div>
                            <div>
                                <a href="#">Lost your Password</a>
                            </div>
                        </form>
                    </div> -->
                    <div class="dropdown-menu">
                        <form class="px-4 py-3" onsubmit="return validate()" action="Biblia.html">
                          <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" required>
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">
                              Remember me
                            </label>
                          </div>
                          <button type="submit" class="btn btn-dark" onclick="validate()">Sign in</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">New around here? Sign up</a>
                        <a class="dropdown-item" href="#">Forgot password?</a>
                      </div>
                </li>

                <li>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="form-inline mr-auto">
                          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                          <button class="btn btn-light btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Search</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

<!-- End Navigation -->

<!-- Start Landing Page Section-->
    <div class="landing">
        <div class="home-wrap">
            <div class="home-inner"></div>
        </div>
    </div>
    <div class="caption text-center">
        <h1>Welcome to Biblia</h1>
        <h3>World for Bookaholics</h3>
    </div>
<!-- Ending Landing Page Section-->

</div>
<!--End Home Section-->

<!-- <div id="introduction" class="offset">
    <div class="col-12 narrow text-center">
        <h1>Introduction</h1>
        <p class="lead">A world for a person seeking for knowledge, a person with a great desire for success and a person who is a bookaholic </p>
    </div>
</div> -->

<!--Start fiction Section -->
<div id="fiction" class="offset">
    <div class="carousel">
    <div class="narrow text-center">

        <div class="col-12">
            <h3 class="heading">Fiction Recommendations</h3>
            <div class="heading-underline"></div>
        </div>

        <div class="row text-center">
            <div class="col-md-3">
                <div class="fiction">
                    <i class="fab fa-jedi-order fa-4x" data-fa-transform=" up-5"></i>
                    <h3>Book 00</h3>
                    <p>Content 00</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="fiction">
                    <i class="fab fa-galactic-republic fa-4x" data-fa-transform="shrink-1 up-5"></i>
                    <h3>Book 01</h3>
                    <p>Content 01</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="fiction">
                    <i class="fab fa-old-republic fa-4x" data-fa-transform="shrink-1 up-5"></i>
                    <h3>Book 02</h3>
                    <p>Content 02</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="fiction">
                    <i class="fab fa-old-republic fa-4x" data-fa-transform="shrink-1 up-5"></i>
                    <h3>Book 03</h3>
                    <p>Content 03</p>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>
<!--End fiction Section-->

<!--Start Resource Section -->
<div id="nonfiction" class="offset">
    <div class="carousel">
    <div class="row dark text-center">
        <div class="col-12">
            <h3 class="heading">Non-Fiction Recommendations</h3>
            <div class="heading-underline"></div>
        </div>

        <div class="col-md-3">
            <h3>Book 0</h3>
            <div class="fiction">
                <i class="fas fa-book fa-3x"></i>
            </div>
            <p class="lead">Content 0</p>
        </div>

        <div class="col-md-3">
            <h3>Book 1</h3>
            <div class="fiction">
                <i class="fas fa-language fa-3x"></i>
            </div>
            <p class="lead">Content 1</p>
        </div>

        <div class="col-md-3">
            <h3>Book 2</h3>
            <div class="fiction">
                <i class="fas fa-dumbbell fa-3x"></i>
            </div>
            <p class="lead">Content 2</p>
        </div>

        <div class="col-md-3">
            <h3>Book 3</h3>
            <div class="fiction">
                <i class="fas fa-dumbbell fa-3x"></i>
            </div>
            <p class="lead">Content 3</p>
        </div>

        <div class="fixed-wrap">
            <div class="fixed"></div>
        </div>
    </div>

</div>
<!--End Resoure Section-->

<!--Start Contact Section -->
<div id="contact" class="offset">
    <footer>
        <div class="row justify-content-center">
            <div class="col-md-5 text-center">
                <img src="./logo_epsig_white_1.png">
                <p>For more information, please contact us</p>
                <strong>Contact Info</strong>
                <p>0937968056<br>truongduchainguyen@gmail.com</p>
                <a href="https://www.facebook.com/nguyen.hai.796774" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/inkeister/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/truongduchainguyen" target="_blank"><i class="fab fa-github"></i></a>
            </div>

            <hr class="socket">
            &copy; BIBLIA.
        </div>
    </footer>
</div>
<!--End contact Section-->
<!--Script Source-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
<!--End of Script Source-->
</body>
</html>
