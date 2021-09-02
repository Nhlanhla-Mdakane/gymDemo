

<!DOCTYPE html>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Gym</title>
      <link rel="stylesheet" href="css/style.css">

      <script src="https://code.jquery.com/jquery-latest.js"></script>

  </head>
  <body  >


 <div id="fullbody" >


<section class="section1">


    <nav class="navbar autohide" >
     <div class="logo">
       <a href="index.php" >DemoGym</a>
     </div>

     <a  onclick="navFunction()"class="toggleButton">
       <span class="bar"></span>
       <span class="bar"></span>
       <span class="bar"></span>

     </a>
     <div class="navbarLinks">

       <ul>
         <li><a onclick="navFunction()" href="#activities">Activities</a></li>
           <li><a  onclick="navFunction()" href="contact.php">Contact</a></li>
             <li><a onclick="navFunction()" href="#prices">Price</a></li>



       </ul>
     </div>

    </nav>

      <div class="front" id="home">
    <div class="intro">
      <p>Push your body to the next level but not at this gym as this is a demo website of a gym that doesn't exist  </p>



   <form action="contact.php">
           <button type="submit" name="button" >Book Now</button>
      </form>

    </div>

     </div>

</section>

<section class="section3">
  <br>
    <br>
  <h2 id="activities">Activities </h2>
  <div class="activities">




<!-- mma, rehab,gym -->
    <div class="activity" >
      <h3>Crossfit</h3>
      <img src="./images/activity/crossfit.jpg" alt="crossfit">
      <br>
    A form of high intensity interval training and a great way to burn calories.
    </div>

    <div class="activity" >
      <h3>Gym</h3>
      <img src="./images/activity/gym.jpg" alt="gym">
      <br>
    We offer classical weight lifting which can help you bulk up or trim down.
    </div>

    <div class="activity">
      <h3>MMA</h3>
      <img src="./images/activity/mma.jpg" alt="mma">
      <br>
     MMA for beginners ,competitors and those who wish to know how to defend themselves.
    </div>



  </div>
  </section>


<div class="reviews" >





        <div class="mySlides fade">  <img src="images/reviews/client1.jpg" alt="client1"><p>"Training here has transformed the way that I see fitness."</p></div>
    <div class=" mySlides  fade">  <img src="images/reviews/client2.jpg" alt="client2"> <p >"This gym has pushed me to a new level that I did not know  I could reach!"</p></div>
        <div class=" mySlides fade">   <img src="images/reviews/client3.jpg" alt="client3">  <p >"I thought my boxing days were over but they have shown me that I still have much more in the tank!"</p></div>

    ​


</div>



       <br>
      <h2 id="prices">We offer 3 financial plans</h2>
    <div class="plans">

     <div class="plan" >
        <h3>Amateur</h3>
              <h4>$39.99 p/month</h4>

                <br>
        <ul>

          <li>Access to all equipment</li>
          <li>2 personalised diet consultations(2 per month)</li>
          <li>personalised training session (1 per week)</li>
          <li>Open 24/7</li>
          <li>Free Wi-Fi (for 1 hour)</li>

        </ul>

      </div>

      <div class="planMain plan">
        <h3>Pro</h3>
              <h4>$59.99 p/month</h4>
               <br>

        <ul>
          <li>Access to all equipment</li>
          <li>  4 diet consultations (4 per Month)</li>
          <li> personalised training session (2 per week)</li>
          <li> Open 24/7</li>
          <li>free Wi-Fi (for 3 hours)</li>
          <li>Bring a buddy and they can train for free (2 per month)</li>
        </ul>

      </div>

      <div class="plan">
        <h3>Warrior</h3>
              <h4>$69.99 p/month</h4>
              <br>
        <ul>

          <li>Access to all equipment</li>
          <li>8 diet consultations (8 per Month)</li>
          <li> personalised training session (4 per week)</li>
          <li>Open 24/7</li>
          <li>free Wi-Fi (24/7)</li>
          <li>Gym Locker</li>
          <li>Bring a buddy and they can train for free (4 per month)</li>
        </ul>

      </div>

    </div>



    <footer>

    <div class="location">

      <div class="address">
        <ul>
          <li>729 Fake Road</li>

          <li>Fake place</li>

          <li>Fake City</li>

          <li>Fake Country</li>


        </ul>
      </div>

<div class="contact">


    <ul>
      <li><a href="https://www.facebook.com/">  <img src="./images/icons/fb.png" alt="facebook" > Facebook</a>   </li>

      <li><a href="https://www.instagram.com/">  <img src="./images/icons/in.png" alt="instagram"> Instagram</a>  </li>

      <li><img src="./images/icons/wa.png" alt="whatsapp">    +772 785 9568 </li>




    </ul>






</div>


        </div>





    </footer>

     </div>

     <script type="text/javascript" src="js/functions.js">

    </script>

 <script type="text/javascript">


 //this is what hides the nav bar when the user scrolls

 document.addEventListener("DOMContentLoaded", function(){

   el_autohide = document.querySelector('.autohide');

   // add padding-top to bady (if necessary)
   navbar_height = document.querySelector('.navbar').offsetHeight;
   document.body.style.paddingTop = navbar_height + 'px';

   if(el_autohide){
     var last_scroll_top = 0;
     window.addEventListener('scroll', function() {
           let scroll_top = window.scrollY;
          if(scroll_top < last_scroll_top) {
               el_autohide.classList.remove('scrolled-down');
               el_autohide.classList.add('scrolled-up');
           }
           else {
               el_autohide.classList.remove('scrolled-up');
               el_autohide.classList.add('scrolled-down');
           }
           last_scroll_top = scroll_top;
     });
     // window.addEventListener
   }
   // if

 });

//image slideshow
 var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}

  slides[slideIndex-1].style.display = "flex";
  slides[slideIndex-1].style.flexDirection = "column";

  setTimeout(showSlides, 3000); // Change image every 2 seconds
}







 //slide for paragraphs


 </script>


  </body>
</html>
