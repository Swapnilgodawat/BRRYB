<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>buy_1</title>
  <link rel="stylesheet" href="styles/bootstrap.css" >
  <link rel="stylesheet" href="styles/bootstrap-theme.css">
  <link rel="stylesheet" href"styles/buy.css">
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
            <a class="navbar-brand" href="../BRRYB.phps">BRRYB</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a href="../BRRYB.php">Home</a></li>
              <li class="active"><a href="#top">Buy</a></li>
              <li><a href="rent.php">Rent</a></li>
              <li><a href="recycle.php">Recycle</a></li>
              <li class="dropdown">
                <a href="#top" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#top">Cart</a></li>
                  <li><a href="#top">My BRRYB cash</a></li>
                  <li><a href="#top">logout</a></li>
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
                <a class ="btn btn-primary "href="../form.html">Login or Sign-up</a>
              </form>
            </ul>
          </div>
        </div>
      </nav>

    </div>
  </div>
    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1><b>BUY ! </b></h1>
            <p>Start by deciding which of the most common Bicycle types makes sense for you—mountain, road, hybrid, or city/commuter. Next, factor in your cycling goals. Consider things like what kind of terrain you'll ride most, what distance you want to cover, and what you want to accomplish!</p>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Bicycles</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="hero.jpg" alt="">
                    <div class="caption">
                        <h3>Hero</h3>
                        <p>Ride a bicycle a day keeps doctor away</p>
                        <p>

                            <a href="buynow.php" class="btn btn-primary">Buy Now!</a> <a href="#top" class="btn btn-primary">More Info</a>
              <a class="btn btn-default">Price ₹30000</a>
            </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="firefox.jpg" alt="">
                    <div class="caption">
                        <h3>FireFox</h3>
                        <p>Burn fat,Not oil </p>
                        <p>
                            <a href="#top" class="btn btn-primary">Buy Now!</a> <a href="#top" class="btn btn-default">More Info</a>
              <a class="btn btn-default">Price ₹20000</a>
         </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="hercules.jpg" alt="">
                    <div class="caption">
                        <h3>Hercules</h3>
                        <p>speed is the real power</p>
                        <p>
                            <a href="#top" class="btn btn-primary">Buy Now!</a> <a href="#top" class="btn btn-default">More Info</a>
              <a class="btn btn-default">Price ₹45000</a>
            </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="avon.jpg" alt="">
                    <div class="caption">
                        <h3>Avon </h3>
                        <p> be safe ! Ride Safe</p>
                        <p>
                            <a href="#top" class="btn btn-primary">Buy Now!</a> <a href="#top" class="btn btn-default">More Info</a>
              <a class="btn btn-default">Price ₹90000</a>
            </p>
                    </div>
                </div>
            </div

     <p>
      <a href ="buy_2.php" target="_self" class="btn btn-primary btn-large">Find Next </a>
            </p>

        </div>
        <!-- /.row -->

        <hr>

        <!-- FOOTER -->
        <footer>
          <p class="pull-right"><a href="#top">Back to top</a></p>
          <p>© BRRYB 2017 Company, Inc. · <a href="#top">Privacy</a> · <a href="#top">Terms</a> A project by:<a href="#top">Nishad Kane</a> & <a href="https://www.google.co.in/search?q=tanuj+bohra&espv=2&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjc2r_zq63TAhVKu48KHdJACw4Q_AUIBygC&biw=1440&bih=826#imgrc=64YQFWh7DyqdwM:">Tanuj Bohra</a></p>
        </footer>

    </div>
    <!-- /.container -->
  <script src="scripts/jquery.js"></script>
  <script src="scripts/bootstrap.js"></script>
</body>
</html>
