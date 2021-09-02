<?php
// Functions to filter user inputs
function filterName($field){
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);

    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}
function filterEmail($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);

    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}
function filterString($field){
    // Sanitize string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    } else{
        return FALSE;
    }
}

// Define variables and initialize with empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $subject = $message = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate user name
    if(empty($_POST["name"])){
        $nameErr = "Please enter your name.";
    } else{
        $name = filterName($_POST["name"]);
        if($name == FALSE){
            $nameErr = "Please enter a valid name.";
        }
    }

    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = "Please enter your email address.";
    } else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = "Please enter a valid email address.";
        }
    }

    // Validate message subject
    if(empty($_POST["subject"])){
        $subject = "";
    } else{
        $subject = filterString($_POST["subject"]);
    }

    // Validate user comment
    if(empty($_POST["message"])){
        $messageErr = "Please enter your comment.";
    } else{
        $message = filterString($_POST["message"]);
        if($message == FALSE){
            $messageErr = "Please enter a valid comment.";
        }
    }

    // Check input errors before sending email
    if(empty($nameErr) && empty($emailErr) && empty($messageErr)){
        // Recipient email address
        $to = 'demowebsite82@gmail.com';

        // Create email headers
        $headers = 'From: '. $email . "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        // Sending email
        if(mail($to, $subject, $message, $headers)){

          header("Location: /work/GymSite/success.php", TRUE, 301);
          exit();

        } else{
          header("Location: /work/GymSite/fail.php", TRUE, 301);
          exit();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Contact Form</title>
    <link rel="stylesheet" href="css/style.css">



</head>


<body>

  <section class="section1">


    <nav class="navbar">
     <div class="logo">
       <a href="index.php#home" id="home">DemoGym</a>
     </div>

     <a href="#" onclick="navFunction()"class="toggleButton">
       <span class="bar"></span>
       <span class="bar"></span>
       <span class="bar"></span>

     </a>
     <div class="navbarLinks">

       <ul>
         <li><a href="index.php#activities">Activities</a></li>
           <li><a href="contact.php">Contact</a></li>
             <li><a href="index.php#prices">Price</a></li>



       </ul>
     </div>

    </nav>

        <div class="contactForm" >


             <br>
              <h2>Contact Us</h2>
              <br>
              <p>Please fill in this form and send us a message.</p>
              <form action="contact.php" method="post">
                  <p>
                      <label for="inputName">Name:<sup>*</sup></label>
                      <input type="text" name="name" id="inputName" value="<?php echo $name; ?>">
                      <br>
                        <span class="error"><?php echo $nameErr; ?></span>
                  </p>
                  <p>
                      <label for="inputEmail">Email:<sup>*</sup></label>
                      <input type="text" name="email" id="inputEmail" value="<?php echo $email; ?>">
                      <br>
                      <span class="error"><?php echo $emailErr; ?></span>
                  </p>
                  <p>
                      <label for="inputSubject">Subject:</label>
                      <input type="text" name="subject" id="inputSubject" value="<?php echo $subject; ?>">
                  </p>
                  <div class="message">

                   <br>

                      <label for="inputComment">Message<sup>*</sup></label>
                      <br>
                      <textarea name="message" id="inputComment" rows="5" cols="-30"><?php echo $message; ?></textarea>
                      <br>
                        <span class="error"><?php echo $messageErr; ?></span>
                  </div>
                  <div class="submitForm">


                  <input type="submit" value="Send">

                    </div>
              </form>
 <br>
   <a id="gps" href="https://maps.google.com/maps/dir//Mount+Fuji+Kitayama+Fujinomiya,+Shizuoka+418-0112+Japan/@35.3606255,138.7273634,13z/data=!4m5!4m4!1m0!1m2!1m1!1s0x6019629a42fdc899:0xa6a1fcc916f3a4df"> Get Directions</a>

  <br> <br>
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

  </section>


  <script type="text/javascript" src="js/functions.js">
   </script>


</body>

</html>
