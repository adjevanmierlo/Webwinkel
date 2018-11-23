<?php 
    include "php\connection.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>    

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/shop.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Harley-davidson-verkoop.nl</title>
</head>

<body>
  <body class="w3-content" style="max-width:1200px">
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
      <div class="w3-container w3-display-container w3-padding-16">
        <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
        <a href="index.php"><h3 class="w3-wide"><img src="photo\logo3.jpg"></h3></a>
      </div>
      <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
        <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
          Harley Davidson type's<i class="fa fa-caret-down"></i>
        </a>
        <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <a href="Category-sportster.php" class="w3-bar-item w3-button">Sportster®</a>
          <a href="Category-softail.php" class="w3-bar-item w3-button">Softtail®</a>
          <a href="Category-touring.php" class="w3-bar-item w3-button">Touring</a>
          <a href="Category-street.php" class="w3-bar-item w3-button">Street</a>
          <a href="Category-cvo.php" class="w3-bar-item w3-button">CVO™</a>
        </div>
       
        <!-- <a href="Budget.php" class="w3-bar-item w3-button w3-padding">Budget</a> -->
        <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
        <!-- <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a> -->
        <a href="#footer" class="w3-bar-item w3-button w3-padding">Inschrijven</a>
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
      <div class="w3-bar-item w3-padding-24 w3-wide"><a href="index.php"><img src="photo\logo2.png"></a></div>
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:250px">

      <!-- Push down content on small screens -->
      <div class="w3-hide-large" style="margin-top:83px"></div>

      <!-- Top header -->
      <header class="w3-container w3-xlarge">
        <p class="w3-left">Harley-Davidson</p>
        <p class="w3-right">
          <!-- <i class="fa fa-shopping-cart w3-margin-right"></i>
          <i class="fa fa-search"></i> -->
        </p>
      </header>

      <!-- Image header -->
      <div class="w3-display-container w3-container"style="margin:0; padding:0;">
        <img src="photo\ORGIGINALS-HEAD.jpg" style="width:100%">
        <!-- <div class="w3-display-topleft w3-text-white" style="padding:24px 48px"> -->
        <!-- </div> -->

      </div>
      &nbsp;

   <div class="w3-row w3"> 
        <!-- <a href="price.php"class="w3-bar-item w3-button">Sorteer op prijs</a> -->
        <!-- <a style="float: right"class="w3-bar-item w3-button">Sorteer op Category</a> -->
        <div id="products">
 <?php 
   include "sort-cat-sportster.php";
    ?> 
    </div>
    </div>
 <!-- <div class= "Photo">
 <img src="photo\2019-street-rod-hero.jpg" style="width:100%">
 <p>STREET® 750<br><b>Vanaf € 8.825</b></p>
 </div>
 <div class= "Photo">
 <img src="photo\2019-street-750.jpg" style="width:100%">
 <p>Street Rod®<br><b>Vanaf € 9.900</b></p>
 </div>
 <div class= "Photo">
 <img src="photo\2019-iron-883.jpg" style="width:100%">
 <p>Iron 883™ <br><b>Vanaf € 12.500 </b></p>
 </div>
 <div class= "Photo">
 <img src="photo\2019-1200-custom.jpg" style="width:100%">
 <p>1200 Custom<br><b>Vanaf € 14.810</b></p>
 </div>
 <div class= "Photo">
 <img src="photo\2019-fat-bob.jpg" style="width:100%">
 <p>FAT BOB®<br><b>Vanaf € 20.900 </b></p>
 </div>
 <div class= "Photo">
 <img src="photo\2019-softail-deluxe.jpg" style="width:100%">
 <p>Deluxe <br><b>Vanaf € 25.200 </b></p>
 </div>
 <div class= "Photo">
 <img src="photo\2019-road-king-classic.jpg" style="width:100%">
 <p>ROAD KING® CLASSIC<br><b>Vanaf € 28.800</b></p>
 </div>
 <div class= "Photo">
 <img src="photo\2019-cvo-street-glide.jpg" style="width:100%">
 <p>CVO™ Street Glide®<br><b>Vanaf € 47.500 </b></p>
 </div> -->

      <!-- Inschrijven -->
      <div class="w3-container w3-black w3-padding-32">
        <h1>Inschrijven</h1>
        <!-- <p>To get special offers and VIP treatment:</p> -->
        <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
        <button type="button" class="w3-button w3-deep-orange w3-margin-bottom">Inschrijven</button>
      </div>

      <!-- Footer -->
      <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
        <div class="w3-row-padding">
          <div class="w3-col s4">
            <h4>Contact</h4>
            <p>Vragen? Ga je gang.</p>
            <form action="/action_page.php" target="_blank">
              <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
              <p><input class="w3-input w3-border" type="text" placeholder="Last name" name="Last name" required></p>
              <p><input class="w3-input w3-border" type="text" placeholder="phone" name="Phone" required></p>
              <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
              <button type="submit" class="w3-button w3-block w3-black">Send</button>
            </form>
          </div>

          <div class="w3-col s4">
            <h4>About</h4>
            <p><a href="#">Over ons</a></p>
            <p><a href="#">Vacature</a></p>
            <p><a href="#">Support</a></p>
            <p><a href="#">Vind je Store</a></p>
          </div>

          <div class="w3-col s4 w3-justify">
            <h4>Store</h4>
            <p><i class="fa fa-fw fa-map-marker"></i> Harley-davidson-verkoop.nl</p>
            <p><i class="fa fa-fw fa-phone"></i> 06-43275140</p>
            <p><i class="fa fa-fw fa-envelope"></i> a.vanmierlo@ziggo.nl</p>
            <h4>We accept</h4>
            <p><i class="fa fa-fw fa-cc-amex"></i> ideal</p>
            <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
            <br>
            <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
            <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
            <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
            <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
            <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
          </div>
        </div>
      </footer>

      <div class="w3-black w3-center w3-padding-24"></div>
      <!--plaats achter padding text als je dit wilt in de footer

      <!-- <a href="" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a> deze toevoegen als ik een link in me footer wil -->


      <!-- End page content -->
    </div>

    <!-- Newsletter Modal -->
    <!-- <div id="newsletter" class="w3-modal">
      <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
        <div class="w3-container w3-white w3-center">
          <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
          <h2 class="w3-wide">NEWSLETTER</h2>
          <p>
            Word lid van onze mailinglijst om updates over nieuwkomers en speciale aanbiedingen te ontvangen.</p>
          <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
          <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
        </div>
      </div>
    </div> -->
    <script src="javascrypt\shop.js"> </script>
  </body>
  
</html>