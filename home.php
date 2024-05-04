<?php  
session_start();
include 'connexion.php';





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence de Voyage</title>
    <link href="home.css" rel="stylesheet" type="text/css">
    
</head>
<body>
  
  <header data-navbar-on-scroll>
  <div class="logo">
    <a class="logo" href="home.php">
       <img src="images/newlogo1.png" alt="logo">
    </a>
  </div>  
  <ul class="menu">
        <li><a aria-current="page" href="#home" >Home</a></li>
        <li><a aria-current="page" href="#service" >Service</a></li>
        <li><a aria-current="page" href="#destination"><i>Destinations</i></a></li>
        <li><a aria-current="page" href="#steps"><i>Steps</i></a></li>
        <li><a aria-current="page" href="#reservation"><i>Reservation</i></a></li>
        <li><a class="button" aria-current="page" href="login.php" role="button">Login </a></li>
        <li><a class="button" aria-current="page" href="signup.php" role="button">SignUp</a></li>

        

      
  </ul>
</header>

<section id="home" style="padding-top: 5rem;">
  <div class="bg">
  </div>
  <img id="imag1" src="images/hero.png" alt="hero-header" />  
  
  <div class="page1" >
  <h4 class="titre1">Best Destinations around the world</h4>
  <h1 class="titre2" >Travel, enjoy <br> and live a new <br> and full life</h1><br>
  <p class="parag">Built Wicket longer admire do barton vanity itself do in it.<br>Preferred to sportsmen it engrossed listening. Park gate<br>sell they west hard for the.</p>        
  <a  class="find" href="#" role="button">Find out more</a>
  <a href="https://www.youtube.com/watch?v=-sRy6-RQzwQ" >
     <span class="imgplay"> 
        <img src="images/play1.svg" alt="play" width="90" height="50">
     </span>
  
  </a>
  <span class="play">Play Demo</span>
  
</div>

</section>


<section id="service"> 
  <div class="shape"><img src="images/shape.svg" style="max-width: 200px" alt="service" /></div>  
  <div class="titre3">
    <h5 style="color: #5E6282">CATEGORY </h5>
    <h3 class="minititre">We Offer Best Services</h3>
  </div>
  <div class="category">
    <div class="icon1">
    <div class="i1"><img src="images/icon1.png" width="75" alt="Service" />
    <h4 >Calculated Weather</h4>
    <p style="font-weight: 500 !important;" >Built Wicket longer admire do barton vanity itself do in it.</p>
    </div>
    </div>
    <div class="icon1">
      <div class="i1">
    <img src="images/icon2.png" width="75" alt="Service" />
    <h4 >Best Flights</h4>
    <p style="font-weight: 500 !important;">Engrossed listening. Park gate sell they west hard for the.</p> 
    </div>
    </div>
    <div class="icon1">  
      <div class="i1">  
    <img src="images/icon3.png" width="75" alt="Service" />
    <h4>Local Events</h4>
    <p style="font-weight: 500 !important;">Barton vanity itself do in it. Preferd to men it engrossed listening.</p>
    </div>
    </div> 
    <div class="icon1">
      <div class="i1">
    <img src="images/icon4.png" width="75" alt="Service" />
    <h4>Customization</h4>
    <p style="font-weight: 500 !important;">We deliver outsourced aviation services for military customers</p>
    </div>
    </div>
</div>
  </section>

  <section id="destination" >
    <div class="titre3">
      <h5 style="color: #5E6282">Top Selling </h5>
      <h3 class="minititre">Top Destinations</h3>
      </div>
      <div class="D">
      <div class="dist1">
      <img style="border-radius: 2rem;width: 100%;" src="images/dest1.jpg" alt="Rome, Italy" />
      <div class="dist">
      <div class="distname">
      <h4 class="name"><a class="link" href="!#">Rome, Italy</a></h4>
      <span class="price">$5200</span> 
      </div>
      <div class="nav">
      <img src="images/navigation.svg" style="margin-right: 14px" width="20" alt="navigation" />
      <span class="days">10 Days Trip</span>
      </div>
      </div>
      </div>
      <div class="dist1">
      <img style=" border-radius: 2rem;width: 100%;" src="images/dest2.jpg" alt="London, UK" />
      <div class="dist">
        <div class="distname">
      <h4 class="name"><a class="link" href="!#">London, UK</a></h4>
      <span class="price">$4200</span>
       </div>
      <div class="nav">
      
      <img src="images/navigation.svg" style="margin-right: 14px" width="20" alt="navigation" />
      <span class="days">12 Days Trip</span>
      </div>
      </div>
      </div>
       <div class="dist1">
      <img style=" border-radius: 2rem;width: 100%;" src="images/dest3.jpg" alt="Full Europe" />
      <div class="dist">
        <div class="distname">
      <h4 class="name"><a class="link" href="!#">Full Europe</a></h4>
     <span  class="price">$15000</span>
       
    </div>
    <div class="nav">
      <img src="images/navigation.svg" style="margin-right: 14px" width="20" alt="navigation" />
      <span class="days">28 Days Trip</span>
      </div>
    </div>
  </div>
      </div>
  </section>


  <section id="steps">
    <div class="booking">
      <div class="tips">
        <div class="titrebooking">
       <h5 style="color: #5E6282">Easy and Fast </h5>
       <h3 class="minititre">Book your next trip in 3 easy steps</h3>
       </div>
       <div class="icontips1">
       <div class="step1" > <img src="images/selection1.png" width="37" alt="steps" /></div>
       <div class="description">
        <h5 class="titrestep">Choose Destination</h5>
        <p >Choose your favourite place. No matter <br class="par"> where you travel inside the World.</p>
        </div>
        </div>
        <div class="icontips1">
        <div class="step2">
          <img src="images/water1.png" width="35" alt="steps" /></div>
          <div class="description">
        <h5 class="titrestep">Make Payment</h5>
        <p>After find your perfect spot, make your <br class="par" > payment and get ready to travel.</p>
        </div>
        </div>
        <div class="icontips1">
        <div class="step3">
          <img src="images/taxi1.png" width="35" alt="steps" /></div>
          <div class="description">
        <h5 class="titrestep">Reach Airport on Selected Date</h5>
        <p>Lastly, you have to arrive at the airport <br class="par"> on time and enjoy the vacation.</p>
        </div>
        </div>
        </div>
        <div class="trip">
        <div class="imgbooking">
        <img class="imgbooking1" src="images/booking-img.jpg" alt="booking" />
        <div>
        <h5 style="font-weight: 500 !important;">Trip To Greece</h5>
        <p class="Greece">14-29 June | by Robbin joseph</p>
        <div class="ICONS">
           <span class="icons">
             <img src="images/leaf.svg" alt=""/>
           </span>
             <span class="icons"> 
              <img src="images/map.svg" alt=""/>
             </span>
              <span class="icons">
                 <img src="images/send.svg" alt=""/>
              </span>
        </div>
        <div class="building">
        <div class="imgbuilding">
          <img style="margin-left: 1rem !important;" src="images/building.svg" width="18" alt="building" />
          <span style="font-size: 0.88889rem !important;font-weight: 400 !important;">24 people going</span>
        </div>
         <img src="images/heart.svg" width="20" alt="step" />
        </div>
        </div>
        </div>
        </div>
    </div>
  </section>

  <section id="reservation" class="tour-search" style="margin-top: -14rem;">
    <div class="container">

    <form action="process_reservation.php" class="tour-search-form" method="POST">


        <div class="input-wrapper">
          <label for="destination" class="input-label">Search Destination*</label>

          <input type="text" name="destination" id="destination" required placeholder="Enter Destination"
            class="input-field">
        </div>

        <div class="input-wrapper">
          <label for="people" class="input-label">Pax Number*</label>

          <input type="number" name="people" id="people" required placeholder="No.of People" class="input-field">
        </div>

        <div class="input-wrapper">
          <label for="checkin" class="input-label">Checkin Date**</label>

          <input type="date" name="checkin" id="checkin" required class="input-field">
        </div>

        <div class="input-wrapper">
          <label for="checkout" class="input-label">Checkout Date*</label>

          <input type="date" name="checkout" id="checkout" required class="input-field">
        </div>

        <button type="submit" class="btn btn-secondary">Inquire now</button>

      </form>

    </div>
  </section>
<footer>
  <div class="footer-bottom">
    <div class="container">

      <p class="copyright">
        &copy; 2022 <a href="">codewithsadee</a>. All rights reserved
      </p>

      <ul class="footer-bottom-list">

        <li>
          <a href="home.html" class="footer-bottom-link">Privacy Policy</a>
        </li>

        <li>
          <a href="home.html" class="footer-bottom-link">Term & Condition</a>
        </li>

        <li>
          <a href="home.html" class="footer-bottom-link">FAQ</a>
        </li>

      </ul>

    </div>
  </div>
</footer>

<script src="home.js"></script>
</body>
</html>
