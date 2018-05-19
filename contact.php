<?php
define("TITLE", "Contact Us| Bristo");
include('includes/header.php');

?>
<!--start contact form-->
<div id="contact" class="py-5 text-center">
  <hr>
  <h1>Get in touch with us!</h1>
  <?php
    //check for header injections
    function has_header_injection($str){
      return preg_match( "/[\r\n]/", $str);
    }
   if(isset($_POST['contact_submit'])) {
     $name= trim($_POST['name']);
     $email= trim($_POST['email']);
     $msg =$_POST['message'];

     //check to see if $name or $email has a header injections
     if( has_header_injection($name) || has_header_injection($email)){
       die(); //if true kill the script
     }
     //validate
     if( !$name || !$email || !$msg){
       echo '<h4 class="error">All fields required</h4><a href="contact.php" class="btn btn-primary btn-lg btn-block"></a>';
       exit();
     }

       //Add the receipeint email to a variable
       $to ="your@email.com";
       $subject ="$name sent you a message via your contact form";
$       $message .="Name: $name\r\n";
       $message .="Email: $email\r\n";
       $message .= "Message:\r\n$msg";


      //if the subscribe checkbox was checked...
      if(isset($_POST['subscribe']) && $_POST['subscribe'] == "Subscribe"){
        //add a new line to the $message
        $message .= "\r\n\r\nPlease add $email to the mailinng list.\r\n";

      }
      $message = wordwrap($message, 72);

      //set the mail hraders into a variable
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
      $headers .= "From: $name <$email>\r\n";
      $headers .= "X-Priority: 1\r\n";
      $headers .= "X-MSMail-Priority: High\r\n\r\n";

      //send the Email
      mail($to, $subject, $message, $headers);


   ?>
   <!--show success message after email has been sent-->
   <h5>Thanks for contacting bri
  <p><a href="/final" class="btn btn-primary btn-lg btn-block">&laquo; Go to home page</a></p>
 <?php } else { ?>
<form method="POST" action="#" id="contact_submit">
<div class="form-group row">
  <label for="userinput">Username</label>
  <input type="text" class="form-control" id="userinput"  name="name" placeholder="Enter Your Username">
</div>

<div class="form-group row">
  <label for="inputEmail">Email</label>
  <input type="email" class="form-control" id="inputEmail"  name="email" placeholder="Enter Your Email">
</div>
<div class="form-group row">
  <label for="inputmessage">Your Message</label>
  <textarea type="text" class="form-control" id="inputmessage" name="message" placeholder="Type ur message"></textarea>
</div>

<div class="form-group row">
   <div class="form-check">
  <input class="form-check-input" type="checkbox" id="subscribe" value="Subscribe">
  <label class="form-check-label" for="subscribe">Subscribe to Our NewsLetter</label>
</div>
</div>
<div class="form-group row">
<input type="submit" class="btn btn-outline-success" name="contact_submit" vaue="Send Message">
</div>
</form>

<?php } ?>

</div><!--end contact form-->

<?php  include('includes/footer.php');?>
