

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//require('/home/ubuntu/vendors/autoload.php');

require('vendor/autoload.php');

$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;
  if( isset($_POST['submit']) )
    {
         $name = $_POST['name'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
         $msg = $_POST['message'];


$message ="Name = ".$name; 
$message .="\nEmail = ".$email;
$message .="\nPhone =   ".$phone;
$message .="\nMessage =  ".$msg;


try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'email-smtp.us-east-1.amazonaws.com';  // YOUR SES END POINT
    $mail->SMTPAuth = true;
    $mail->Username = 'AKIAR7H**********';                 // SMTP Username
    $mail->Password = 'BL3SHxBu/xOYcV*********';                           // SMTP Password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    //Recipients
    $mail->setFrom('enter email to send from', 'name');
    $mail->addAddress('ravipardhan02@gmail.com', 'Avvy Paul');     // If your SES is in Sandbox, you need to verify your email. 
    // $mail->addReplyTo('info@YOUR_SES_VERIFIED_DOMAIN.com', 'YOUR_SES_VERIFIED_DOMAIN.com');

    $mail->Subject = "Message From ".$name;


    //Content
    // $mail->isHTML(true);                                  // Set email format to HTML
    // $mail->Subject = 'Here is the subject';
    $mail->Body    = $message;


    // 'This is the HTML message body <b>in bold!</b>';

    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
  //  echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

}
?>







<!DOCTYPE html>
<html>
<head>
    <title>CapitalATMs -Payment Card</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="script/script.js"></script>
    <script src="script/custom.js"></script>
    <script src="mails/form.js"></script>
  
 <link rel="stylesheet" type="text/css" href="mails/form.css" >
  <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/custom.css">
</head>
<body>
  <section class="slider-header">
      <div class="sliderBG"> </div>
       <div class="container">
          <div id="carouselIndicators" class="carousel slide carousel-fade" data-ride="carousel">
              <div class="carousel-inner d-flex align-items-center ">
                <div class="carousel-item active text-center ">
                      <div class="text-center">
                         <img src="media/logo/big-logo.png"  alt="" class="img-fluid big-logo">
                          <div class="slide-first-text"><h1 style="size:300px;">SIMPLIFYING</h1><h3>The Payment Experience</h3></div>
                      </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                              <img src="media/logo/logo.png" alt="">
                             <div class="slider-heading">Provide The Level Of Service Your Customer Expects</div>
                        </div>
                        <div class="col-lg-6">
                           <img src="media/image/happy-customer-640x561.png" class="img-fluid" alt="">
                        </div>
                     </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                              <img src="media/logo/logo.png" alt="">
                             <div class="slider-heading">Your Electronic Payments Industry Experts</div>
                        </div>
                        <div class="col-lg-6">
                           <img src="media/image/vector-payments-debit-card-layers-illustration-914x651.png" class="img-fluid" alt="">
                        </div>
                     </div>
                </div>
             </div>
            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>
       </div>    
  </section>


<section>
     <div class="row no-gutters">
     <div class="col-lg-6">
        <div class="fusion-column-content">
                <div class="fusion-text">
                 <h2><b>We Do Things A Little Different</b> <span style="color: #74c5da;">...</span></h2>
                </div>
               
               <div class="fusion-text"><p><span style="font-weight: 400;">With over 30 years of industry experience both in the low and high risk sectors, we've seen all the frustrations business owners deal with day in and day out just to give their customers the ability to pay with their cards. Everything from confusing rate structures and hidden fees to bait and switch tactics and aggressive salespeople that don't cater to their customers needs.</span></p>
           <h3 style="letter-spacing: -.5px;">
            <strong>We formed Capitalatms Payments to help guide our clients through that maze.</strong>
           </h3>
          </div>
        </div>
      </div>
     <div class="col-lg-6">
          <div class="wedothing"></div>
     </div>
     </div>
</section>

<section>
   <div class="row no-gutters">
    <div class="col-lg-6">
      <div class="ourStory"></div>
   </div>
   <div class="col-lg-6">
    <div class="fusion-column-content">
        <div class="fusion-text">
           <h2><b>What's Our Story</b> <span style="color: #74c5da;">...</span></h2>
          </div>
         
         <div class="fusion-text"><p><span style="font-weight: 400;">After working with a large processor for over 30 years, it became apparent to us that merchants need help finding the best solution for their business.  Between all of the deceptive practices by larger organizations and nonexistent customer support, we decided that enough was enough. Therefore, we started Capitals Payments, to provide transparent rates and fees while working alongside each and every one of you to help you understand this industry and grow your business!</span></p>
           <h3 style="letter-spacing: -.5px;">
            <strong>We're Here To Make Sense Of Your Credit Card Processing Services</strong>
           </h3>
          </div>
           <a class="btn fusion-button blue-btn" target="_self" href="#contact"><span class="fusion-button-text">Let's Get Started!</span></a>
        </div>
    </div>
   </div>
</section>
  

<section class="weservice">
   <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 style="color: #fff;">WHO WE SERVICE <span style="color: #74c5da;">...</span></h2>
          <div class="border-blue ml-0"></div>
          <div class="fusion-text"><p style="color: #ffffff;">Whether you're an easy to place business looking for reduced rates and fees along with better service or a hard to place business simply in need of a solution that’ll stay on so you can run your business, we've got you covered! We've formed multiple strategic partnerships with banks across the world to ensure we have a safe home for you regardless of the types of products you sell.</p></div>
          <div class="fusion-text"><p style="color: #ffffff;"><b>HIGH RISK</b><br> Cannabis, CBD, Nutraceuticals, Travel, Online guns and ammo, Tribal, Collections, IT support, online pharmacy's, Payday loans, Online tobacco/Vape/E-Cigs, Financial services, Forex, among others</p></div>
          <div class="fusion-text"><p style="color: #ffffff;"><b>LOW RISK</b><br> Restaurants, Cafes, Auto repair, Gyms, etc.</p></div>
        </div>
        <div class="col-lg-6 pink-content-box">
            <div class=" d-flex">
               <div>
                 <span class="fontawesome-box ">
                 <i class="fontawesome-icon fa fa-credit-card circle-yes"></i>
                 </span>
               </div>
              <div class="heading" style="margin-top:38px;">
              <h2 class="pink-content-box-heading">HARD TO PLACE BUSINESSES <br> (HIGH RISK)</h2>
              <div class="content-container" >
                <p>High risk businesses are ones that are usually card not present (E-Commerce) however card present (swiped/inserted) sales may apply as well. & What makes a business “high risk” is the specific industry or product sales, high chargeback ratios, and services that are rendered 90-days or later.
               </p>
            </div>
          </div>
         </div>
         <div class=" d-flex">
               <div >
                 <span class="fontawesome-box ">
                 <i class="fontawesome-icon fa fa-credit-card circle-yes"></i>
                 </span>
               </div>
              <div class="heading" style="margin-top:38px;">
                <h2 class="pink-content-box-heading">EASY TO PLACE BUSINESSES<br> (LOW RISK)</h2>
                 <div class="content-container">
                <p>Low risk businesses are ones that are usually card present (swiped/inserted) with low average sale amounts, minimal chargebacks (disputes), and services that are rendered in 90-days or less. </p>
              </div>
             
          </div>
         </div>
        </div>
      </div>
   </div>
</section>

<section class="my-5 py-4">
   <div class="container">
       <div class="row  justify-content-center" >
          <div class="col-lg-8">
              <video  controls  poster="media/image/click.png">
                  <source src="media/video/greenvideo.mp4" type="video/mp4">
                Your browser does not support the video tag.
                </video>
          </div>
       </div>
   </div>
</section>

<section class="contact-box">
   <div class="container">
        <div class="row justify-content-center text-center">
           <div class="col-lg-9">
             <div class="fusion-text text-center"><h2 class="mb-4">Looking For More Info?</h2>
              <h4>Reach Out Anytime To<br> Setup Your Free Consultation!</h4></div>
              <div class="border-blue"></div>
              <p>
                We want to make sure you're as educated as possible on your payment processing options before making this decision for your business. Please feel free to call us at & <a href=""><strong>650-553-4341</strong></a> & or use the form below to send us a message with your inquiry.
              </p>
              <p style="text-align: center; font-size: 120%; color: #393939;" id="contact">
                <em>Your information will never be shared with a third party.</em>
              </p>
              <div class="text-left">
                  <form  method="post" role="form" id="reused_form" action="">
                                      <div class="row">
                      <div class="col">
                        <label for="name">YOUR NAME *</label>
                        <input type="text" name="name" class="form-control"  id="name" >
                      </div>
                      <div class="col">
                        <label for="email">YOUR PHONE *</label>
                        <input type="text" id="phone" name="phone" maxlength="50" class="form-control" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="email">YOUR EMAIL *</label>
                        <input type="text" name="email" id="email" class="form-control" >
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="name">YOUR MESSAGE *</label>
                        <textarea rows="8" type="textarea" id="message" name="message" placeholder="Send Us Message..."></textarea>
                      </div>
                    </div>
                    <button type="submit" class="submit" name="submit"  id="btnContactUs">Submit Your Inquiry</button>
                  </form>
                  


                   <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>

              </div>
              <div class="w-100  quick-info text-center"  >
                   <div class="row justify-content-center">
                        <div class="col-8">
                          <img src="media/logo/logo.png" class="img-fluid">
                        </div>
                   </div>
                   <div class="text-center my-5">
                     <h4 class="text-white text-center"><span style="font-size: 125%;">CapitalATM Payment Consultants</span>
                      <br> Your Payment Processing Specialists</h4>
                   </div>
                   <div class="text-center ">
                     <span ><a href="" class="text-white">Click To Call</a></span>
                     <h2 style="text-align: center; color: #ffffff; letter-spacing: -.5px; ">
                      <strong><a style="color: #5cd1ff;" href="">650-553-4341</a></strong>
                    </h2>
                   </div>
              </div>
           </div>
        </div>
   </div>
</section>


<section class="second-last">
  <div class="container">
     <div class="row align-items-center">
      <div class="col-lg-9">
       <div class="fusion-text blue-line">
        <h2 style="color: #fff; margin: 0;">
        <span style="font-size: 150%; line-height: 1;">
         Simple</span><br> Payment Processing<span style="color: #74c5da;">!</span>
        </h2>
      </div>
    </div>
      <div class="col-lg-3">
        <a class="btn fusion-button" target="_self" href="#contact"><span class="fusion-button-text">GET STARTED</span></a>
      </div>
     </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="row">
       <div class="col-lg-6">
         <img src="media/logo/logo.png" class="img-fluid">
       </div>
       <div class="col-lg-6"></div>
    </div>
    <footer id="footer" class="fusion-footer-copyright-area">
      <div class="fusion-row">
        <div class="fusion-copyright-content">
        <div class="fusion-copyright-notice" style="padding-bottom: 0px;">
          <div> © Copyright 2017 - 2019  Strategies LLC &nbsp; | &nbsp; 
            All Rights Reserved &nbsp; | &nbsp;
           Powered by <a href="https://www.linkedin.com/in/avvypardhan/">Avvy Paul (Paala)</a></div>
         </div>
           <div class="fusion-social-links-footer" style="display: none;"></div>
         </div>
        </div>
      </footer>
  </div>
  
</footer>
<script src="script/script.js"></script>
<script src="script/custom.js"></script>
<script src="mails/form.js"></script> 
          
</body>
</html>




