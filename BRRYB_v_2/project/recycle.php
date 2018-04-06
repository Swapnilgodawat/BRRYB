<?php
session_start();
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>rent</title>
   <link rel="stylesheet" href="styles/bootstrap.css" >
   <link rel="stylesheet" href="styles/bootstrap-theme.css">
     <link rel="stylesheet" href="styles/buy.css">
     <link rel="stylesheet" href="../styles/form-elements.css">
     <link rel="stylesheet" href="../styles/form-style.css">
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
             <a class="navbar-brand" href="../BRRYB.php">BRRYB</a>
           </div>
           <div id="navbar" class="navbar-collapse collapse">
             <ul class="nav navbar-nav">
               <li ><a href="../BRRYB.php">Home</a></li>
               <li ><a href="#top">Buy</a></li>
               <li ><a href="rent.php">Rent</a></li>
               <li class="active"><a href="recycle.php">Recycle</a></li>
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
   </div>

   <!-- Page Content -->
   <div class="container">

       <!-- Jumbotron Header -->
       <header class="jumbotron hero-spacer"  >

       <h1><b>RECYCLE</b></h1>
           <p>Recycle more for good measure.<br>Give your bicycle a new life by recycling it and also earn BRRYB cash</p>



       </header>



    </div>
       <!-- /.row -->
    <div class="container">

         <div class="col-sm-1 middle-border"></div>
         <div class="col-sm-1"></div>

         <div class="col-sm-5">

           <div class="form-box">
             <div class="form-top">
               <div class="form-top-left">
                 <h3>Fill in the form below to get the best price to recycle your bicycle</h3>
               </div>
               <div class="form-top-right">
                 <i></i>
               </div>
               </div>
               <div class="form-bottom">
             <form role="form" class="registration-form">
               <div class="form-group">
                 <label class="sr-only" for="cyclebrand">Cycle Brand</label>
                   <input type="text" name="cyclebrand" placeholder="Cycle Brand..." class="form-control" id="cyclebrand">
                 </div>
                 <div class="form-group">
                   <label class="sr-only" for="originalprice">Original price</label>
                   <input type="text" name="originalprice" placeholder="Original price..." class="form-control" id="originalprice">
                 </div>
                 <p> Check options which are in working condition</p>
                 <div class="form-group">
                   <input type="checkbox" name="brakes"value="one" id="brakes"><label>Brakes</label>
                 </div>
                 <div class="form-group">
                   <input type="checkbox" name="tyres"value="two" id="tyres"><label>Tyres</label>
                 </div>
                 <div class="form-group">
                   <input type="checkbox" name="handle"value="three" id="handle"><label>Handle</label>
                 </div>
                 <div class="form-group">
                   <input type="checkbox" name="Suspension"value="three" id="Suspension"><label>Suspension</label>
                 </div>
                 <button onclick="checkprice()" class="btn">Check Price</button>
                 <a class ="btn btn-primary "href="checkout.php">Recycle Now</a>
             </form>
           </div>
           </div>

         </div>
     </div>

     </div>
   <footer>
     <p class="pull-right"><a href="#top">Back to top</a></p>
     <p>© BRRYB 2017 Company, Inc. · <a href="#top">Privacy</a> · <a href="#top">Terms</a> A project by:<a href="#top">Nishad Kane</a> & <a href="https://www.google.co.in/search?q=tanuj+bohra&espv=2&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjc2r_zq63TAhVKu48KHdJACw4Q_AUIBygC&biw=1440&bih=826#imgrc=64YQFWh7DyqdwM:">Tanuj Bohra</a></p>
   </footer>


</div>
<script type="text/javascript">
function checkprice()
{
  var price =(document.getElementById("originalprice").value);
  var y=(document.getElementById("tyres").checked);
  var x=(document.getElementById("brakes").checked);
  price=price*0.2;

  if(x==true)
  {
    price=price+price*0.1;
  }
  if(y==true)
  {
    price=price+price*0.1;
  }
  alert("The amount of BRRYB cash you get is:"+price);
}
</script>
<script src="scripts/jquery.js"></script>
<script src="scripts/bootstrap.js"></script>
</body>
</html>
