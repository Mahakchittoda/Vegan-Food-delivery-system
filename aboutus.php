<?php
session_start();
?>

<html>

  <head>
    <title> About Us | Vegan Vibes ! </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Vegan Vibes !</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About Us </a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul  class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>

    <div class="wide" style="background-image: linear-gradient(45deg,white, #008000bf);">
        
        <div class="tagline" ><p style="color:black; font-size:30px;">Food for the body is not enough.<br> There must be food for the soul.</p> </div>
        
        <div class="q"style="font-size:30px;color:green;"><b>Why go vegan ?<b></div>
        <div class="aboutus"style="font-size:20px;"><p>A vegan lifestyle can support incredible health and protect huge numbers of animals.Well planned vegan diet can fuel the highest levels of fitness, while reducing our risk of various chronic diseases.The choice to eat meat affects the entire planet.Studies show plant -based diets are not only healtier for humans, but can reserve some of the world's most prevalent killers like diabetesand heart disease.</p></div>
        <div class="q"style="font-size:30px;color:green;"><b>How do you go vegan ?<b></div>
        <div class="aboutus"style="font-size:20px;"><p>Switching to a vegan diet requires remarkably little effort.Here's its most important lesson:<b><i>Don't emphasize cutting animal-based foodsout of our diet.Instead,crowd them out of constantly discovering vegan foods you prefer.</b></i>To rid your diet of animal products, focus on trying several new vegan foods each week.The more foods you try, the faster you'll progress.So,ideally,try atleast one new vegan item everyday.</p></div>
        <div class="q"style="font-size:30px;color:green;"><b>How our website will help you?</b></div>
        <div class="aboutus"style="font-size:20px;"><p>Vegan enjoy an abundance of flavorful food choices.The easiest option is ,ofcourse,vegan vibes!Eating out lets you discover all sorts of exciting new dishes.Vegan vibes has its unique facilities for food and beverages.It has the suitable menu for every cuisine so hat people can easily find their preferable food under one fingertip.This website offers us the best quality of vegan food.</p></div>
    </div>
        <!-- <h3 style="color: red">Here at Imagine, we take the safety of our guests and employees very seriously. We have been closely monitoring the ongoing COVID-19 information and news. 


Imagine relies solely on the support of our guests and the incredible community we are surrounded by, and we have been so thankful for all your orders in this difficult time! While this is an ever evolving situation, we have carefully weighed the options and have chosen to keep the dining room closed at this time. 


We have stringent sanitizing, cleaning and hourly monitoring practices in place to protect both our guests and employees. We love supporting our community with hearty comfort food, and we have expanded the ways you can access that to include these social distancing options:


No substitutions on the fish dinner. Thank you for understanding! 
Every to-go box ordered includes a .25 charge to help offset the costs of eco-friendly boxes instead of styrofoam. Worth it!

LOVE YOUR SERVERS
Every order includes a 10% COVID-19 fee: 100% of that goes to your server. They work hard to take your orders, make your smoothies and shakes, pack your desserts, carefully pack and check your order, process payments and send you home with delicious food. Thank you for working with us to provide a living wage for them as we navigate the pandemic and beyond! 

CURRENT LIMITED HOURS:</h3>
        <br>
        <h3 style="color: white">Order food & beverages online from restaurants near & around you. <h3 style="color: white">We deliver food from your neighborhood local joints, your favorite cafes, luxurious & elite restaurants in your area,</h3><h3 style="color : white"> and also from chains like Dominos, KFC, Burger King, Pizza Hut, FreshMenu, Mc Donald's, Subway, Faasos, Cafe Coffee Day, Taco Bell, and more. Exciting bit?</h3><h3 style="color : white"> We place no minimum order restrictions! Order in as little (or as much) as you'd like. We'll Swiggy it to you!</h3></h3>
    </div>

      <iframe src="https://www.google.com/maps/place/Le+Cafe/@11.9316155,79.8335933,17z/data=!3m1!4b1!4m5!3m4!1s0x3a53636a24873e45:0x7f1e7ad6a30982dd!8m2!3d11.9316103!4d79.835782" style="width: 250px"></iframe> -->
         </body>
</html>