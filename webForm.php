
<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){

      if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

        // submit the form
        $userName = $POST['name'];
        $userEmail = $POST['email'];
        $messageSubject = $POST['subject'];
        $Message = $POST['message'];

        $to = "treborretsal@protonmail.com"
        $body = "";

        $body .="from: ".$userName. "\r\n";
        $body .="Email: ".$userEmail. "\r\n";
        $body .="Message: ".$message. "\r\n";

        mail($to,$messageSubject,$body);

        $message_sent = true;
      }

    }



?>

    $contactName = $_POST['contactName'];
    $contactSubject = $_POST['contactSubject'];
    $contactMail = $_POST['contactMail'];
    $contactMessage = $_POST['contactMessage'];

    $mailTo = "treborretsal@protonmail.com";
    $headers = "From: ".$contactMailFrom;
    $txt = "You have recieved an e-mail from ".$contactName.".\n\n".$contactMessage;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsent");
}
<body>
    <?PHP
    if($message_sent):
      ?>

          <h3>Thanks, we'll be in touch</h3>

      <?php
      else:
?>
<section id="contact">

   <div class="overlay"></div>

 <div class="row narrow section-intro">
   <div class="col-twelve">
     <h3 class="animate-this">Contact</h3>
     <h1 class="animate-this">I'm Available for Freelance Work. Feel Free to Contact Me.</h1>

     <p class="lead animate-this"><!-- a sweet paragraph goes here OPTIONALLY --></p>
   </div>
 </div> <!-- end section-intro -->

 <div class="row contact-form">
   <div class="col-twelve">

         <!-- form -->
         <form name="contactForm" action="webForm.php" id="contactForm" method="post">


               <div class="form-field animate-this">
            <input name="contactName" type="text" id="contactName" placeholder="Full Name" value="" minlength="2" required="">
               </div>
               <div class="form-field animate-this">
              <input name="contactEmail" type="email" id="contactEmail" placeholder="Your E-mail" value="" required="">
              </div>
               <div class="form-field animate-this">
              <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
              </div>
               <div class="form-field animate-this">
                 <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10" cols="50" required=""></textarea>
              </div>

               <div class="form-field animate-this">
                  <button class="submitform" type="submit" name="submit">Submit</button>

                  <div id="submit-loader">
                     <div class="text-loader">Sending...</div>
                 <div class="s-loader">
                 <div class="bounce1"></div>
                 <div class="bounce2"></div>
                 <div class="bounce3"></div>
             </div>
           </div>
               </div>
       </form>
<?PHP
endif;
?>








</body>
