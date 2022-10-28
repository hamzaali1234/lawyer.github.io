<?php 
    if(isset($_POST["submit_client"])){
        $userId = $_POST["userId"];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $cnic = $_POST['cnic'];
        $cnic_type = $_POST['personalORparents'];
        $country = $_POST['country'];
        $nationality = $_POST['nationality'];
        $city = $_POST['city'];
        $mailingaddress = $_POST['mailingaddress'];
        $countrycode = $_POST['countrycode'];
        $mobilecode = $_POST['mobilecode'];
        $number = $_POST['number'];
        $highest_qualification = $_POST['highest_qualification'];
        $specialization = $_POST['specialization'];
        $other = $_POST['other'];
        $current_status = $_POST['current_status'];
        $future_plan = $_POST['future_plan'];
        $employment_status = $_POST['employment_status'];
        $experience_level = $_POST['experience_level'];
        $job_city = $_POST['job_city'];
        $salary_income = $_POST['salary_income'];
        mysqli_query($conn,"update user set first_name='".$fname."' , middle_name='".$mname."' , last_name='".$lname."' , gender='".$gender."' , dob_day='".$day."' , dob_month='".$month."' , dob_year='".$year."' , cnic='".$cnic."' , cnic_type='".$cnic_type."' , nationality='".$nationality."' , city='".$city."' , mailing_address='".$mailingaddress."' , country_code='".$countrycode."' , mobile_code='".$mobilecode."' , number='".$number."' , highest_qualification='".$highest_qualification."' , specialization='".$specialization."' , specialization_other='".$other."' , current_status='".$current_status."' , future_plan='".$future_plan."' , employment_status='".$employment_status."' , experience_level='".$experience_level."' , job_city='".$job_city."' , salary_income='".$salary_income."' , country='".$country."' where username='".$_SESSION['username']."' limit 1");
    }
?>





<script type="text/javascript">
    <?php
        require("includes/connection.inc.php");
        $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' limit 1");
        while($row=mysqli_fetch_array($query)){
    ?>
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function formValidation() {
        var imageProfile = document.getElementById("profileImage").value;
        var fname = document.getElementById("fname").value;
        var mname = document.getElementById("mname").value;
        var lname = document.getElementById("lname").value;
        var gender = document.getElementById("submit-form").gender.value;
        var dobDay = document.getElementById("day").value;
        var dobMonth = document.getElementById("month").value;
        var dobYear = document.getElementById("year").value;
        var cnic = document.getElementById("cnic").value;
        var cnicType = document.getElementById("submit-form").personalORparents.value;
        var country = document.getElementById("country").value;
        var nationality = document.getElementById("nationality").value;
        var city = document.getElementById("city").value;
        var mailingaddress = document.getElementById("mailingaddress").value;
        var countrycode = document.getElementById("countrycode").value;
        var mobilecode = document.getElementById("mobilecode").value;
        var mobilenumber = document.getElementById("mobilenumber").value;
        var highestQualification = document.getElementById("highest_qualification").value;
        var specialization = document.getElementById("specialization").value;
        var other = document.getElementById("other").value;
        var current_status = document.getElementById("current_status").value;
        var future_plan = document.getElementById("future_plan").value;
        var employment_status = document.getElementById("employment_status").value;
        var experience_level = document.getElementById("experience_level").value;
        var job_city = document.getElementById("job_city").value;
        
        // Defining error variables with a default value
        var profileImageErr = fnameErr = mnameErr = lnameErr = genderErr = dobErr = dob_dayErr = dob_monthErr = dob_yearErr = cnicErr = cnic_typeErr = countryErr = nationalityErr = cityErr = mailingaddressErr = countrycodeErr = mobilecodeErr = mobilenumberErr = highest_qualificationErr = specializationErr = otherErr = current_statusErr = employment_statusErr = experience_levelErr = job_cityErr = true;

        // Start Validate Profile Image
        if(imageProfile == "") {
            printError("profileImageErr", "Please! Upload Your Profile Image");
        } else {
            printError("profileImageErr", "");
            profileImageErr = false;
        }
        // End Validate Profile Image

        // Start Validate First Name
        if(fname == "") {
            printError("fnameErr", "Please! Enter Your First Name");
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(fname) === false) {
                printError("fnameErr", "Please! Enter a valid First Name");
            } else {
                printError("fnameErr", "");
                fnameErr = false;
            }
        }
        // End Validate First Name

        // Start Validate Middle Name
        if(mname == "") {
            printError("mnameErr", "");
            mnameErr = false;
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(mname) === false) {
                printError("mnameErr", "Please! Enter a valid Middle Name");
            } else {
                printError("mnameErr", "");
                mnameErr = false;
            }
        }
        // End Validate Middle Name

        // Start Validate Last Name
        if(lname == "") {
            printError("lnameErr", "");
            lnameErr = false;
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(lname) === false) {
                printError("lnameErr", "Please! Enter a valid Last Name");
            } else {
                printError("lnameErr", "");
                lnameErr = false;
            }
        }
        // End Validate Last Name

        // Start Validate Gender
        if(gender == "") {
            printError("genderErr", "Please! Select Your Gender");
        } else {
            printError("genderErr", "");
            genderErr = false;
        }
        // End Validate Gender

        // Start Validate DOB Day
        if(dobDay == "day") {
            printError("dob_dayErr", "Please! Select Your Day");
        } else {
            printError("dob_dayErr", "");
            dob_dayErr = false;
        }
        // End Validate DOB Day

        // Start Validate DOB Month
        if(dobMonth == "month") {
            printError("dob_monthErr", "Please! Select Your Month");
        } else {
            printError("dob_monthErr", "");
            dob_monthErr = false;
        }
        // End Validate DOB Month

        // Start Validate DOB Year
        if(dobYear == "year") {
            printError("dob_yearErr", "Please! Select Your Year");
        } else {
            printError("dob_yearErr", "");
            dob_yearErr = false;
        }
        // End Validate DOB Year

        // Start Validate DOB
        if((dob_dayErr || dob_monthErr || dob_yearErr) == true) {
            printError("dobErr", "Please! Select Your Date Of Birth");
        } else {
            printError("dobErr", "");
            dobErr = false;
        }
        // End Validate DOB

        // Start Validate CNIC Type
        if(cnicType == "") {
            printError("cnic_typeErr", "Please! Select 'Personal or Parents/Guardians'");
        } else {
            printError("cnic_typeErr", "");
            cnic_typeErr = false;
        }
        // End Validate CNIC Type

        // Start Validate CNIC
        if(cnic == "") {
            printError("cnicErr", "Please! Enter Your CNIC/NICOP/B-form Number");
        } else {
            var regex = /^[1-9]\d{12}$/;
            if(regex.test(cnic) === false) {
                printError("cnicErr", "Please! Enter a valid 13 digit CNIC/NICOP/B-form Number");
            } else{
                printError("cnicErr", "");
                cnicErr = false;
            }
        }
        // End Validate CNIC

        // Start Validate Country
        if(country == "country") {
            printError("countryErr", "Please! Select Your Country");
        } else {
            printError("countryErr", "");
            countryErr = false;
        }
        // End Validate Country

        // Start Validate Nationality
        if(nationality == "nationality") {
            printError("nationalityErr", "Please! Select Your Nationality");
        } else {
            printError("nationalityErr", "");
            nationalityErr = false;
        }
        // End Validate Nationality

        // Start Validate City
        if(city == "city") {
            printError("cityErr", "Please! Select Your City");
        } else {
            printError("cityErr", "");
            cityErr = false;
        }
        // End Validate City

        // Start Validate Mailing/Postal Address
        if(mailingaddress == "") {
            printError("mailingaddressErr", "Please! Select Your Mailing/Postal Address");
        } else {
            printError("mailingaddressErr", "");
            mailingaddressErr = false;
        }
        // End Validate Mailing/Postal Address

        // Start Validate Country Code
        if(countrycode == "countrycode") {
            printError("countrycodeErr", "Please! Select Your Country Code");
        } else {
            printError("countrycodeErr", "");
            countrycodeErr = false;
        }
        // End Validate Country Code

        // Start Validate Mobile Operator Code
        if(mobilecode == "0") {
            printError("mobilecodeErr", "Please! Select Your Mobile Operator Code");
        } else {
            printError("mobilecodeErr", "");
            mobilecodeErr = false;
        }
        // End Validate Mobile Operator Code

        // Start Validate Mobile Number
        if(mobilenumber == "") {
            printError("mobilenumberErr", "Please! Enter Your Mobile Number");
        } else {
            var regex = /^[1-9]\d{6}$/;
            if(regex.test(mobilenumber) === false) {
                printError("mobilenumberErr", "Please! Enter a valid 7 last digit of Mobile Number");
            } else{
                printError("mobilenumberErr", "");
                mobilenumberErr = false;
            }
        }
        // End Validate Mobile Number

        // Start Validate Highest Qualification
        if(highestQualification == "") {
            printError("highest_qualificationErr", "Please! Select Your Highest Qualification");
        } else {
            printError("highest_qualificationErr", "");
            highest_qualificationErr = false;
        }
        // End Validate Highest Qualification
        
        // Start Validate Specialization
        if(highestQualification == "Middle" || highestQualification == ""){
            specializationErr = false;
        } else {
            if(specialization == "") {
                printError("specializationErr", "Please! Select Your Specialization");
            } else {
                printError("specializationErr", "");
                specializationErr = false;
            }
        }
        // End Validate Specialization

        // Start Validate Specialization Other
        if(specialization == "Other"){
            if(other == "") {
                printError("otherErr", "Please! Enter Your Other Specialization");
            } else {
                var regex = /^[a-zA-Z\s]+$/;                
                if(regex.test(other) === false) {
                    printError("otherErr", "Please! Enter text only...");
                } else {
                    printError("otherErr", "");
                    otherErr = false;
                }
            }
        } else {
            otherErr = false;
        }
        // End Validate Specialization Other

        // Start Validate Current Status
        if(current_status == "") {
            printError("current_statusErr", "Please! Select Your Current Status");
        } else {
            printError("current_statusErr", "");
            current_statusErr = false;
        }
        // End Validate Current Status

        // Start Validate Future Plan
        if(future_plan == "") {
            printError("future_planErr", "Please! Select Your Future Plan");
        } else {
            printError("future_planErr", "");
            future_planErr = false;
        }
        // End Validate Future Plan

        // Start Validate Employment Status
        if(!current_status == "Employed" || !current_status == "Business Owner" || current_status == "" || current_status == "Student" || current_status == "Housewife" || current_status == "Unemployed"){
            employment_statusErr = false;
        } else {
            if(employment_status == "") {
                printError("employment_statusErr", "Please! Select Your Employment Status");
            } else {
                printError("employment_statusErr", "");
                employment_statusErr = false;
            }
        }
        // End Validate Employment Status

        // Start Validate Experience Level
        if(!current_status == "Employed" || !current_status == "Business Owner" || current_status == "" || current_status == "Student" || current_status == "Housewife" || current_status == "Unemployed"){
            experience_levelErr = false;
        } else {
            if(experience_level == "") {
                printError("experience_levelErr", "Please! Select Your Experience Level");
            } else {
                printError("experience_levelErr", "");
                experience_levelErr = false;
            }
        }
        // End Validate Experience Level

        // Start Validate Job City
        if(!current_status == "Employed" || !current_status == "Business Owner" || current_status == "" || current_status == "Student" || current_status == "Housewife" || current_status == "Unemployed"){
            job_cityErr = false;
        } else {
            if(job_city == "") {
                printError("job_cityErr", "Please! Select Your Job City");
            } else {
                printError("job_cityErr", "");
                job_cityErr = false;
            }
        }
        // End Validate Job City


        if((profileImageErr || fnameErr || mnameErr || lnameErr || genderErr || dobErr || dob_dayErr 
        || dob_monthErr || dob_yearErr || cnicErr || cnic_typeErr || countryErr || nationalityErr 
        || cityErr || mailingaddressErr || countrycodeErr || mobilecodeErr || mobilenumberErr 
        || highest_qualificationErr || specializationErr || otherErr || current_statusErr || future_planErr 
        || employment_statusErr || experience_levelErr || job_cityErr ) == true){
            return false;
        }else{
            return true;
        }
    }
    <?php } ?>
</script>








<!-- Profile Image Popup Start -->
<?php 
    require("includes/connection.inc.php");
    if(isset($_POST["submitProfileImg"])){
        $image = $_FILES['image'];
        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];
        $imageSize = $_FILES['image']['size'];
        $imageError = $_FILES['image']['error'];
        $imageType = $_FILES['image']['type'];
        $imageExt = explode('.', $imageName);
        $imageActualExt = strtolower(end($imageExt));
        $allowed = array('jpg', 'jpeg' , 'png');
        $imageMsg = "";
        if(in_array($imageActualExt, $allowed)){
            if($imageError === 0){
                if($imageSize < 125000){
                    $imageNameNew = uniqid('image',true).".".$imageActualExt;
                    $imageDestination = 'images/profile_images/'.$imageNameNew;
                    move_uploaded_file($imageTmpName,$imageDestination);
                } else {
                    $imageMsg = "Your image is too big!";
                }
            } else {
                $imageMsg = "There was an error uploading your image!";
            }
        }else{
            $imageMsg = "You can't upload files of this type!";
        }
        mysqli_query($conn,"update user set image='".$imageDestination."' where username='".$_SESSION['username']."' limit 1");
    }
    $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' limit 1");
    while($row=mysqli_fetch_array($query)){
?>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title text-center" id="exampleModalLongTitle">Profile Image</h2>
            </div>
            <div class="modal-body">
                <div class="avatar-upload" style="transform:scale(1.2);">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload" name="image">
                        <label for="imageUpload"></label>
                    </div>
                    <center>
                        <div class="avatar-preview">
                            <div id="imagePreview">
                            </div>
                        </div>
                    </center>
                </div>
                <div style="text-align: center; margin-top:80px;">
                <h4 id="usernameORnameImagePopup"></h4>
                    <i style="color: darkgrey; font-size: 8pt;">&nbsp;<b>Note:</b> JPG, JPEG & PNG file of Max. 2MB is required for Profile Picture</i>
                    <br><i style="color: #db3636; font-size: 8pt; font-weight: bold;"><?php echo $imageMsg; ?></i>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="submitProfileImg" value="Save Profile Image">
            </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    var username = "<?php echo $row['id']; ?>";
    if(username == "  "){
        document.getElementById("usernameORnameImagePopup").innerHTML = "<?php echo $row["username"]; ?>";
    }else{
        document.getElementById("usernameORnameImagePopup").innerHTML = "<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>";
    }
    var profile_image = "<?php echo $row["image"]; ?>";
    if(profile_image == ""){
        document.getElementById("imagePreview").style.backgroundImage="url(images/lawyers/default_profile_image.png)";
    }else{
        document.getElementById("imagePreview").style.backgroundImage="url(<?php echo $row["image"]; ?>)";
    }
</script>
<?php } ?>
<!-- Profile Image Popup End -->




<form action="" method="POST" id="submit-form" onsubmit="return formValidation()">
<div id="faqs" class="parallax-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3"> 
        <div class="profile sambox3" style="" data-tilt data-tilt-glare data-tilt-max-glare="0.3">
            <?php
                require("includes/connection.inc.php");
                $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' limit 1");
                while($row=mysqli_fetch_array($query)){
            ?>
            <div class="text-center">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type="button" id="modal" class="btn btn-primary" data-toggle="modal" value="" data-target="#exampleModalCenter">
                        <label for="modal"></label>
                    </div>
                    <center>
                        <div class="avatar-preview">
                            <div id="imagePreviewFinal">
                            </div>
                        </div>
                    </center>
                </div>
                <input type="hidden" id="profileImage" value="<?php echo $row["image"]; ?>">
                <!-- <img src="images/lawyer.png" id="profile-img"> -->
                <h4 id="usernameORname"></h4>
                <input type="hidden" id="username" value="<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>">
                <i style="color: darkgrey; font-size: 8pt;">&nbsp;<b>Note:</b> JPG, JPEG & PNG file of Max. 2MB is required for Profile Picture  </i>
                <br><span id="profileImageErr" style="color:#db3636;font-style: italic;font-weight: bold;font-size: 11px;"></span>
            </div>
            <div class="profile-body">
                <dl>
                    <dt id="profile_education_title">
                        <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
                    </dt>
                    <dd id="profile_education">
                        
                    </dd>
                    <dt>
                        <br />
                        <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>
                    </dt>
                    <dd>
                        <a href="#" style="pointer-events:none; color: #db3636;"><?php echo $row["email"]; ?></a>
                    </dd>
                </dl>
            </div>
            <script type="text/javascript">
                var username = document.getElementById("username").value;
                if(username == "  "){
                    document.getElementById("usernameORname").innerHTML = "<?php echo $row["username"]; ?>";
                }else{
                    document.getElementById("usernameORname").innerHTML = "<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>";
                }
                if("" == "<?php echo $row["highest_qualification"]; ?>"){
                    document.getElementById("profile_education").style.display = "none";
                    document.getElementById("profile_education_title").style.display = "none";
                }else{
                    document.getElementById("profile_education").style.display = "block";
                    document.getElementById("profile_education_title").style.display = "block";
                    var test = "Other";
                    if(test == "<?php echo $row["specialization"]; ?>"){
                        document.getElementById("profile_education").innerHTML = "<?php echo $row["highest_qualification"]; ?> - <?php echo $row["specialization_other"]; ?>";
                    }else{
                        document.getElementById("profile_education").innerHTML = "<?php echo $row["highest_qualification"]; ?> - <?php echo $row["specialization"]; ?>";
                    }
                    if("Middle" == "<?php echo $row["highest_qualification"]; ?>"){
                        document.getElementById("profile_education").innerHTML = "<?php echo $row["highest_qualification"]; ?>";
                    }
                }
                var profile_image = "<?php echo $row["image"]; ?>";
                if(profile_image == ""){
                    document.getElementById("imagePreviewFinal").style.backgroundImage="url(images/lawyers/default_profile_image.png)";
                }else{
                    document.getElementById("imagePreviewFinal").style.backgroundImage="url(<?php echo $row["image"]; ?>)";
                }
            </script>
            <?php } ?>
        </div>

      </div>
      
      <div class="col-md-9 profile-form">
        <div class="faqs">
          <div class="panel-group" id="accordion">
            <h4>Fields marked with an [<span style="color:#db3636">*</span>] are required</h4>
                <?php
                    require("includes/connection.inc.php");
                    $role="";
                    $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."'");
                    while($row=mysqli_fetch_array($query)){
                ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="" href="#collapse1">Personal Information</a> </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body" style="padding:30px; padding-top:20px;"> 
                    <div class="row">
                        <div class="col-md-4">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> First Name</label>
                            <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $row['first_name']; ?>" placeholder="First Name" style="height: 45px;">
                            <span id="fnameErr" class="error"></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="control-label">Middle Name</label>
                            <input type="text" class="form-control" name="mname" id="mname" value="<?php echo $row['middle_name']; ?>" placeholder="Middle Name" style="height: 45px;">
                            <span id="mnameErr" class="error"></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="control-label">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $row['last_name']; ?>" placeholder="Last Name" style="height: 45px;">
                            <span id="lnameErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Gender</label> <span id="genderErr" class="error"></span>
                        </div>
                        <div class="col-md-12">
                            <input type="radio" class="form-check-input" value="male" name="gender" id="male"><span style="margin-left:3px;" onclick="onClickMale()">Male</span>
                            <input type="radio" class="form-check-input" value="female" name="gender" id="female" style="margin-left:10px;"><span style="margin-left:3px;" onclick="onClickFemale()">Female</span><br>
                        </div>
                        <script type="text/javascript">
                            function onClickMale(){
                                document.getElementById("male").checked = true;
                            }
                            function onClickFemale(){
                                document.getElementById("female").checked = true;
                            }
                            var male = document.getElementById("male").value;
                            var female = document.getElementById("female").value;
                            if(male==<?php echo $row['gender']; ?>){
                                document.getElementById("male").checked = true;
                            }else{
                                document.getElementById("male").checked = false;
                            }
                            if(female==<?php echo $row['gender']; ?>){
                                document.getElementById("female").checked = true;
                            }else{
                                document.getElementById("female").checked = false;
                            }
                        </script>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Date of Birth</label> <span id="dobErr" class="error"></span>
                        </div>
                        <div class="col-md-4">
                            <select name="day" id="day" class="form-control" style="height: 45px;">
                                <option value="day" id="day0">Day</option>
                                <option value="1" id="day1">01</option>
                                <option value="2" id="day2">02</option>
                                <option value="3" id="day3">03</option>
                                <option value="4" id="day4">04</option>
                                <option value="5" id="day5">05</option>
                                <option value="6" id="day6">06</option>
                                <option value="7" id="day7">07</option>
                                <option value="8" id="day8">08</option>
                                <option value="9" id="day9">09</option>
                                <option value="10" id="day10">10</option>
                                <option value="11" id="day11">11</option>
                                <option value="12" id="day12">12</option>
                                <option value="13" id="day13">13</option>
                                <option value="14" id="day14">14</option>
                                <option value="15" id="day15">15</option>
                                <option value="16" id="day16">16</option>
                                <option value="17" id="day17">17</option>
                                <option value="18" id="day18">18</option>
                                <option value="19" id="day19">19</option>
                                <option value="20" id="day20">20</option>
                                <option value="21" id="day21">21</option>
                                <option value="22" id="day22">22</option>
                                <option value="23" id="day23">23</option>
                                <option value="24" id="day24">24</option>
                                <option value="25" id="day25">25</option>
                                <option value="26" id="day26">26</option>
                                <option value="27" id="day27">27</option>
                                <option value="28" id="day28">28</option>
                                <option value="29" id="day29">29</option>
                                <option value="30" id="day30">30</option>
                                <option value="31" id="day31">31</option>
                            </select>
                            <span id="dob_dayErr" class="error"></span>
                        </div>
                        <script type="text/javascript">
                            var day0 = document.getElementById("day0");
                            var day1 = document.getElementById("day1");
                            var day2 = document.getElementById("day2");
                            var day3 = document.getElementById("day3");
                            var day4 = document.getElementById("day4");
                            var day5 = document.getElementById("day5");
                            var day6 = document.getElementById("day6");
                            var day7 = document.getElementById("day7");
                            var day8 = document.getElementById("day8");
                            var day9 = document.getElementById("day9");
                            var day10 = document.getElementById("day10");
                            var day11 = document.getElementById("day11");
                            var day12 = document.getElementById("day12");
                            var day13 = document.getElementById("day13");
                            var day14 = document.getElementById("day14");
                            var day15 = document.getElementById("day15");
                            var day16 = document.getElementById("day16");
                            var day17 = document.getElementById("day17");
                            var day18 = document.getElementById("day18");
                            var day19 = document.getElementById("day19");
                            var day20 = document.getElementById("day20");
                            var day21 = document.getElementById("day21");
                            var day22 = document.getElementById("day22");
                            var day23 = document.getElementById("day23");
                            var day24 = document.getElementById("day24");
                            var day25 = document.getElementById("day25");
                            var day26 = document.getElementById("day26");
                            var day27 = document.getElementById("day27");
                            var day28 = document.getElementById("day28");
                            var day29 = document.getElementById("day29");
                            var day30 = document.getElementById("day30");
                            var day31 = document.getElementById("day31");
                            if (day0.value == "<?php echo $row['dob_day']; ?>"){
                                day0.selected = "selected";
                            }
                            if (day1.value == "<?php echo $row['dob_day']; ?>"){
                                day1.selected = "selected";
                            }
                            if (day2.value == "<?php echo $row['dob_day']; ?>"){
                                day2.selected = "selected";
                            }
                            if (day3.value == "<?php echo $row['dob_day']; ?>"){
                                day3.selected = "selected";
                            }
                            if (day4.value == "<?php echo $row['dob_day']; ?>"){
                                day4.selected = "selected";
                            }
                            if (day5.value == "<?php echo $row['dob_day']; ?>"){
                                day5.selected = "selected";
                            }
                            if (day6.value == "<?php echo $row['dob_day']; ?>"){
                                day6.selected = "selected";
                            }
                            if (day7.value == "<?php echo $row['dob_day']; ?>"){
                                day7.selected = "selected";
                            }
                            if (day8.value == "<?php echo $row['dob_day']; ?>"){
                                day8.selected = "selected";
                            }
                            if (day9.value == "<?php echo $row['dob_day']; ?>"){
                                day9.selected = "selected";
                            }
                            if (day10.value == "<?php echo $row['dob_day']; ?>"){
                                day10.selected = "selected";
                            }
                            if (day11.value == "<?php echo $row['dob_day']; ?>"){
                                day11.selected = "selected";
                            }
                            if (day12.value == "<?php echo $row['dob_day']; ?>"){
                                day12.selected = "selected";
                            }
                            if (day13.value == "<?php echo $row['dob_day']; ?>"){
                                day13.selected = "selected";
                            }
                            if (day14.value == "<?php echo $row['dob_day']; ?>"){
                                day14.selected = "selected";
                            }
                            if (day15.value == "<?php echo $row['dob_day']; ?>"){
                                day15.selected = "selected";
                            }
                            if (day16.value == "<?php echo $row['dob_day']; ?>"){
                                day16.selected = "selected";
                            }
                            if (day17.value == "<?php echo $row['dob_day']; ?>"){
                                day17.selected = "selected";
                            }
                            if (day18.value == "<?php echo $row['dob_day']; ?>"){
                                day18.selected = "selected";
                            }
                            if (day19.value == "<?php echo $row['dob_day']; ?>"){
                                day19.selected = "selected";
                            }
                            if (day20.value == "<?php echo $row['dob_day']; ?>"){
                                day20.selected = "selected";
                            }
                            if (day21.value == "<?php echo $row['dob_day']; ?>"){
                                day21.selected = "selected";
                            }
                            if (day22.value == "<?php echo $row['dob_day']; ?>"){
                                day22.selected = "selected";
                            }
                            if (day23.value == "<?php echo $row['dob_day']; ?>"){
                                day23.selected = "selected";
                            }
                            if (day24.value == "<?php echo $row['dob_day']; ?>"){
                                day24.selected = "selected";
                            }
                            if (day25.value == "<?php echo $row['dob_day']; ?>"){
                                day25.selected = "selected";
                            }
                            if (day26.value == "<?php echo $row['dob_day']; ?>"){
                                day26.selected = "selected";
                            }
                            if (day27.value == "<?php echo $row['dob_day']; ?>"){
                                day27.selected = "selected";
                            }
                            if (day28.value == "<?php echo $row['dob_day']; ?>"){
                                day28.selected = "selected";
                            }
                            if (day29.value == "<?php echo $row['dob_day']; ?>"){
                                day29.selected = "selected";
                            }
                            if (day30.value == "<?php echo $row['dob_day']; ?>"){
                                day30.selected = "selected";
                            }
                            if (day31.value == "<?php echo $row['dob_day']; ?>"){
                                day31.selected = "selected";
                            }
                        </script>
                        <div class="col-md-4">
                            <select name="month" id="month" class="form-control" style="height: 45px;">
                                <option value="month" id="month0">Month</option>
                                <option value="January" id="January">January</option>
                                <option value="February" id="February">February</option>
                                <option value="March" id="March">March</option>
                                <option value="April" id="April">April</option>
                                <option value="May" id="May">May</option>
                                <option value="June" id="June">June</option>
                                <option value="July" id="July">July</option>
                                <option value="August" id="August">August</option>
                                <option value="September" id="September">September</option>
                                <option value="October" id="October">October</option>
                                <option value="November" id="November">November</option>
                                <option value="December" id="December">December</option>
                            </select>
                            <span id="dob_monthErr" class="error"></span>
                        </div>
                        <script type="text/javascript">
                            var month0 = document.getElementById("month0");
                            var January = document.getElementById("January");
                            var February = document.getElementById("February");
                            var March = document.getElementById("March");
                            var April = document.getElementById("April");
                            var May = document.getElementById("May");
                            var June = document.getElementById("June");
                            var July = document.getElementById("July");
                            var August = document.getElementById("August");
                            var September = document.getElementById("September");
                            var October = document.getElementById("October");
                            var November = document.getElementById("November");
                            var December = document.getElementById("December");
                            if (month0.value == "<?php echo $row['dob_month']; ?>"){
                                month0.selected = "selected";
                            }
                            if (January.value == "<?php echo $row['dob_month']; ?>"){
                                January.selected = "selected";
                            }
                            if (February.value == "<?php echo $row['dob_month']; ?>"){
                                February.selected = "selected";
                            }
                            if (March.value == "<?php echo $row['dob_month']; ?>"){
                                March.selected = "selected";
                            }
                            if (April.value == "<?php echo $row['dob_month']; ?>"){
                                April.selected = "selected";
                            }
                            if (May.value == "<?php echo $row['dob_month']; ?>"){
                                May.selected = "selected";
                            }
                            if (June.value == "<?php echo $row['dob_month']; ?>"){
                                June.selected = "selected";
                            }
                            if (July.value == "<?php echo $row['dob_month']; ?>"){
                                July.selected = "selected";
                            }
                            if (August.value == "<?php echo $row['dob_month']; ?>"){
                                August.selected = "selected";
                            }
                            if (September.value == "<?php echo $row['dob_month']; ?>"){
                                September.selected = "selected";
                            }
                            if (October.value == "<?php echo $row['dob_month']; ?>"){
                                October.selected = "selected";
                            }
                            if (November.value == "<?php echo $row['dob_month']; ?>"){
                                November.selected = "selected";
                            }
                            if (December.value == "<?php echo $row['dob_month']; ?>"){
                                December.selected = "selected";
                            }
                        </script>
                        <div class="col-md-4">
                            <select name="year" id="year" class="form-control" style="height: 45px;">
                                <option value="year" id="year0">Year</option>
                                <?php
                                $sql2 = "select * from years order by year desc";
                                $result2 = $conn->query($sql2);
                                if ($result2->num_rows > 0) {
                                    while ($row2 = $result2->fetch_assoc()) {
                                ?>
                                <option value="<?php echo $row2['year']; ?>" id="year<?php echo $row2['year']; ?>"><?php echo $row2['year']; ?></option>
                                <?php } } ?>
                            </select>
                            <span id="dob_yearErr" class="error"></span>
                        </div>
                        <script type="text/javascript">
                            var year0 = document.getElementById("year0");
                            if (year0.value == "<?php echo $row['dob_year']; ?>"){
                                year0.selected = "selected";
                            }
                            <?php
                            $sql2 = "select * from years order by year desc";
                            $result2 = $conn->query($sql2);
                            if ($result2->num_rows > 0) {
                                while ($row2 = $result2->fetch_assoc()) {
                            ?>
                            var year<?php echo $row2['year']; ?> = document.getElementById("year<?php echo $row2['year']; ?>");
                            if (year<?php echo $row2['year']; ?>.value == "<?php echo $row['dob_year']; ?>"){
                                year<?php echo $row2['year']; ?>.selected = "selected";
                            }
                            <?php } } ?>
                        </script>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> CNIC/NICOP/B-form</label>
                            <i style="color: darkgrey; font-size: 8pt;">&nbsp;Example:  3320122222222 (Without Dashes). In case you do not have your own CNIC, please enter your parents/guardian CNIC here</i>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" maxlength="13" name="cnic" id="cnic" placeholder="CNIC/NICOP/B-Form" value="<?php echo $row['cnic']; ?>" style="height: 45px;">
                            <span id="cnicErr" class="error"></span>
                        </div>
                        <div class="col-md-8">
                            <input type="radio" name="personalORparents" value="yes" id="personal"><label for="" class="control-label" style="margin-left:5px;margin-right:10px;" onclick="onClickPersonal()">Personal</label>
                            <input type="radio" name="personalORparents" value="no" id="parents/guardians"><label for="" class="control-label" style="margin-left:5px;margin-right:10px;" onclick="onClickParents()">Parents/Guardians</label><br>
                            <span id="cnic_typeErr" class="error"></span>
                        </div>
                        <script type="text/javascript">
                            var personal = document.getElementById("personal").value;
                            var parents = document.getElementById("parents/guardians").value;
                            if(personal=="<?php echo $row['cnic_type']; ?>"){
                                document.getElementById("personal").checked = true;
                            }else{
                                document.getElementById("personal").checked = false;
                            }
                            if(parents=="   <?php echo $row['cnic_type']; ?>"){
                                document.getElementById("parents/guardians").checked = true;
                            }else{
                                document.getElementById("parents/guardians").checked = false;
                            }
                            function onClickPersonal(){
                                document.getElementById("personal").checked = true;
                            }
                            function onClickParents(){
                                document.getElementById("parents/guardians").checked = true;
                            }
                        </script>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Country</label>
                            <select name="country" class="form-control" id="country" style="height: 45px;">
                                <option value="country" id="country0">-- Select Country --</option>
                                <?php
                                    $query = mysqli_query($conn,"select * from countries");
                                    while($rows = mysqli_fetch_array($query))
                                { ?>
                                <option value="<?php echo $rows['Country_Name']?>" id="country<?php echo $rows['Country_Id']?>"><?php echo $rows['Country_Name']?></option>
                                <?php } ?>
                            </select>
                            <span id="countryErr" class="error"></span>
                            <script type="text/javascript">
                                var country0 = document.getElementById("country0");
                                if (country0.value == "<?php echo $row['country']; ?>"){
                                    country0.selected = "selected";
                                }
                                <?php
                                $sql2 = "select * from countries";
                                $result2 = $conn->query($sql2);
                                if ($result2->num_rows > 0) {
                                    while ($row2 = $result2->fetch_assoc()) {
                                ?>
                                var country<?php echo $row2['Country_Id']; ?> = document.getElementById("country<?php echo $row2['Country_Id']; ?>");
                                if (country<?php echo $row2['Country_Id']; ?>.value == "<?php echo $row['country']; ?>"){
                                    country<?php echo $row2['Country_Id']; ?>.selected = "selected";
                                }
                                <?php } } ?>
                            </script>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Nationality</label>
                            <select name="nationality" class="form-control" id="nationality" style="height: 45px;">
                                <option value="nationality" id="nationality0">-- Select Nationality --</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from countries");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2['nationality']?>" id="nation<?php echo $rows2['Country_Id']?>"><?php echo $rows2['nationality']?></option>
                                <?php } ?>
                            </select>
                            <span id="nationalityErr" class="error"></span>
                            <script type="text/javascript">
                                var nationality0 = document.getElementById("nationality0");
                                if (nationality0.value == "<?php echo $row['nationality']; ?>"){
                                    nationality0.selected = "selected";
                                }
                                <?php
                                $sql2 = "select * from countries";
                                $result2 = $conn->query($sql2);
                                if ($result2->num_rows > 0) {
                                    while ($row2 = $result2->fetch_assoc()) {
                                ?>
                                var nation<?php echo $row2['Country_Id']; ?> = document.getElementById("nation<?php echo $row2['Country_Id']; ?>");
                                if (nation<?php echo $row2['Country_Id']; ?>.value == "<?php echo $row['nationality']; ?>"){
                                    nation<?php echo $row2['Country_Id']; ?>.selected = "selected";
                                }
                                <?php } } ?>
                            </script>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> City</label>
                            <select class="form-control" name="city" id="city" style="height: 45px;">
                                <option value="city" id="city0">-- Select City --</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from cities");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2['City_Name']?>" id="city<?php echo $rows2['City_Id']?>"><?php echo $rows2['City_Name']?></option>
                                <?php } ?>
                            </select>
                            <span id="cityErr" class="error"></span>
                            <script type="text/javascript">
                                var city0 = document.getElementById("city0");
                                if (city0.value == "<?php echo $row['city']; ?>"){
                                    city0.selected = "selected";
                                }
                                <?php
                                $sql2 = "select * from cities";
                                $result2 = $conn->query($sql2);
                                if ($result2->num_rows > 0) {
                                    while ($row2 = $result2->fetch_assoc()) {
                                ?>
                                var city<?php echo $row2['City_Id']; ?> = document.getElementById("city<?php echo $row2['City_Id']; ?>");
                                if (city<?php echo $row2['City_Id']; ?>.value == "<?php echo $row['city']; ?>"){
                                    city<?php echo $row2['City_Id']; ?>.selected = "selected";
                                }
                                <?php } } ?>
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Mailing/Postal Address</label>
                            <textarea name="mailingaddress" rows="3" cols="20" id="mailingaddress" class="form-control"><?php echo $row['mailing_address']; ?></textarea>
                            <span id="mailingaddressErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Mobile</label>
                            <i style="color: darkgrey; font-size: 8pt;">&nbsp;<span id="" style="color:red;font-size:9pt;">(Unverified <i class='fa fa-times-circle'></i>)</span>
                                &nbsp;Example:  923331122334 Country Code + Mobile Operator Code + Number. &nbsp;&nbsp;
                            </i>
                        </div>
                        <div class="col-md-2">
                            <select name="countrycode" id="countrycode" class="form-control" style="height: 45px;">
                                <option value="countrycode" id="countrycode0">Code</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from countries");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2['phonecode']?>" id="country_code<?php echo $rows2['Country_Id']?>"><?php echo $rows2['phonecode']?></option>
                                <?php } ?>
                            </select>
                            <span id="countrycodeErr" class="error"></span>
                            <script type="text/javascript">
                                var countrycode0 = document.getElementById("countrycode0");
                                if (countrycode0.value == "<?php echo $row['country_code']; ?>"){
                                    countrycode0.selected = "selected";
                                }
                                <?php
                                $sql2 = "select * from countries";
                                $result2 = $conn->query($sql2);
                                if ($result2->num_rows > 0) {
                                    while ($row2 = $result2->fetch_assoc()) {
                                ?>
                                var country_code<?php echo $row2['Country_Id']; ?> = document.getElementById("country_code<?php echo $row2['Country_Id']; ?>");
                                if (country_code<?php echo $row2['Country_Id']; ?>.value == "<?php echo $row['country_code']; ?>"){
                                    country_code<?php echo $row2['Country_Id']; ?>.selected = "selected";
                                }
                                <?php } } ?>
                            </script>
                        </div>
                        <div class="col-md-2">
                            <select name="mobilecode" id="mobilecode" class="form-control" style="height: 45px;">
                                <option value="0" id="mobile_code0">-- Select Mobile Operator Code --</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from mobile_code");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2['mobile_code']?>" id="mobile_code<?php echo $rows2['mobile_code']?>"><?php echo $rows2['mobile_code']?></option>
                                <?php } ?>
                            </select>
                            <span id="mobilecodeErr" class="error"></span>
                            <script type="text/javascript">
                                var mobile_code0 = document.getElementById("mobile_code0");
                                if (mobile_code0.value == "<?php echo $row['mobile_code']; ?>"){
                                    mobile_code0.selected = "selected";
                                }
                                <?php
                                $sql2 = "select * from mobile_code";
                                $result2 = $conn->query($sql2);
                                if ($result2->num_rows > 0) {
                                    while ($row2 = $result2->fetch_assoc()) {
                                ?>
                                var mobile_code<?php echo $row2['mobile_code']; ?> = document.getElementById("mobile_code<?php echo $row2['mobile_code']; ?>");
                                if (mobile_code<?php echo $row2['mobile_code']; ?>.value == "<?php echo $row['mobile_code']; ?>"){
                                    mobile_code<?php echo $row2['mobile_code']; ?>.selected = "selected";
                                }
                                <?php } } ?>
                            </script>
                        </div>
                        <div class="col-md-8">
                            <input name="number" type="text" value="<?php echo $row['number']; ?>" maxlength="7" id="mobilenumber" class="form-control" class="form-control" placeholder="Number" style="height: 45px;">
                            <span id="mobilenumberErr" class="error"></span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse2"> Experiance / Education</a> </h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body" style="padding:30px; padding-top:20px;">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Highest Qualification</label>
                            <select class="form-control" name="highest_qualification" id="highest_qualification" style="height: 45px;" onchange="Specialization()">
                                <option value="" id="qualification0">-- Select Highest Qualification --</option>
                                <option value="Middle" id="qualification1">Middle</option>
                                <option value="Matric/O-Level" id="qualification2">Matric/O-Level</option>
                                <option value="Intermediate" id="qualification3">Intermediate</option>
                                <option value="Graduation" id="qualification4">Graduation</option>
                                <option value="Masters" id="qualification5">Masters</option>
                                <option value="MS/M.Phil" id="qualification6">MS/M.Phil</option>
                                <option value="Ph.D" id="qualification7">Ph.D</option>
                            </select>
                            <input type="hidden" id="highest_qualification_hidden" value="<?php echo $row['highest_qualification']; ?>">
                            <span id="highest_qualificationErr" class="error"></span>
                            <script type="text/javascript">
                                var qualification0 = document.getElementById("qualification0");
                                var qualification1 = document.getElementById("qualification1");
                                var qualification2 = document.getElementById("qualification2");
                                var qualification3 = document.getElementById("qualification3");
                                var qualification4 = document.getElementById("qualification4");
                                var qualification5 = document.getElementById("qualification5");
                                var qualification6 = document.getElementById("qualification6");
                                var qualification7 = document.getElementById("qualification7");
                                if (qualification0.value == "<?php echo $row['highest_qualification']; ?>"){
                                    qualification0.selected = "selected";
                                }
                                if (qualification1.value == "<?php echo $row['highest_qualification']; ?>"){
                                    qualification1.selected = "selected";
                                }
                                if (qualification2.value == "<?php echo $row['highest_qualification']; ?>"){
                                    qualification2.selected = "selected";
                                }
                                if (qualification3.value == "<?php echo $row['highest_qualification']; ?>"){
                                    qualification3.selected = "selected";
                                }
                                if (qualification4.value == "<?php echo $row['highest_qualification']; ?>"){
                                    qualification4.selected = "selected";
                                }
                                if (qualification5.value == "<?php echo $row['highest_qualification']; ?>"){
                                    qualification5.selected = "selected";
                                }
                                if (qualification6.value == "<?php echo $row['highest_qualification']; ?>"){
                                    qualification6.selected = "selected";
                                }
                                if (qualification7.value == "<?php echo $row['highest_qualification']; ?>"){
                                    qualification7.selected = "selected";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" id="specialization_div" style="display:none;">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Specialization</label>
                            <select class="form-control" name="specialization" id="specialization" style="height: 45px;" onchange="others()">
                                <option value="" id="specialization0">-- Select Specialization --</option>
                                <option value="Business" id="specialization1">Business</option>
                                <option value="Computer Science" id="specialization2">Computer Science</option>
                                <option value="Engineering" id="specialization3">Engineering</option>
                                <option value="Management Science" id="specialization4">Management Science</option>
                                <option value="Mathematics and Statistics" id="specialization5">Mathematics and Statistics</option>
                                <option value="Physical Science" id="specialization6">Physical Science</option>
                                <option value="Education" id="specialization7">Education</option>
                                <option value="Art and Humanities" id="specialization8">Art and Humanities</option>
                                <option value="Other" id="specialization9">Other</option>
                            </select>
                            <input type="hidden" id="specialization_hidden" value="<?php echo $row['specialization']; ?>">
                            <span id="specializationErr" class="error"></span>
                            <script type="text/javascript">
                                var specialization0 = document.getElementById("specialization0");
                                var specialization1 = document.getElementById("specialization1");
                                var specialization2 = document.getElementById("specialization2");
                                var specialization3 = document.getElementById("specialization3");
                                var specialization4 = document.getElementById("specialization4");
                                var specialization5 = document.getElementById("specialization5");
                                var specialization6 = document.getElementById("specialization6");
                                var specialization7 = document.getElementById("specialization7");
                                var specialization8 = document.getElementById("specialization8");
                                var specialization9 = document.getElementById("specialization9");
                                if (specialization0.value == "<?php echo $row['specialization']; ?>"){
                                    specialization0.selected = "selected";
                                }
                                if (specialization1.value == "<?php echo $row['specialization']; ?>"){
                                    specialization1.selected = "selected";
                                }
                                if (specialization2.value == "<?php echo $row['specialization']; ?>"){
                                    specialization2.selected = "selected";
                                }
                                if (specialization3.value == "<?php echo $row['specialization']; ?>"){
                                    specialization3.selected = "selected";
                                }
                                if (specialization4.value == "<?php echo $row['specialization']; ?>"){
                                    specialization4.selected = "selected";
                                }
                                if (specialization5.value == "<?php echo $row['specialization']; ?>"){
                                    specialization5.selected = "selected";
                                }
                                if (specialization6.value == "<?php echo $row['specialization']; ?>"){
                                    specialization6.selected = "selected";
                                }
                                if (specialization7.value == "<?php echo $row['specialization']; ?>"){
                                    specialization7.selected = "selected";
                                }
                                if (specialization8.value == "<?php echo $row['specialization']; ?>"){
                                    specialization8.selected = "selected";
                                }
                                if (specialization9.value == "<?php echo $row['specialization']; ?>"){
                                    specialization9.selected = "selected";
                                }
                            </script>
                        </div>
                        <div class="col-md-6" id="other_div" style="display:none;">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Other</label>
                            <input type="text" class="form-control" name="other" id="other" value="<?php echo $row['specialization_other']; ?>" placeholder="Other Specialization" style="height: 45px;">
                            <span id="otherErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Current Status</label>
                            <select class="form-control" name="current_status" id="current_status" style="height: 45px;" onchange="Employed()">
                                <option value="" id="current_status0">-- Select Current Status --</option>
                                <option value="Student" id="current_status1">Student</option>
                                <option value="Housewife" id="current_status2">Housewife</option>
                                <option value="Unemployed" id="current_status3">Unemployed</option>
                                <option value="Employed" id="current_status4">Employed</option>
                                <option value="Business Owner" id="current_status5">Business Owner</option>
                            </select>
                            <input type="hidden" id="current_status_hidden" value="<?php echo $row['current_status']; ?>">
                            <span id="current_statusErr" class="error"></span>
                            <script type="text/javascript">
                                var current_status0 = document.getElementById("current_status0");
                                var current_status1 = document.getElementById("current_status1");
                                var current_status2 = document.getElementById("current_status2");
                                var current_status3 = document.getElementById("current_status3");
                                var current_status4 = document.getElementById("current_status4");
                                var current_status5 = document.getElementById("current_status5");
                                if (current_status0.value == "<?php echo $row['current_status']; ?>"){
                                    current_status0.selected = "selected";
                                }
                                if (current_status1.value == "<?php echo $row['current_status']; ?>"){
                                    current_status1.selected = "selected";
                                }
                                if (current_status2.value == "<?php echo $row['current_status']; ?>"){
                                    current_status2.selected = "selected";
                                }
                                if (current_status3.value == "<?php echo $row['current_status']; ?>"){
                                    current_status3.selected = "selected";
                                }
                                if (current_status4.value == "<?php echo $row['current_status']; ?>"){
                                    current_status4.selected = "selected";
                                }
                                if (current_status5.value == "<?php echo $row['current_status']; ?>"){
                                    current_status5.selected = "selected";
                                }
                            </script>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Future Plan</label>
                            <select class="form-control" name="future_plan" id="future_plan" style="height: 45px;">
                                <option value="" id="future_plan0">-- Select Future Plan --</option>
                                <option value="Job" id="future_plan1">Job</option>
                                <option value="Own Business" id="future_plan2">Own Business</option>
                                <option value="Freelancing" id="future_plan3">Freelancing</option>
                            </select>
                            <span id="future_planErr" class="error"></span>
                            <script type="text/javascript">
                                var future_plan0 = document.getElementById("future_plan0");
                                var future_plan1 = document.getElementById("future_plan1");
                                var future_plan2 = document.getElementById("future_plan2");
                                var future_plan3 = document.getElementById("future_plan3");
                                if (future_plan0.value == "<?php echo $row['future_plan']; ?>"){
                                    future_plan0.selected = "selected";
                                }
                                if (future_plan1.value == "<?php echo $row['future_plan']; ?>"){
                                    future_plan1.selected = "selected";
                                }
                                if (future_plan2.value == "<?php echo $row['future_plan']; ?>"){
                                    future_plan2.selected = "selected";
                                }
                                if (future_plan3.value == "<?php echo $row['future_plan']; ?>"){
                                    future_plan3.selected = "selected";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="row" id="employeeORexperience" style="display:none;">
                        <div class="col-md-6">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Employment Status</label>
                            <select class="form-control" name="employment_status" id="employment_status" style="height: 45px;">
                                <option value="" id="employment_status0">-- Select Employment Status --</option>
                                <option value="Private Job" id="employment_status1">Private Job</option>
                                <option value="Govt.Employee" id="employment_status2">Govt.Employee</option>
                                <option value="Business Owner/Entrepreneur" id="employment_status3">Business Owner/Entrepreneur</option>
                                <option value="Freelancer" id="employment_status4">Freelancer</option>
                            </select>
                            <span id="employment_statusErr" class="error"></span>
                            <script type="text/javascript">
                                var employment_status0 = document.getElementById("employment_status0");
                                var employment_status1 = document.getElementById("employment_status1");
                                var employment_status2 = document.getElementById("employment_status2");
                                var employment_status3 = document.getElementById("employment_status3");
                                var employment_status4 = document.getElementById("employment_status4");
                                if (employment_status0.value == "<?php echo $row['employment_status']; ?>"){
                                    employment_status0.selected = "selected";
                                }
                                if (employment_status1.value == "<?php echo $row['employment_status']; ?>"){
                                    employment_status1.selected = "selected";
                                }
                                if (employment_status2.value == "<?php echo $row['employment_status']; ?>"){
                                    employment_status2.selected = "selected";
                                }
                                if (employment_status3.value == "<?php echo $row['employment_status']; ?>"){
                                    employment_status3.selected = "selected";
                                }
                                if (employment_status4.value == "<?php echo $row['employment_status']; ?>"){
                                    employment_status4.selected = "selected";
                                }
                            </script>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Experience Level</label>
                            <select class="form-control" name="experience_level" id="experience_level" style="height: 45px;">
                                <option value="" id="experience_level0">-- Select Experience Level --</option>
                                <option value="Intern/Trainee" id="experience_level1">Intern/Trainee</option>
                                <option value="Junior/Entry Level (0-2 years' experience)" id="experience_level2">Junior/Entry Level (0-2 years' experience)</option>
                                <option value="Mid-Level (2+ years's experience)" id="experience_level3">Mid-Level (2+ years's experience)</option>
                                <option value="Lead/Manager" id="experience_level4">Lead/Manager</option>
                                <option value="Senior Manager/Director" id="experience_level5">Senior Manager/Director</option>
                                <option value="Executive" id="experience_level6">Executive</option>
                            </select>
                            <span id="experience_levelErr" class="error"></span>
                            <script type="text/javascript">
                                var experience_level0 = document.getElementById("experience_level0");
                                var experience_level1 = document.getElementById("experience_level1");
                                var experience_level2 = document.getElementById("experience_level2");
                                var experience_level3 = document.getElementById("experience_level3");
                                var experience_level4 = document.getElementById("experience_level4");
                                var experience_level5 = document.getElementById("experience_level5");
                                var experience_level6 = document.getElementById("experience_level6");
                                if (experience_level0.value == "<?php echo $row['experience_level']; ?>"){
                                    experience_level0.selected = "selected";
                                }
                                if (experience_level1.value == "<?php echo $row['experience_level']; ?>"){
                                    experience_level1.selected = "selected";
                                }
                                if (experience_level2.value == "<?php echo $row['experience_level']; ?>"){
                                    experience_level2.selected = "selected";
                                }
                                if (experience_level3.value == "<?php echo $row['experience_level']; ?>"){
                                    experience_level3.selected = "selected";
                                }
                                if (experience_level4.value == "<?php echo $row['experience_level']; ?>"){
                                    experience_level4.selected = "selected";
                                }
                                if (experience_level5.value == "<?php echo $row['experience_level']; ?>"){
                                    experience_level5.selected = "selected";
                                }
                                if (experience_level6.value == "<?php echo $row['experience_level']; ?>"){
                                    experience_level6.selected = "selected";
                                }
                            </script>
                        </div>
                    </div>
                    <div class="row" id="job_city_div" style="display:none;">
                        <div class="col-md-6">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Job City</label>
                            <select class="form-control" name="job_city" id="job_city" style="height: 45px;">
                                <option value="" id="job_city0">-- Select Job City --</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from cities");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2['City_Name']?>" id="job_city<?php echo $rows2['City_Id']?>"><?php echo $rows2['City_Name']?></option>
                                <?php } ?>
                            </select>
                            <span id="job_cityErr" class="error"></span>
                            <script type="text/javascript">
                                var job_city0 = document.getElementById("job_city0");
                                if (job_city0.value == "<?php echo $row['job_city']; ?>"){
                                    job_city0.selected = "selected";
                                }
                                <?php
                                $sql2 = "select * from cities";
                                $result2 = $conn->query($sql2);
                                if ($result2->num_rows > 0) {
                                    while ($row2 = $result2->fetch_assoc()) {
                                ?>
                                var job_city<?php echo $row2['City_Id']; ?> = document.getElementById("job_city<?php echo $row2['City_Id']; ?>");
                                if (job_city<?php echo $row2['City_Id']; ?>.value == "<?php echo $row['job_city']; ?>"){
                                    job_city<?php echo $row2['City_Id']; ?>.selected = "selected";
                                }
                                <?php } } ?>
                            </script>
                        </div>
                    </div>
                    <div class="row" id="salary_income_div" style="display:none;">
                        <div class="col-md-6">
                            <label for="" class="control-label"> Salary/Income (Pak Rupees)</label>
                            <select class="form-control" name="salary_income" id="salary_income" style="height: 45px;">
                                <option value="" id="salary_income0">-- Select Salary/Income --</option>
                                <option value="Below 25,000" id="salary_income1">Below 25,000</option>
                                <option value="25,000 - 50,000" id="salary_income2">25,000 - 50,000</option>
                                <option value="50,000 - 75,000" id="salary_income3">50,000 - 75,000</option>
                                <option value="75,000 - 100,000" id="salary_income4">75,000 - 100,000</option>
                                <option value="Above 100,000" id="salary_income5">Above 100,000</option>
                            </select>
                            <script type="text/javascript">
                                var salary_income0 = document.getElementById("salary_income0");
                                var salary_income1 = document.getElementById("salary_income1");
                                var salary_income2 = document.getElementById("salary_income2");
                                var salary_income3 = document.getElementById("salary_income3");
                                var salary_income4 = document.getElementById("salary_income4");
                                var salary_income5 = document.getElementById("salary_income5");
                                if (salary_income0.value == "<?php echo $row['salary_income']; ?>"){
                                    salary_income0.selected = "selected";
                                }
                                if (salary_income1.value == "<?php echo $row['salary_income']; ?>"){
                                    salary_income1.selected = "selected";
                                }
                                if (salary_income2.value == "<?php echo $row['salary_income']; ?>"){
                                    salary_income2.selected = "selected";
                                }
                                if (salary_income3.value == "<?php echo $row['salary_income']; ?>"){
                                    salary_income3.selected = "selected";
                                }
                                if (salary_income4.value == "<?php echo $row['salary_income']; ?>"){
                                    salary_income4.selected = "selected";
                                }
                                if (salary_income5.value == "<?php echo $row['salary_income']; ?>"){
                                    salary_income5.selected = "selected";
                                }
                            </script>
                        </div>
                    </div>
                </div>
              </div>
            </div>
                <input type="hidden" value="<?php echo $row["id"]; ?>" name="userId">
            <?php } ?>
            <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-primary btn-lg" value="Submit" id="btn-submit" style="background-color:#b89b5e ;" name="submit_client">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>


<script type="text/javascript">
    function Specialization(){
        if(document.getElementById("highest_qualification").value=="Middle" || document.getElementById("highest_qualification").value==""){
            document.getElementById("specialization_div").style.display="none";
            document.getElementById("specialization").value="";
            document.getElementById("other_div").style.display="none";
            document.getElementById("other").value="";
        }else{
            document.getElementById("specialization_div").style.display="block";
        }
    }
    function others(){
        if(document.getElementById("specialization").value=="Other"){
            document.getElementById("other_div").style.display="block";
        }else{
            document.getElementById("other_div").style.display="none";
            document.getElementById("other").value="";
        }
    }
    function Employed(){
        if(document.getElementById("current_status").value=="Employed" || document.getElementById("current_status").value=="Business Owner"){
            document.getElementById("employeeORexperience").style.display="block";
            document.getElementById("job_city_div").style.display="block";
            document.getElementById("salary_income_div").style.display="block";
        }else{
            document.getElementById("employeeORexperience").style.display="none";
            document.getElementById("job_city_div").style.display="none";
            document.getElementById("salary_income_div").style.display="none";
            document.getElementById("employment_status").value="";
            document.getElementById("experience_level").value="";
            document.getElementById("job_city").value="";
            document.getElementById("salary_income").value="";
        }
    }
    if(document.getElementById("highest_qualification_hidden").value == "Matric/O-Level"){
        document.getElementById("specialization_div").style.display="block";
    }
    if(document.getElementById("highest_qualification_hidden").value == "Intermediate"){
        document.getElementById("specialization_div").style.display="block";
    }
    if(document.getElementById("highest_qualification_hidden").value == "Graduation"){
        document.getElementById("specialization_div").style.display="block";
    }
    if(document.getElementById("highest_qualification_hidden").value == "Masters"){
        document.getElementById("specialization_div").style.display="block";
    }
    if(document.getElementById("highest_qualification_hidden").value == "MS/M.Phil"){
        document.getElementById("specialization_div").style.display="block";
    }
    if(document.getElementById("highest_qualification_hidden").value == "Ph.D"){
        document.getElementById("specialization_div").style.display="block";
    }
    if(document.getElementById("specialization_hidden").value == "Other"){
        document.getElementById("other_div").style.display="block";
    }
    if(document.getElementById("current_status_hidden").value == "Employed"){
        document.getElementById("employeeORexperience").style.display="block";
        document.getElementById("job_city_div").style.display="block";
        document.getElementById("salary_income_div").style.display="block";
    }
    if(document.getElementById("current_status_hidden").value == "Business Owner"){
        document.getElementById("employeeORexperience").style.display="block";
        document.getElementById("job_city_div").style.display="block";
        document.getElementById("salary_income_div").style.display="block";
    }
    function lawyerTypes(){
        if(document.getElementById("lawyer_types").value == "Others"){
            document.getElementById("lawyer_types_other_div").style.display="block";
        }else{
            document.getElementById("lawyer_types_other_div").style.display="none";
            document.getElementById("lawyer_types_other").value="";
        }
    }
    if(document.getElementById("lawyer_types").value == "Others"){
        document.getElementById("lawyer_types_other_div").style.display="block";
    }
</script>