<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>buynow</title>
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
              <li ><a href="rent.php">Rent</a></li>
              <li><a href="recycle.php">Recycle</a></li>
              <li class="dropdown">
                <a href="#top" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#top">Cart</a></li>
                  <li><a href="#top">My BRRYB cash</a></li>
                  <li><a href="signout.php">logout</a></li>
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

          <div class="row">

              <div class="col-md-3">
                  <p class="lead">Buying Options</p>
                  <div class="list-group">
                      <a href="checkout.php" class="list-group-item active">Buy Now</a>
                  </div>
              </div>

              <div class="col-md-9">

                  <div class="thumbnail">
                      <img class="img-responsive" src="buynow.jpg" alt="">
                      <div class="caption-full">
                          <h4 class="pull-right">Rs-30000</h4>
                          <h4><a href="#">Hero Cycle</a>
                          </h4>

                      </div>

                  </div>

                  <div class="well">

                    <iframe
                      width="800"
                      height="300"
                      frameborder="0" style="border:0"
                      src="https://www.google.com/maps/embed/v1/search?key=AIzaSyC6lDSQ_8UxYrPWA10owhaVwb6GfTIusM4
                        &q=Kohinoor+cycle+store" allowfullscreen>
                    </iframe>

                  </div>

              </div>

          </div>

      </div>
      <!-- /.container -->
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
