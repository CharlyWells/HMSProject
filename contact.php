
  <?php include 'header.php';?>


  <?php
  if(isset($_POST['submit'])) {
    $mailto = "wellingtoncharlottenaaodarley@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject =  $_POST['subject'];
    $subject2 =  "Your Message Submitted Successfully";
    $message =  "Client Name: ". $name. "Wrote the Following Message". "\n\n". $_POST['message'];
    $message2 = "Dear ". $name. "Thank You for contacting us! We'll get back to you shortly"; 
    $headers = "From: ".$from;
    $headers2 = "From: ". $mailto;
    $result =  mail($mailto, $subject, $message, $headers);
    $result2=  mail($from, $subject2, $message2 $header2);
    if($result) {
      echo '<script type= "text/javascript">alert("Message was sent Successfully")</script>';

    } else{
      echo '<script type="text/javascript">alert("Submission failed! Try again later")</script>';
    }

  }

  ?>
  <!-- Content -->
  <div id="content"> 
    
    <!-- Contact Us -->
    <section class="p-t-b-150"> 
      <!-- CONTACT FORM -->
      <div class="container"> 
        <!-- Tittle -->
        <div class="heading-block">
          <h4>CONTACT US</h4>
        <div class="contact">
          <div class="contact-form"> 
            <!-- FORM  -->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
              <div class="row">
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="* Name">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="* Email">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="company" id="company" placeholder="Phone">
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="website" id="website" placeholder="Department">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="* Message"></textarea>
                      </label>
                    </li>
                    <li class="col-sm-12 no-margin">
                      <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">SEND MESSAGE</button>
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <!-- BOXES -->
    <section class="contact-box">
      <div class="container">
        <div class="row"> 
          
          <!-- Shop Location -->
          <div class="col-md-8">
            <div class="boxes-in">
              <h6>HOSPITAL INFO</h6>
              <ul class="location">
                <li> <i class="fa fa-location-arrow"></i>
                  <p>University Of Ghana, 
                    Legon</p>
                </li>
                <li> <i class="fa fa-phone"></i>
                  <p>0272312737</p>
                  <p>0272312737</p>
                </li>
                <li> <i class="fa fa-envelope"></i>
                  <p>wellingtoncharlottenaaodarley@gmail.com</p>
                  <p>wellingtoncharlottenaaodarley@gmail.com</p>
                </li>
                <li> <i class="fa fa-clock-o"></i>
                  <p>Mon-Fri: 9AM - 8PM</p>
                  <p>Sat-Sun: 9AM - 8PM</p>
                </li>
              </ul>
            </div>
          </div>
          
          <!-- NEWSLETTER -->
          <div class="col-md-4">
            <div class="boxes-in">
              <h6>SOCIAL LINKS</h6>
              
              <!--======= FOOTER ICONS =========-->
              <ul class="social_icons">
                <li class="twitter"><a href="#."> <i class="fa fa-twitter"></i></a></li>
                <li class="linkedin"><a href="#."> <i class="fa fa-linkedin"></i></a></li>
                <li class="instagram"><a href="#."> <i class="fa fa-instagram"></i></a
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
   
  
  <!-- Footer -->

  <?php include 'footer.php';?>