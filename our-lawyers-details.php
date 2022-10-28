<?php
$titleTag = $_GET['name'];
$title = "Lawyers Website - Our Lawyers -";// for dynamic title on selected page
$currentPage = 'Our Lawyers Details';// for add dynamic active class on selected page on header
$pageTitle = "Our Lawyers Details";// for add dynamic text of Page Title Section
$page="our-lawyers-details.php";// for add dynamic url text of Page Title Section
$id = $_GET['id'];
require("includes/header.inc.php");
require("includes/connection.inc.php");
$role = "Lawyer";
$sql = "select * from user inner join lawyer_details on user.id=lawyer_details.user_id where user.status=1 and user.role='".$role."' and user.id='".$id."' limit 1";
?>


<?php
    require("includes/connection.inc.php");
    $role = "";
    $query=mysqli_query($conn,"select * from user inner join lawyer_details on user.id=lawyer_details.user_id where user.username='".$_SESSION["username"]."' limit 1");
    while($row=mysqli_fetch_array($query)){
        $role = $row["role"];
        if($role=="Lawyer") {
?>
<script type="text/javascript">
    var first_name = "<?php echo $row["first_name"]; ?>";
    var gender = "<?php echo $row["gender"]; ?>";
    var dob_day = "<?php echo $row["dob_day"]; ?>";
    var dob_month = "<?php echo $row["dob_month"]; ?>";
    var dob_year = "<?php echo $row["dob_year"]; ?>";
    var cnic = "<?php echo $row["cnic"]; ?>";
    var cnic_type = "<?php echo $row["cnic_type"]; ?>";
    var country = "<?php echo $row["country"]; ?>";
    var nationality = "<?php echo $row["nationality"]; ?>";
    var city = "<?php echo $row["city"]; ?>";
    var mailing_address = `<?php echo $row["mailing_address"]; ?>`;
    var country_code = "<?php echo $row["country_code"]; ?>";
    var mobile_code = "<?php echo $row["mobile_code"]; ?>";
    var number = "<?php echo $row["number"]; ?>";
    var highest_qualification = "<?php echo $row["highest_qualification"]; ?>";
    var current_status = "<?php echo $row["current_status"]; ?>";
    var future_plan = "<?php echo $row["future_plan"]; ?>";
    var lawyer_image = "<?php echo $row["lawyer_image"]; ?>";
    var lawyer_types = "<?php echo $row["lawyer_types"]; ?>";
    var short_about_me = `<?php echo $row["short_about_me"]; ?>`;
    var about_me = `<?php echo $row["about_me"]; ?>`;
    var lawyer_location = "<?php echo $row["lawyer_location"]; ?>";
    var lawyer_casses_done = "<?php echo $row["lawyer_casses_done"]; ?>";
    var lawyer_contact_countrycode = "<?php echo $row["lawyer_contact_countrycode"]; ?>";
    var lawyer_contact_number = "<?php echo $row["lawyer_contact_number"]; ?>";
    var lawyer_email = "<?php echo $row["lawyer_email"]; ?>";
    var lawyer_personal_statement = `<?php echo $row["lawyer_personal_statement"]; ?>`;
    var service1 = "<?php echo $row["service1"]; ?>";
    var service1Detail = "<?php echo $row["service1Detail"]; ?>";
    var service1_Icon = "<?php echo $row["service1_Icon"]; ?>";
    if((first_name && gender && dob_month && cnic && cnic_type && country && nationality && city && mailing_address && number && highest_qualification && current_status && future_plan && lawyer_image && lawyer_types && short_about_me && about_me && lawyer_location && lawyer_casses_done && lawyer_contact_countrycode && lawyer_contact_number && lawyer_email && lawyer_personal_statement && service1 && service1Detail && service1_Icon) == ""){
        window.location.href = "my-profile.php";
    }
    if((dob_day && dob_year && country_code && mobile_code) == "0"){
        window.location.href = "my-profile.php";
    }
</script>
<?php } } ?>
<?php 
    $role = "";
    $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' limit 1");
    while($row=mysqli_fetch_array($query)){
        $role = $row["role"];
        if($role=="Client") { 
?>
<script type="text/javascript">
    var first_name = "<?php echo $row["first_name"]; ?>";
    var gender = "<?php echo $row["gender"]; ?>";
    var dob_day = "<?php echo $row["dob_day"]; ?>";
    var dob_month = "<?php echo $row["dob_month"]; ?>";
    var dob_year = "<?php echo $row["dob_year"]; ?>";
    var cnic = "<?php echo $row["cnic"]; ?>";
    var cnic_type = "<?php echo $row["cnic_type"]; ?>";
    var country = "<?php echo $row["country"]; ?>";
    var nationality = "<?php echo $row["nationality"]; ?>";
    var city = "<?php echo $row["city"]; ?>";
    var mailing_address = `<?php echo $row["mailing_address"]; ?>`;
    var country_code = "<?php echo $row["country_code"]; ?>";
    var mobile_code = "<?php echo $row["mobile_code"]; ?>";
    var number = "<?php echo $row["number"]; ?>";
    var highest_qualification = "<?php echo $row["highest_qualification"]; ?>";
    var current_status = "<?php echo $row["current_status"]; ?>";
    var future_plan = "<?php echo $row["future_plan"]; ?>";
    if((first_name && gender && dob_month && cnic && cnic_type && country && nationality && city && mailing_address && number && highest_qualification && current_status && future_plan) == ""){
        window.location.href = "my-profile.php";
    }
    if((dob_day && dob_year && country_code && mobile_code) == "0"){
        window.location.href = "my-profile.php";
    }
</script>
<?php } } ?>





<?php
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $lawyerfname = $row["first_name"];
      $lawyermname = $row["middle_name"];
      $lawyerlname = $row["last_name"];
?>
<!-- Page Title Section Start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading"><?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?></h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <a href="our-lawyers.php">Our Lawyers</a> / <span><a href="our-lawyers-details.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>"><?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?></a></span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title Section End -->



<!-- Parallax Section Start -->
<div class="parallax-section">
  <div class="container">
    <div class="attorneytop">
      <div class="row">
        <div class="col-md-4 col-sm-4 sambox3" data-tilt data-tilt-glare data-tilt-max-glare="0.3"><img src="images/lawyers/default_lawyer_image.png" id="lawyerImagePreview" class="lawimg hvr-bob" width="100%" alt="" /></div>
        <div class="col-md-8 col-sm-8" style="margin-top:20px;">
          <h2><?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?></h2>
          <h3><?php echo $row["lawyer_types"]; ?></h3>
          <p><?php echo $row["about_me"]; ?></p>
          <ul class="address">
            <li><i class="fa fa-phone"></i> <a href="tel:+<?php echo $row["lawyer_contact_countrycode"]; ?><?php echo $row["lawyer_contact_mobilecode"]; ?><?php echo $row['lawyer_contact_number']; ?>">+<?php echo $row["lawyer_contact_countrycode"]; ?> <?php echo $row["lawyer_contact_mobilecode"]; ?> <?php echo $row['lawyer_contact_number']; ?></a></li>
            <li><i class="fa fa-envelope-o"></i><a href="mailto:<?php echo $row["lawyer_email"]; ?>"><?php echo $row["lawyer_email"]; ?></a></li>
            <li id="lawyer_website"><i class="fa fa-globe"></i><a href="<?php echo $row["lawyer_website"]; ?>" target="_blank"><?php echo $row["lawyer_website"]; ?></a></li>
            <li><i class="fa fa-map"></i><a href="#" style="pointer-events: none;"><?php echo $row["lawyer_location"]; ?></a></li>
          </ul>
          <ul class="list-inline social">
            <li id="lawyer_twitter"> <a href="<?php echo $row["lawyer_twitter"]; ?>" target="_blank" class="hvr-float-shadow"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li id="lawyer_facebook"> <a href="<?php echo $row["lawyer_facebook"]; ?>" target="_blank" class="hvr-float-shadow"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li id="lawyer_linkedin"> <a href="<?php echo $row["lawyer_linkedin"]; ?>" target="_blank" class="hvr-float-shadow"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
            <!-- <li> <a href="javascript:void(0);" class="hvr-float-shadow"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> </li> -->
            <li id="lawyer_youtube"> <a href="<?php echo $row["lawyer_youtube"]; ?>" target="_blank" class="hvr-float-shadow"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
            <li id="lawyer_googleplus"> <a href="<?php echo $row["lawyer_googleplus"]; ?>" target="_blank" class="hvr-float-shadow"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
            <li id="lawyer_skype"> <a href="<?php echo $row["lawyer_skype"]; ?>" target="_blank" class="hvr-float-shadow"><i class="fa fa-skype" aria-hidden="true"></i></a> </li>
          </ul>

          <script type="text/javascript">
            var lawyer_twitter = "<?php echo $row["lawyer_twitter"]; ?>";
            if(lawyer_twitter == "") {
              document.getElementById("lawyer_twitter").style.display = "none";
            } else {
              document.getElementById("lawyer_twitter").style.display = "inline-block";
            }
            var lawyer_facebook = "<?php echo $row["lawyer_facebook"]; ?>";
            if(lawyer_facebook == "") {
              document.getElementById("lawyer_facebook").style.display = "none";
            } else {
              document.getElementById("lawyer_facebook").style.display = "inline-block";
            }
            var lawyer_linkedin = "<?php echo $row["lawyer_linkedin"]; ?>";
            if(lawyer_linkedin == "") {
              document.getElementById("lawyer_linkedin").style.display = "none";
            } else {
              document.getElementById("lawyer_linkedin").style.display = "inline-block";
            }
            var lawyer_youtube = "<?php echo $row["lawyer_youtube"]; ?>";
            if(lawyer_youtube == "") {
              document.getElementById("lawyer_youtube").style.display = "none";
            } else {
              document.getElementById("lawyer_youtube").style.display = "inline-block";
            }
            var lawyer_googleplus = "<?php echo $row["lawyer_googleplus"]; ?>";
            if(lawyer_googleplus == "") {
              document.getElementById("lawyer_googleplus").style.display = "none";
            } else {
              document.getElementById("lawyer_googleplus").style.display = "inline-block";
            }
            var lawyer_skype = "<?php echo $row["lawyer_skype"]; ?>";
            if(lawyer_skype == "") {
              document.getElementById("lawyer_skype").style.display = "none";
            } else {
              document.getElementById("lawyer_skype").style.display = "inline-block";
            }
            var website = "<?php echo $row["lawyer_website"]; ?>";
            if(website == "") {
              document.getElementById("lawyer_website").style.display = "none";
            } else {
              document.getElementById("lawyer_website").style.display = "inline-block";
            }
          </script>
          
          <div class="attorneydetail">
      <h1>Personal Statement</h1>
      <p style="text-align:justify;"><?php echo $row["lawyer_personal_statement"]; ?></p>
      
    </div>
          
        </div>
      </div>
    </div>
    
    <div class="atorinfo">
    <div class="row">
        <div class="col-md-6">
          <h2>Experience</h2>
          <ul>
            <li>Pellentesque nec tortor sit amet risus ornare malesuada sit amet eu felis.</li>
            <li>Proin eu leo mattis, mollis ligula et, tincidunt elit.</li>
            <li>Praesent convallis lectus vel ipsum blandit dictum.</li>
            <li>Suspendisse ac mauris sed sem pharetra venenatis sed ut risus.</li>
            <li>Quisque porttitor libero et consequat porta.</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h2>Education</h2>
          <ul>
            <li>Etiam a ipsum mattis, suscipit turpis ut, placerat dolor.</li>
            <li>Quisque eget tellus id est aliquam dictum.</li>
            <li>Sed eu augue ullamcorper, pulvinar sem eget, ultricies justo.</li>
            <li>Nunc fringilla orci vel arcu facilisis aliquam.</li>
            <li>Vestibulum quis nisi porttitor, cursus odio vulputate, feugiat nibh.</li>
          </ul>
        </div>
      </div>
      <div id="service">
        <div class="section-title" >
          <h3>Services <span>My Offer</span></h3>
        </div>
        <div class="row"> 
          <!-- Service 1 -->
          <div class="col-md-4 col-sm-6 hvr-float-shadow" id="service1">
            <div class="service-thumb">
              <div class="thumb-icon"><i class="<?php echo $row["service1_Icon"]; ?>" aria-hidden="true"></i></div>
              <h4><?php echo $row["service1"]; ?></h4>
              <p><?php echo $row["service1Detail"]; ?></p>
            </div>
          </div>
          
          <!-- Service 2 -->
          <div class="col-md-4 col-sm-6 hvr-float-shadow" id="service2">
            <div class="service-thumb">
              <div class="thumb-icon"><i class="<?php echo $row["service2_Icon"]; ?>" aria-hidden="true"></i></div>
              <h4><?php echo $row["service2"]; ?></h4>
              <p><?php echo $row["service2Detail"]; ?></p>
            </div>
          </div>
          
          <!-- Service 3 -->
          <div class="col-md-4 col-sm-6 hvr-float-shadow" id="service3">
            <div class="service-thumb">
              <div class="thumb-icon"><i class="<?php echo $row["service3_Icon"]; ?>" aria-hidden="true"></i></div>
              <h4><?php echo $row["service3"]; ?></h4>
              <p><?php echo $row["service3Detail"]; ?></p>
            </div>
          </div>
          
          <!-- Service 4 -->
          <div class="col-md-4 col-sm-6 hvr-float-shadow" id="service4">
            <div class="service-thumb">
              <div class="thumb-icon"><i class="<?php echo $row["service4_Icon"]; ?>" aria-hidden="true"></i></div>
              <h4><?php echo $row["service4"]; ?></h4>
              <p><?php echo $row["service4Detail"]; ?></p>
            </div>
          </div>
          
          <!-- Service 5 -->
          <div class="col-md-4 col-sm-6 hvr-float-shadow" id="service5">
            <div class="service-thumb">
              <div class="thumb-icon"><i class="<?php echo $row["service5_Icon"]; ?>" aria-hidden="true"></i></div>
              <h4><?php echo $row["service5"]; ?></h4>
              <p><?php echo $row["service5Detail"]; ?></p>
            </div>
          </div>
          
          <!-- Service 6 -->
          <div class="col-md-4 col-sm-6 hvr-float-shadow" id="service6">
            <div class="service-thumb">
              <div class="thumb-icon"><i class="<?php echo $row["service6_Icon"]; ?>" aria-hidden="true"></i></div>
              <h4><?php echo $row["service6"]; ?></h4>
              <p><?php echo $row["service6Detail"]; ?></p>
            </div>
          </div>


          <script type="text/javascript">
              var service1 = "<?php echo $row["service1"]; ?>";
              if(service1 == "") {
                document.getElementById("service1").style.display = "none";
              } else {
                document.getElementById("service1").style.display = "block";
              }
              var service2 = "<?php echo $row["service2"]; ?>";
              if(service2 == "") {
                document.getElementById("service2").style.display = "none";
              } else {
                document.getElementById("service2").style.display = "block";
              }
              var service3 = "<?php echo $row["service3"]; ?>";
              if(service3 == "") {
                document.getElementById("service3").style.display = "none";
              } else {
                document.getElementById("service3").style.display = "block";
              }
              var service4 = "<?php echo $row["service4"]; ?>";
              if(service4 == "") {
                document.getElementById("service4").style.display = "none";
              } else {
                document.getElementById("service4").style.display = "block";
              }
              var service5 = "<?php echo $row["service5"]; ?>";
              if(service5 == "") {
                document.getElementById("service5").style.display = "none";
              } else {
                document.getElementById("service5").style.display = "block";
              }
              var service6 = "<?php echo $row["service6"]; ?>";
              if(service6 == "") {
                document.getElementById("service6").style.display = "none";
              } else {
                document.getElementById("service6").style.display = "block";
              }
          </script>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <a href="appoinment-book.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>" class="btn btn-primary btn-lg" style="background-color:#b89b5e ;">Book An Appointment</a>
        </div>
      </div>
    </div>
    <script type="text/javascript">
        <?php
            $query2=mysqli_query($conn,"select * from lawyer_details where user_id='".$id."'");
            while($row2=mysqli_fetch_array($query2)){
        ?>
        var lawyer_image = "<?php echo $row2["lawyer_image"]; ?>";
        if(lawyer_image == ""){
            document.getElementById("lawyerImagePreview").src="images/lawyers/default_lawyer_image.png";
        }else{
            document.getElementById("lawyerImagePreview").src="<?php echo $row2["lawyer_image"]; ?>";
        }
        <?php } ?>
    </script>




<div class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="section-title-privacy-policy">
                <h2 class="text-center"><?php echo $lawyerfname; echo $lawyermname; echo $lawyerlname; ?> Appointments</h2><br>
            </div>
            <div class="col-md-12 text-center" id="appointmentPreview" style="overflow: scroll;">
                <table class="table table-striped table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th class="text-center">Client Name</th>
                            <th class="text-center">Client Selected Service</th>
                            <th class="text-center">Appointment Start Time</th>
                            <th class="text-center">Appointment End Time</th>
                            <th class="text-center">Appointment Date</th>
                            <th class="text-center">Appointment Created On</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "select * from appoinment where lawyer_id='".$id."'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $i = 1;
                            while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row["client_name"]; ?></td>
                            <td><?php echo $row["lawyer_service"]; ?></td>
                            <td><?php echo $row["start_time"]; ?></td>
                            <td><?php echo $row["end_time"]; ?></td>
                            <td><?php echo $row["appoinment_date"]; ?></td>
                            <td><?php echo $row["appoinment_created_on"]; ?></td>
                        </tr>
                    <?php $i++; } } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



    <!-- Lawyers Contact Section Start -->
    <?php
    require("includes/includes-sections/lawyers-contact-section.inc.php");
    ?>
    <!-- Lawyers Contact Section End -->


  </div>
</div>
<!-- Parallax Section End -->
<?php } } ?>






<?php
require("includes/footer.inc.php");
?>