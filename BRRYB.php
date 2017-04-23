<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>BRRYB</title>
  <link rel="stylesheet" href="styles/bootstrap.css" >
  <link rel="stylesheet" href="styles/bootstrap-theme.css">
  <link rel="stylesheet" href="styles/carousel.css">
</head>
<body>
  <div class="navbar-wrapper">
    <div class="container">

      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#top">BRRYB</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#top">Home</a></li>
              <li><a href="project/buy_1.php">Buy</a></li>
              <li><a href="project/rent.php">Rent</a></li>
              <li><a href="project/recycle.php">Recycle</a></li>
              <li class="dropdown">
                <a href="#top" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#top">Cart</a></li>
                  <li><a href="#top">My BRRYB cash</a></li>
                  <?php
                    if  (isset($_SESSION['email'])){
                      echo"<form action='project/signout.php'>
                      <li class='dropdown-header'><a href='project/signout.php'>logout</a></li>
                    </form>";
                    }
                      else{
                        echo"
                        <li><a href='form.php'>Login</a></li>
                      </form>";

                      }

                   ?>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Handcrafted for you</li>
                  <li><a href="#top">Suggested Bicycles</a></li>
                  <li><a href="#top">Deal of the day</a></li>
                </ul>
              </li>
              <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
                <a class ="btn btn-primary "href="form.php">Login or Sign-up</a>
              </form>
            </ul>
          </div>
        </div>
      </nav>

    </div>
  </div>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item">
        <img class="first-slide" src="images/buy_1.jpg" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Buy bicycles that you love</h1>
            <p>Own the cycle that you want at the best price</p>
            <p><a class="btn btn-lg btn-primary" href="form.php" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="item active">
        <img class="second-slide" src="images/buy_2.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Rent bicycles for the experience </h1>
            <p>Try the cycle out for days with limited deposit with both pick-up and drop facility</p>
            <p><a class="btn btn-lg btn-primary" href="project/rent.php" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="third-slide" src="images/buy_3.jpg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Recycle more for good measure.</h1>
            <p>Give your bicycle a new life by recycling it and also earn BRRYB cash</p>
            <p><a class="btn btn-lg btn-primary" href="project/recycle.php#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#topmyCarousel" role="button" data-slide="prev">
    <span  aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#topmyCarousel" role="button" data-slide="next">
      <span  aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- /.carousel -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="img-circle" src="images/circle_1.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2>Buy</h2>
        <p>Buy cycles at the best price available in the market.That is not just a promise it's our garranty </p>
        <p><a class="btn btn-default" href="project/buy_1.php" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="images/circle_2.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2>Rent</h2>
        <p>Rent cycles at prices that are literally unbelievable with services like deliver at your doorstep and pick it up yourself.</p>
        <p><a class="btn btn-default" href="project/rent.php" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="images/circle_3.jpg" alt="Generic placeholder image" width="140" height="140">
        <h2>Recycle</h2>
        <p>With our recycle plans get upto 10000 BBRYB cash and use it buy new bicycles for you.</p>
        <p><a class="btn btn-default" href="project/recycle.php" role="button">View details »</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">We Save Environment <span class="text-muted">Two wheels at a time.</span></h2>
        <p class="lead">Recycling is a key component of modern waste reduction and is the third component of the "Reduce, Reuse, and Recycle" waste hierarchy.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="images/carbon_1.jpg">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 col-md-push-5">
        <h2 class="featurette-heading">We are everywhere <span class="text-muted">literally.</span></h2>
        <p class="lead">Our centers are located all over Mumbai and we are soon expanding to the entire Maharashtra and then the entire World.</p>
      </div>
      <div class="col-md-5 col-md-pull-7">
        <iframe
          width="450"
          height="500"
          frameborder="0" style="border:0"
          src="https://www.google.com/maps/embed/v1/search?key=AIzaSyC6lDSQ_8UxYrPWA10owhaVwb6GfTIusM4
            &q=cycle+stores+in+Mumbai" allowfullscreen>
        </iframe>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">This is how we do it   <span class="text-muted">Checkmate.</span></h2>
        <p class="By our six layer process we reduce your carbon footprint by 42.5% and believe us that surely does make a hell lot of difference"</p>
      </div>
      <div class="col-md-5">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="500" height="550" src="https://www.youtube.com/embed/g8IVI_N0e_0" frameborder="0" allowfullscreen></iframe>
  </div>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
    <footer>
      <p class="pull-right"><a href="#top">Back to top</a></p>
      <p>© BRRYB 2017 Company, Inc. · <a href="#top">Privacy</a> · <a href="#top">Terms</a> A project by:<a href="#top">Nishad Kane</a> & <a href="https://www.google.co.in/search?q=tanuj+bohra&espv=2&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjc2r_zq63TAhVKu48KHdJACw4Q_AUIBygC&biw=1440&bih=826#imgrc=64YQFWh7DyqdwM:">Tanuj Bohra</a></p>
    </footer>

  </div><!-- /.container -->
<body>
  <script src="scripts/jquery.js"></script>
  <script src="scripts/bootstrap.js"></script>
</body>
</html>
