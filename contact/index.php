<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Here!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>ITS Engineering College, Gr.Noida, UP</div>
        <div><i class="fas fa-envelope"></i>yuvrajkumarsinghms_cse20@its.edu.in</div>
        <div><i class="fas fa-phone"></i>+91 7005693601</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <h2 >Apply Here!</h2>
        <form class="Apply Here!" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required> 
 <input type="phone" name="phone" class="text-box" placeholder="Your phone no." required>	 &nbsp; &nbsp;
<input type="college_id" name="college_id" class="text-box" placeholder="College Id" required>

 <input type="user_id" name="user_id" class="text-box" placeholder="User Id" required> &nbsp; &nbsp;
	  <input type="password" name="password" class="text-box" placeholder="Password" required>  
<textarea name="message" rows="5" placeholder="Your Message..." required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">

        </form>
<a href="http://localhost/voting"><button class="home-btn"> home</button></a>
      </div>
    </div>

    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>



  </body>
</html>