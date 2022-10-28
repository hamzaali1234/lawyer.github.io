<?php
$titleTag = '';
$title = "Lawyers Website - Contact Us";// for dynamic title on selected page
$currentPage = 'Contact Us';// for add dynamic active class on selected page on header
$pageTitle = "Contact Us";// for add dynamic text of Page Title Section
$page="contact-us.php";// for add dynamic url text of Page Title Section
require("includes/header.inc.php");
?>


<!-- Page Title Section Start -->
<?php
require("includes/includes-sections/page-title-section.inc.php");
?>
<!-- Page Title Section End -->




<?php 
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $contact_number = $_POST["contact_number"];
        $address = $_POST["address"];
        $message = $_POST["message"];
        mysqli_query($conn,"insert into contact_us (name,email,contact_number,address,message) values ('$name','$email','$contact_number','$address','$message') limit 1");
?>
<script type="text/javascript">
    alert("Send Message Successfully!!!");
</script>
<?php } ?>




<script type="text/javascript">
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function formValidation() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var contact_number = document.getElementById("contact_number").value;
        var address = document.getElementById("address").value;
        var message = document.getElementById("message").value;
        
        // Defining error variables with a default value
        var nameErr = emailErr = contact_numberErr = addressErr = messageErr = true;


        // Start Validate Name
        if(name == "") {
            printError("nameErr", "Please! Enter Your Name");
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(name) === false){
                printError("nameErr", "Please! Enter Only Text...");
            } else {
                printError("nameErr", "");
                nameErr = false;
            }
        }
        // End Validate Name

        // Start Validate Email Address
        if(email == "") {
            printError("emailErr", "Please! Enter Your Email Address");
        } else {
            var regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;                
            if(regex.test(email) === false){
                printError("emailErr", "Please! Enter a Valid Email Address");
            } else {
                printError("emailErr", "");
                emailErr = false;
            }
        }
        // End Validate Email Address

        // Start Validate Contact Number
        if(contact_number == "") {
            printError("contact_numberErr", "Please! Enter Your Contact Number");
        } else {
            var regex = /^[0-9]\d{10}$/;                
            if(regex.test(contact_number) === false){
                printError("contact_numberErr", "Please! Enter Your Contact Number Only in Digits & Minimum 11 Digits");
            } else {
                printError("contact_numberErr", "");
                contact_numberErr = false;
            }
        }
        // End Validate Contact Number

        // Start Validate Address
        if(address == "") {
            printError("addressErr", "Please! Enter Your Mailing Address");
        } else {
              if(address.length < 20){
                printError("addressErr", "Please! Enter Your Mailing Address Minimum 20 Characters");
              } else {
                printError("addressErr", "");
                addressErr = false;
              }
        }
        // End Validate Address

        // Start Validate Message
        if(message == "") {
            printError("messageErr", "Please! Enter Your Message");
        } else {
            var regex = /^[a-zA-Z\.,?'"\s]+$/;                
            if(regex.test(message) === false){
                printError("messageErr", "Please! Enter Only Text...");
            } else {
              if(message.length < 20){
                printError("messageErr", "Please! Enter Your Message Minimum 20 Characters");
              } else {
                printError("messageErr", "");
                messageErr = false;
              }
            }
        }
        // End Validate Message

        if((nameErr || emailErr || contact_numberErr || addressErr || messageErr) == true){
            return false;
        }else{
            return true;
        }
    }
</script>



<!-- Contact Section Start -->
<div id="contact" class="parallax-section">
  <div class="container"> 
    
    <!-- SECTION TITLE -->
    <div class="section-title">
      <h3>Get in Touch</h3>
      <p>Feel Free To Contact Us, Discuss Your Concerns And Get The Best Lawyer For Your Concern</p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="contact-now">
          <div class="contact hvr-float-shadow"> <span class="hvr-bob"><i class="fa fa-home"></i></span>
            <div class="information"> <strong>Address:</strong>
              <p> <a href="https://www.google.com/maps/place/24%C2%B052'50.4%22N+67%C2%B008'11.6%22E/@24.8806667,67.1360084,19z/data=!3m1!4b1!4m6!3m5!1s0x0:0x0!7e2!8m2!3d24.8806641!4d67.1365508" target="_blank">House no 4/543, Shah Faisal Colony no 4, Karachi no 25, Pakistan.</a></p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact hvr-float-shadow"> <span class="hvr-bob"><i class="fa fa-envelope"></i></span>
            <div class="information"> <strong>Email Address:</strong>
              <p><a href="mailto:info@lawyerwebsite.com"> info@lawyerwebsite.com</a></p>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="contact hvr-float-shadow"> <span class="hvr-bob"><i class="fa fa-phone"></i></span>
            <div class="information"> <strong>Phone No:</strong>
              <p><a href="tel:03452418563"> +92 345 2418563</a></p>
            </div>
          </div>
          <!-- Contact Info --> 
        </div>
      </div>
      <div class="col-md-8"> 
        <!-- CONTACT FORM HERE -->
        <div class="contact-form">
          <form id="contact-form" class="row" action="" method="POST" onsubmit="return formValidation()">
            <div class="col-md-4 col-sm-6 text-left">
              <input type="text" class="form-control" name="name" id="name" placeholder="Name">
              <span id="nameErr" class="error"></span>
            </div>
            <div class="col-md-4 col-sm-6 text-left">
              <input type="text" class="form-control" name="email" id="email" placeholder="Email Address">
              <span id="emailErr" class="error"></span>
            </div>
            <div class="col-md-4 col-sm-12 text-left">
              <input type="text" class="form-control" name="contact_number" id="contact_number" maxlength="15" placeholder="Contact Number">
              <span id="contact_numberErr" class="error"></span>
            </div>
            <div class="col-md-12 col-sm-12 text-left">
              <input type="text" class="form-control" name="address" id="address" placeholder="Address">
              <span id="addressErr" class="error"></span>
            </div>
            <div class="col-md-12 col-sm-12 text-left">
              <textarea class="form-control" rows="5" name="message" id="message" placeholder="Message"></textarea>
              <span id="messageErr" class="error"></span>
            </div>
            <div class="col-md-12">
              <button id="submit" type="submit" class="form-control" name="submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section End -->



<?php
require("includes/footer.inc.php");
?>