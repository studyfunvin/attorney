<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interactive Attorney Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light|Vast+Shadow&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="site-logo" href="index.php"><img src="img/logo1.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">About US</a>
                        <a class="nav-item nav-link" href="#">People</a>
                        <a class="nav-item nav-link" href="#">Area of Practices</a>
                        <a class="nav-item nav-link" href="#">FAQ</a>
                        <a class="nav-item nav-link" href="#">Contact Us</a>
                    </div>
            </div>
        </div>
        </nav>
        </header>
        
        
        <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide2.jpg" style="width:100%; height: 700px; border: 2px solid black;">
                <div class="carousel-caption">
                    <h2 class="display-2">Your Case Is Our Priority</h1>
                    <h3>We have the knowledge and experience to meet and exceed your expectations and offer a variety of services customized to fit your specific needs. </h3>
                    
                    <a class="btn btn-primary btn-lg" href="contact.php" role="button">Contact</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slide1.jpg" style="width:100%; height: 700px; border: 2px solid black;">
            </div>
            <div class="carousel-item">
                <img src="img/slide3.jpg" style="width:100%; height: 700px; border: 2px solid black;">
            </div>
        </div>
        </div>
        
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h3 class="display-4">Why Choose Us</h1>
                </div>
                <hr>
                <div class="col-lg-6" style="float:none;margin:auto;>
                    <p class="lead">We provide practical solutions with the aim of minimising acrimonious litigation to resolve disputes in the best interests of the children and for the protection of family obligations.</p>
                </div>
            </div>
        </div>


        <footer>
            <div class="container-fluid padding">
                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="img/logo.png">
                        <hr class="light">
                        <a href="#">About Us</a>
                        <br>
                        <a href="#">People</a>
                        <br>
                        <a href="#">Practice Area</a>
                        <br>
                        <a href="#">Faq</a>
                    </div>
                    <div class="col-md-4">
                        <hr class="light">
                        <h5>Contact Us</h5>
                        <hr class="light">
                        <p>012-1234567</p>
                        <p>123@gmail.com</p>
                        <p>14 Jalan abc, Taman abc</p>
                        <p>Bukit Beruang 70000, Malacca</p>
                    </div>
                    <div class="col-12">
                        <hr class="light">
                        <h5>&copy; 2019 Interactive Attorney Website</h5>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>