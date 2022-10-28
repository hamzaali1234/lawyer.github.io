<?php
$titleTag = '';
$title = "Lawyers Website - Our Lawyers";// for dynamic title on selected page
$currentPage = 'Our Lawyers';// for add dynamic active class on selected page on header
$pageTitle = "Our Lawyers";// for add dynamic text of Page Title Section
$page="our-lawyers.php";// for add dynamic url text of Page Title Section
error_reporting(0);
$search = $_POST["nav-search-input"];
require("includes/header.inc.php");
$search_input = $_POST['search_input'];
$search_radio = $_POST['search_radio'];
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




<!-- Page Title Section Start -->
<?php
require("includes/includes-sections/page-title-section.inc.php");
?>
<!-- Page Title Section End -->




<script type="text/javascript">
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function formValidation() {
        var search_input = document.getElementById("search_input").value;
        
        // Defining error variables with a default value
        var search_inputErr = true;


        // Start Validate Client Message
        if(search_input == "") {
            printError("search_inputErr", "");
            search_inputErr = false;
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(search_input) === false){
                printError("search_inputErr", "Please! Enter Only Text...");
            } else {
                printError("search_inputErr", "");
                search_inputErr = false;
            }
        }
        // End Validate Client Message

        if((search_inputErr) == true){
            return false;
        }else{
            return true;
        }
    }
</script>



<div class="container our-lawyers-search">
  <div class="row">
  <form action="" method="POST" onsubmit="return formValidation()">
    <div class="col-md-2 col-sm-6 text-center" style="padding-top:15px;">
      <input type="radio" name="search_radio" id="search_location" value="location"><span style="margin-right:8px;font-weight:bold;" onclick="onClickSearchLoaction()">Location</span>
      <input type="radio" name="search_radio" id="search_services" value="services"><span style="font-weight:bold;" onclick="onClickSearchServices()">Services</span>
    </div>
    <div class="col-md-9">
      <span class="search-icon" style="color:#b89b5e"><i class="fa fa-search" ></i></span>
      <input type="text" class="form-control" placeholder="Search Lawyers Here..." value="<?php echo $search; ?>" name="search_input" id="search_input">
      <span id="search_inputErr" class="error"></span>
    </div>
    <div class="col-md-1 text-center">
      <input type="submit" value="Search" class="btn btn-primary" name="search" style="background-color:#b89b5e ;">
    </div>
  </form>
  </div>
</div>
<script type="text/javascript">
  function onClickSearchLoaction() {
    document.getElementById("search_location").checked = true;
  }
  function onClickSearchServices() {
    document.getElementById("search_services").checked = true;
  }
</script>



<!-- Parallax Section Start -->
<div class="parallax-section our-lawyers">
  <div class="container">
    <div class="row"> 
    <?php
      $role = "Lawyer";
      if($search_radio == "" && !$search_input == ""){
        $sql = "select * from user inner join lawyer_details on user.id=lawyer_details.user_id where user.status=1 and user.role='".$role."' and user.first_name like '%$search_input%' or user.middle_name like '%$search_input%' or user.last_name like '%$search_input%' limit 8";
        $search_service = "";
        $search_location = "";
      }else{
        if($search_radio == "location" && !$search_input == ""){
          $sql = "select * from user inner join lawyer_details on user.id=lawyer_details.user_id where user.status=1 and user.role='".$role."' and lawyer_details.lawyer_location like '%$search_input%' limit 8";
          $search_location = "location";
        }elseif($search_radio == "services" && !$search_input == ""){
          $sql = "select * from user inner join lawyer_details on user.id=lawyer_details.user_id where user.status=1 and user.role='".$role."' and lawyer_details.service1 like '%$search_input%' limit 8";
          $search_service = "service";
        }else{
          $sql = "select * from user inner join lawyer_details on user.id=lawyer_details.user_id where user.status=1 and user.role='".$role."' limit 8";
          $search_service = "";
          $search_location = "";
        }
      }
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
      <!-- team 1 -->
      <div class="col-md-3 col-sm-6 hvr-float-shadow lawyer" id="lawyer<?php echo $row["id"]; ?>">
        <div class="team-thumb">
          <div class="thumb-image sambox3" style="margin-top:8px;" data-tilt data-tilt-glare data-tilt-max-glare="0.3"><a href="our-lawyers-details.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>"><img src="images/lawyers/default_lawyer_image.png" id="lawyerImagePreview<?php echo $row["id"]; ?>" class="animate" alt=""></a></div>
          <a href="our-lawyers-details.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>"><h4><?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?></h4></a>
          <h5><?php echo $row["lawyer_types"]; ?></h5>
          <p style="text-align:justify; white-space:nowrap; overflow:hidden; text-overflow: ellipsis;"><?php echo $row["short_about_me"]; ?></p>
          <div class="col-md-12" style="padding-bottom:5%;padding-left:0px;margin-left:-13px;">
            <div class="text-left"><div><i class="fa fa-users"></i></div>Casses Done:<span style="font-size:20px;"><?php echo $row["lawyer_casses_done"]; ?></span></div>
            <div class="text-left"><div><i class="fa fa-phone"></i></div>Contact No:<span><a href="tel:+<?php echo $row["lawyer_contact_countrycode"]; ?><?php echo $row["lawyer_contact_mobilecode"]; ?><?php echo $row['lawyer_contact_number']; ?>">+<?php echo $row["lawyer_contact_countrycode"]; ?> <?php echo $row["lawyer_contact_mobilecode"]; ?> <?php echo $row['lawyer_contact_number']; ?></a></span></div>
            <div class="text-left"><div><i class="fa fa-home"></i></div>Location:<span><?php echo $row["lawyer_location"]; ?></span></div>
            <div class="text-left"><div><i class="fa fa-cogs"></i></div>Services:<span><?php echo $row["service1"]; ?></span></div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        var lawyer_image = "<?php echo $row["lawyer_image"]; ?>";
        if(lawyer_image == ""){
            document.getElementById("lawyerImagePreview<?php echo $row["id"]; ?>").src = "images/lawyers/default_lawyer_image.png";
        }else{
            document.getElementById("lawyerImagePreview<?php echo $row["id"]; ?>").src = "<?php echo $row["lawyer_image"]; ?>";
        }
        var lawyer_twitter = "<?php echo $row["lawyer_twitter"]; ?>";
        if(lawyer_twitter == "") {
          document.getElementById("lawyer_twitter<?php echo $row["id"]; ?>").style.display = "none";
        } else {
          document.getElementById("lawyer_twitter<?php echo $row["id"]; ?>").style.display = "inline-block";
        }
        var lawyer_facebook = "<?php echo $row["lawyer_facebook"]; ?>";
        if(lawyer_facebook == "") {
          document.getElementById("lawyer_facebook<?php echo $row["id"]; ?>").style.display = "none";
        } else {
          document.getElementById("lawyer_facebook<?php echo $row["id"]; ?>").style.display = "inline-block";
        }
        var lawyer_googleplus = "<?php echo $row["lawyer_googleplus"]; ?>";
        if(lawyer_googleplus == "") {
          document.getElementById("lawyer_googleplus<?php echo $row["id"]; ?>").style.display = "none";
        } else {
          document.getElementById("lawyer_googleplus<?php echo $row["id"]; ?>").style.display = "inline-block";
        }
        var lawyer_image = "<?php echo $row["lawyer_image"]; ?>";
        var first_name = "<?php echo $row["first_name"]; ?>";
        var lawyer_types = "<?php echo $row["lawyer_types"]; ?>";
        var short_about_me = "<?php echo $row["short_about_me"]; ?>";
        var lawyer_casses_done = "<?php echo $row["lawyer_casses_done"]; ?>";
        var lawyer_contact_countrycode = "<?php echo $row["lawyer_contact_countrycode"]; ?>";
        var lawyer_contact_mobilecode = "<?php echo $row["lawyer_contact_mobilecode"]; ?>";
        var lawyer_contact_number = "<?php echo $row["lawyer_contact_number"]; ?>";
        var lawyer_location = "<?php echo $row["lawyer_location"]; ?>";
        var service1 = "<?php echo $row["service1"]; ?>";
        if(lawyer_image == "" || first_name == "" || lawyer_types == "" || short_about_me == "" || lawyer_casses_done == "" || lawyer_contact_countrycode == "" 
        || lawyer_contact_mobilecode == "" || lawyer_contact_number == "" || lawyer_location == "" || service1 == "") {
          document.getElementById("lawyer<?php echo $row["id"]; ?>").style.display = "none";
        } else {
          document.getElementById("lawyer<?php echo $row["id"]; ?>").style.display = "block";
        }
      </script>
      <!-- team 1 -->
      <?php } }else{ ?> 
        <div class="error-page-wrap">
          <div class="container">
            <div class="col-md-12 text-center errormain" style="padding-top:0px;">
              <h2>4<span style="color:#db3636;">0</span>4</h2>
              <h3>Lawyers not Found</h3>
              <div class="error-msg">
                <p id="searching_error_msg"></p>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          var search_location = "<?php echo $search_location; ?>";
          var search_service = "<?php echo $search_service; ?>";
          if(search_location == "location"){
            document.getElementById("searching_error_msg").innerHTML = 'You are searching for someone location <span style="color:#db3636;font-weight:bold;">"<?php echo $search_input; ?>"</span>, this location of a lawyer is not available.';
          }
          if(search_service == "service"){
            document.getElementById("searching_error_msg").innerHTML = 'You are searching for someone service <span style="color:#db3636;font-weight:bold;">"<?php echo $search_input; ?>"</span>, this service of a lawyer is not available.';
          }
          if(search_location == "" && search_service == ""){
            document.getElementById("searching_error_msg").innerHTML = 'You are searching for someone named <span style="color:#db3636;font-weight:bold;">"<?php echo $search_input; ?>"</span>, that lawyer is not available.';
          }
        </script>
      <?php } ?>
    </div>
  </div>
</div>
<!-- Parallax Section End -->



<?php
require("includes/footer.inc.php");
?>