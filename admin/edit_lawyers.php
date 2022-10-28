<?php
$currentPage = 'Lawyers';// for add dynamic active class on selected page on header
$pageURL="lawyers.php";// for add dynamic url text of Navigator Section
$id = $_GET["id"];
require("includes/connection.php");
$role = "Lawyer";
$query=mysqli_query($conn,"select * from user inner join lawyer_details on user.id=lawyer_details.user_id where user.role='".$role."' and user.id='".$id."'");
while($row=mysqli_fetch_array($query)){
    $first_name=$row["first_name"];
    $middle_name=$row["middle_name"];
    $last_name=$row["last_name"];
    $lawyer_name=$first_name." ".$middle_name." ".$last_name;
    $image=$row["image"];
    $highest_qualification=$row["highest_qualification"];
    $specialization=$row["specialization"];
    $specialization_other=$row["specialization_other"];
    $current_status=$row["current_status"];
    $future_plan=$row["future_plan"];
    $employment_status=$row["employment_status"];
    $experience_level=$row["experience_level"];
    $job_city=$row["job_city"];
    $salary_income=$row["salary_income"];
    $lawyer_types=$row["lawyer_types"];
    $lawyer_types_other=$row["lawyer_types_other"];
    $short_about_me=$row["short_about_me"];
    $about_me=$row["about_me"];
    $lawyer_location=$row["lawyer_location"];
    $lawyer_casses_done=$row["lawyer_casses_done"];
    $lawyer_contact_countrycode=$row["lawyer_contact_countrycode"];
    $lawyer_contact_mobilecode=$row["lawyer_contact_mobilecode"];
    $lawyer_contact_number=$row["lawyer_contact_number"];
    $lawyer_email=$row["lawyer_email"];
    $lawyer_skype=$row["lawyer_skype"];
    $lawyer_website=$row["lawyer_website"];
    $lawyer_facebook=$row["lawyer_facebook"];
    $lawyer_twitter=$row["lawyer_twitter"];
    $lawyer_youtube=$row["lawyer_youtube"];
    $lawyer_googleplus=$row["lawyer_googleplus"];
    $lawyer_linkedin=$row["lawyer_linkedin"];
    $lawyer_personal_statement=$row["lawyer_personal_statement"];
    $service1=$row["service1"];
    $service1Detail=$row["service1Detail"];
    $service1_Icon=$row["service1_Icon"];
    $service2=$row["service2"];
    $service2Detail=$row["service2Detail"];
    $service2_Icon=$row["service2_Icon"];
    $service3=$row["service3"];
    $service3Detail=$row["service3Detail"];
    $service3_Icon=$row["service3_Icon"];
    $service4=$row["service4"];
    $service4Detail=$row["service4Detail"];
    $service4_Icon=$row["service4_Icon"];
    $service5=$row["service5"];
    $service5Detail=$row["service5Detail"];
    $service5_Icon=$row["service5_Icon"];
    $service6=$row["service6"];
    $service6Detail=$row["service6Detail"];
    $service6_Icon=$row["service6_Icon"];
}
$title = "Lawyers Website - Admin | Lawyers | ".$lawyer_name."";// for dynamic title on selected page
require("includes/header.inc.php");
?>



<style>
    #image{
        border:8px solid #db3636;
        border-radius: 100%;
        box-shadow:0px 0px 0px 0px grey;
        transform-style: preserve-3d;
        transform:rotateX(0deg);
        transition:all 0.4s ease;
        margin-left:15px;
        margin-right:15px;
        width:300px;
        height:300px;
    }
    #imgSpan::before{
        content:'';
        width:90%;
        height:10px;
        pointer-events: none;
        position: absolute;
        z-index: 10000;
        top:97%;
        left:5%;
        margin-bottom:15px;
        background-image: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
        transform: translateY(0px);
        opacity:1;
        transition: all 0.4s ease;
    }
    #reflect{
        background:white;
        position:absolute;
        width:100px;
        height:400px;
        z-index:1;
        opacity:0.4;
        transform:skewX(45deg) translateX(450px);
        transition:all 0.4s ease-in-out;
    }

    #image:hover{
        border:2px solid #db3636;
        box-shadow: 0px 1px 0px #db3636,0px 20px 0px #db3636, 0px 40px 20px -8px grey;
        transform:rotateX(45deg);
    }
    .card{
        box-shadow:0px 10px 30px 0px lightgrey;
    }
    #paralaxImg{
        perspective: 1000;
        margin:50px;
    }
    #imgSpan{
        overflow: hidden;
        padding-bottom: 22px;
    }
    #imgSpan:hover #reflect{
        transform:skewX(45deg) translateX(-100px);
    }
    #imgSpan:hover::before {
        opacity:0;
        transform:translateY(-40px);
        width:100%;
        height:30px;
        background-image: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 100%);
    }
    .error{
        font-size:8pt;
        color:#db3636;
        font-weight:bold;
        font-style:italic;
    }
    #highest_qualification, #current_status, #specialization, #specialization_other, #future_plan, #employment_status, #experience_level, #job_city, #salary_income, #lawyer_types, #lawyer_types_other, #about_me, #short_about_me, #lawyer_location, #lawyer_contact_number, #lawyer_casses_done, #lawyer_email, #lawyer_skype, #lawyer_website, #lawyer_facebook, #lawyer_twitter, #lawyer_youtube, #lawyer_googleplus, #lawyer_linkedin, #lawyer_personal_statement, #service1, #service1Detail, #service1_Icon, #service2, #service2Detail, #service2_Icon, #service3, #service3Detail, #service3_Icon, #service4, #service4Detail, #service4_Icon, #service5, #service5Detail, #service5_Icon, #service6, #service6Detail, #service6_Icon{
        background:white;
        cursor:not-allowed;
    }
    #lawyer_email_icon, #lawyer_contact_icon, #number_icon{
        transition:all 0.3s ease-in-out;
    }
    #lawyer_email_icon:hover{
        color:white;
        background:#db4a39;
    }
    #lawyer_contact_icon:hover{
        color:white;
        background:green;
    }
    #number_icon:hover{
        color:white;
        background:green;
    }
    #username_icon, #email_icon, #password_icon, #first_name_icon, #gender_icon, #dob_icon, #cnic_icon, #country_icon, #nationality_icon, #city_icon, #mailing_address_icon, #number_icon{
        color:#49A342;
    }
</style>




<?php
    if(isset($_POST["saveChanges"])){
        $usernameField = $_POST["username"];
        $emailField = $_POST["email"];
        $passwordField = $_POST["password"];
        $first_nameField = $_POST["first_name"];
        $middle_nameField = $_POST["middle_name"];
        $last_nameField = $_POST["last_name"];
        $genderField = $_POST["gender"];
        $dob_dayField = $_POST["dob_day"];
        $dob_monthField = $_POST["dob_month"];
        $dob_yearField = $_POST["dob_year"];
        $cnicField = $_POST["cnic"];
        $cnic_typeField = $_POST["personalORparents"];
        $countryField = $_POST["country"];
        $nationalityField = $_POST["nationality"];
        $cityField = $_POST["city"];
        $mailing_addressField = $_POST["mailing_address"];
        $country_codeField = $_POST["country_code"];
        $mobile_codeField = $_POST["mobile_code"];
        $numberField = $_POST["number"];
        mysqli_query($conn,"update user set username='".$usernameField."', email='".$emailField."', password='".$passwordField."', first_name='".$first_nameField."', middle_name='".$middle_nameField."', last_name='".$last_nameField."', gender='".$genderField."', dob_day='".$dob_dayField."', dob_month='".$dob_monthField."', dob_year='".$dob_yearField."', cnic='".$cnicField."', cnic_type='".$cnic_typeField."', country='".$countryField."', nationality='".$nationalityField."', city='".$cityField."', mailing_address='".$mailing_addressField."', country_code='".$country_codeField."' , mobile_code='".$mobile_codeField."' , number='".$numberField."' where id='".$id."'");
    }
?>






<script type="text/javascript">
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function formValidation() {
        var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var first_name = document.getElementById("first_name").value;
        var middle_name = document.getElementById("middle_name").value;
        var last_name = document.getElementById("last_name").value;
        var gender = document.getElementById("submit-form").gender.value;
        var dob_day = document.getElementById("dob_day").value;
        var dob_month = document.getElementById("dob_month").value;
        var dob_year = document.getElementById("dob_year").value;
        var cnic = document.getElementById("cnic").value;
        var cnicType = document.getElementById("submit-form").personalORparents.value;
        var country = document.getElementById("country").value;
        var nationality = document.getElementById("nationality").value;
        var city = document.getElementById("city").value;
        var mailing_address = document.getElementById("mailing_address").value;
        var country_code = document.getElementById("country_code").value;
        var mobile_code = document.getElementById("mobile_code").value;
        var number = document.getElementById("number").value;

        
        // Defining error variables with a default value
        var usernameErr = emailErr = passwordErr = first_nameErr = middle_nameErr = last_nameErr = genderErr = dobErr = dob_dayErr = dob_monthErr = dob_yearErr = cnicErr = cnic_typeErr = countryErr = nationalityErr = cityErr = mailing_addressErr = country_codeErr = mobile_codeErr = numberErr = true;


        // Start Validate Username
        if(username == "") {
            printError("usernameErr", "Please! Enter Your Username");
            document.getElementById("username_icon").style.color = "#db3636";
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(username) === false) {
                printError("usernameErr", "Please! Enter a valid Username");
                document.getElementById("username_icon").style.color = "#db3636";
            } else {
                printError("usernameErr", "");
                document.getElementById("username_icon").style.color = "#49A342";
                usernameErr = false;
            }
        }
        // End Validate Username

        // Start Validate Email Address
        if(email == "") {
            printError("emailErr", "Please! Enter Your Email Address");
            document.getElementById("email_icon").style.color = "#db3636";
        } else {
            var regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(regex.test(email) === false) {
                printError("emailErr", "Please! Enter a valid Email Address");
                document.getElementById("email_icon").style.color = "#db3636";
            } else{
                printError("emailErr", "");
                document.getElementById("email_icon").style.color = "#49A342";
                emailErr = false;
            }
        }
        // End Validate Email Address

        // Start Validate Password
        if(password == "") {
            printError("passwordErr", "Please! Enter Your Password");
            document.getElementById("password_icon").style.color = "#db3636";
        } else {
            var regex = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/;                
            if(regex.test(password) === false){
                printError("passwordErr", "Please! Enter Your Password which contain at least one Lowercase letter, one Uppercase letter, one Digit, and Minimum 8 Chracters");
                document.getElementById("password_icon").style.color = "#db3636";
            } else {
                printError("passwordErr", "");
                document.getElementById("password_icon").style.color = "#49A342";
                passwordErr = false;
            }
        }
        // End Validate Password

        // Start Validate First Name
        if(first_name == "") {
            printError("first_nameErr", "Please! Enter Your First Name");
            document.getElementById("first_name_icon").style.color = "#db3636";
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(first_name) === false) {
                printError("first_nameErr", "Please! Enter a valid First Name");
                document.getElementById("first_name_icon").style.color = "#db3636";
            } else {
                printError("first_nameErr", "");
                document.getElementById("first_name_icon").style.color = "#49A342";
                first_nameErr = false;
            }
        }
        // End Validate First Name

        // Start Validate Middle Name
        if(middle_name == "") {
            printError("middle_nameErr", "");
            document.getElementById("middle_name_icon").style.color = "#495057";
            middle_nameErr = false;
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(middle_name) === false) {
                printError("middle_nameErr", "Please! Enter a valid Middle Name");
                document.getElementById("middle_name_icon").style.color = "#db3636";
            } else {
                printError("middle_nameErr", "");
                document.getElementById("middle_name_icon").style.color = "#49A342";
                middle_nameErr = false;
            }
        }
        // End Validate Middle Name

        // Start Validate Last Name
        if(last_name == "") {
            printError("last_nameErr", "");
            document.getElementById("last_name_icon").style.color = "#495057";
            last_nameErr = false;
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(last_name) === false) {
                printError("last_nameErr", "Please! Enter a valid Last Name");
                document.getElementById("last_name_icon").style.color = "#db3636";
            } else {
                printError("last_nameErr", "");
                document.getElementById("last_name_icon").style.color = "#49A342";
                last_nameErr = false;
            }
        }
        // End Validate Last Name

        // Start Validate Gender
        if(gender == "") {
            printError("genderErr", "Please! Select Your Gender");
            document.getElementById("gender_icon").style.color = "#db3636";
        } else {
            printError("genderErr", "");
            document.getElementById("gender_icon").style.color = "#49A342";
            genderErr = false;
        }
        // End Validate Gender

        // Start Validate DOB Day
        if(dob_day == "day") {
            printError("dob_dayErr", "Please! Select Your DOB Day");
        } else {
            printError("dob_dayErr", "");
            dob_dayErr = false;
        }
        // End Validate DOB Day

        // Start Validate DOB Month
        if(dob_month == "month") {
            printError("dob_monthErr", "Please! Select Your DOB Month");
        } else {
            printError("dob_monthErr", "");
            dob_monthErr = false;
        }
        // End Validate DOB Month

        // Start Validate DOB Year
        if(dob_year == "year") {
            printError("dob_yearErr", "Please! Select Your DOB Year");
        } else {
            printError("dob_yearErr", "");
            dob_yearErr = false;
        }
        // End Validate DOB Year

        // Start Validate DOB
        if((dob_dayErr || dob_monthErr || dob_yearErr) == true) {
            printError("dobErr", "Please! Select Your Date Of Birth");
            document.getElementById("dob_icon").style.color = "#db3636";
        } else {
            printError("dobErr", "");
            document.getElementById("dob_icon").style.color = "#49A342";
            dobErr = false;
        }
        // End Validate DOB

        if((cnicErr || cnic_typeErr) == true){
            document.getElementById("cnic_icon").style.color = "#db3636";
        } else {
            document.getElementById("cnic_icon").style.color = "#49A342";
        }

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
        if(mailing_address == "") {
            printError("mailing_addressErr", "Please! Select Your Mailing/Postal Address");
        } else {
            printError("mailing_addressErr", "");
            mailing_addressErr = false;
        }
        // End Validate Mailing/Postal Address

        // Start Validate Country Code
        if(country_code == "countrycode") {
            printError("country_codeErr", "Please! Select Your Country Code");
        } else {
            printError("country_codeErr", "");
            country_codeErr = false;
        }
        // End Validate Country Code

        // Start Validate Mobile Operator Code
        if(mobile_code == "0") {
            printError("mobile_codeErr", "Please! Select Your Mobile Operator Code");
        } else {
            printError("mobile_codeErr", "");
            mobile_codeErr = false;
        }
        // End Validate Mobile Operator Code

        // Start Validate Mobile Number
        if(number == "") {
            printError("numberErr", "Please! Enter Your Mobile Number");
        } else {
            var regex = /^[1-9]\d{6}$/;
            if(regex.test(number) === false) {
                printError("numberErr", "Please! Enter a valid 7 last digit of Mobile Number");
            } else{
                printError("numberErr", "");
                numberErr = false;
            }
        }
        // End Validate Mobile Number

        if((usernameErr || emailErr || passwordErr || first_nameErr || middle_nameErr || last_nameErr || genderErr || dobErr || dob_dayErr 
        || dob_monthErr || dob_yearErr || cnicErr || cnic_typeErr || countryErr || nationalityErr || cityErr || mailing_addressErr || country_codeErr || mobile_codeErr || numberErr ) == true){
            return false;
        }else{
            return true;
        }
    }
</script>





<!-- Navigator Section Start -->
<div class="breadcrumbs col-md-12">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1 style="color:#db3636;font-weight:bold;"><?php echo $currentPage; ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="<?php echo $pageURL; ?>"><?php echo $currentPage; ?></a></li>
                            <li class="active"><a href="edit_lawyers.php?id=<?php echo $id; ?>"><?php echo $lawyer_name; ?></a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navigator Section Start -->




<div class="content">
    <div class="animated fadeIn">
        <div class="row">                
            <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body card-block">
                            <div class="text-center" id="paralaxImg">
                                <span class="hvr-bob" id="imgSpan">
                                <div id="reflect"></div>
                                    <img src="../<?php echo $image; ?>" alt="Profile Image of <?php echo $lawyer_name; ?>" title="Profile Image of <?php echo $lawyer_name; ?>" id="image">
                                </span>
                            </div>
                            <form action="" method="POST" id="submit-form" onsubmit="return formValidation()">
                            <?php
                                $role = "Lawyer";
                                $query=mysqli_query($conn,"select * from user inner join lawyer_details on user.id=lawyer_details.user_id where user.role='".$role."' and user.id='".$id."'");
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Username</div>
                                        <input type="text" id="username" name="username" placeholder="Enter Username" class="form-control" value="<?php echo $row["username"]; ?>">
                                        <div class="input-group-addon" id="username_icon"><i class="fa fa-user"></i></div>
                                    </div>
                                    <span class="error" id="usernameErr"></span>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Email Address</div>
                                        <input type="email" id="email" name="email" placeholder="Enter Email Address" class="form-control" value="<?php echo $row["email"]; ?>">
                                        <div class="input-group-addon" id="email_icon"><i class="fa fa-envelope"></i></div>
                                    </div>
                                    <span class="error" id="emailErr"></span>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Password</div>
                                        <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control" value="<?php echo $row["password"]; ?>">
                                        <div class="input-group-addon" id="password_icon"><i class="fa fa-lock"></i></div>
                                    </div>
                                    <span class="error" id="passwordErr"></span>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">First Name</div>
                                            <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control" value="<?php echo $row["first_name"]; ?>">
                                            <div class="input-group-addon" id="first_name_icon"><i class="fa fa-user"></i></div>
                                        </div>
                                        <span class="error" id="first_nameErr"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">Middle Name</div>
                                            <input type="text" id="middle_name" name="middle_name" placeholder="Middle Name" class="form-control" value="<?php echo $row["middle_name"]; ?>">
                                            <div class="input-group-addon" id="middle_name_icon"><i class="fa fa-user"></i></div>
                                        </div>
                                        <span class="error" id="middle_nameErr"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">Last Name</div>
                                            <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo $row["last_name"]; ?>">
                                            <div class="input-group-addon" id="last_name_icon"><i class="fa fa-user"></i></div>
                                        </div>
                                        <span class="error" id="last_nameErr"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-5">
                                        <div class="input-group">
                                            <div class="input-group-addon">Gender</div>
                                            <div class="form-control text-center">
                                                <input type="radio" id="male" name="gender" value="male">
                                                <label style="margin-right: 15px;" onclick="onClickMale()">Male</label>
                                                <input type="radio" id="female" name="gender" value="female">
                                                <label onclick="onClickFemale()">Female</label>
                                            </div>
                                            <div class="input-group-addon" id="gender_icon"><i class="fa fa-venus-mars"></i></div>
                                        </div>
                                        <span class="error" id="genderErr"></span>
                                        <script type="text/javascript">
                                            function onClickMale(){
                                                document.getElementById("male").checked = true;
                                            }
                                            function onClickFemale(){
                                                document.getElementById("female").checked = true;
                                            }
                                            var male = document.getElementById("male").value;
                                            var female = document.getElementById("female").value;
                                            if(male==<?php echo $row["gender"]; ?>){
                                                document.getElementById("male").checked = true;
                                            }else{
                                                document.getElementById("male").checked = false;
                                            }
                                            if(female==<?php echo $row["gender"]; ?>){
                                                document.getElementById("female").checked = true;
                                            }else{
                                                document.getElementById("female").checked = false;
                                            }
                                        </script>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <div class="input-group">
                                            <div class="input-group-addon">DOB</div>
                                            <select name="dob_day" id="dob_day" class="form-control">
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
                                                if (day0.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day0.selected = "selected";
                                                }
                                                if (day1.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day1.selected = "selected";
                                                }
                                                if (day2.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day2.selected = "selected";
                                                }
                                                if (day3.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day3.selected = "selected";
                                                }
                                                if (day4.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day4.selected = "selected";
                                                }
                                                if (day5.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day5.selected = "selected";
                                                }
                                                if (day6.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day6.selected = "selected";
                                                }
                                                if (day7.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day7.selected = "selected";
                                                }
                                                if (day8.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day8.selected = "selected";
                                                }
                                                if (day9.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day9.selected = "selected";
                                                }
                                                if (day10.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day10.selected = "selected";
                                                }
                                                if (day11.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day11.selected = "selected";
                                                }
                                                if (day12.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day12.selected = "selected";
                                                }
                                                if (day13.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day13.selected = "selected";
                                                }
                                                if (day14.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day14.selected = "selected";
                                                }
                                                if (day15.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day15.selected = "selected";
                                                }
                                                if (day16.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day16.selected = "selected";
                                                }
                                                if (day17.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day17.selected = "selected";
                                                }
                                                if (day18.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day18.selected = "selected";
                                                }
                                                if (day19.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day19.selected = "selected";
                                                }
                                                if (day20.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day20.selected = "selected";
                                                }
                                                if (day21.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day21.selected = "selected";
                                                }
                                                if (day22.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day22.selected = "selected";
                                                }
                                                if (day23.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day23.selected = "selected";
                                                }
                                                if (day24.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day24.selected = "selected";
                                                }
                                                if (day25.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day25.selected = "selected";
                                                }
                                                if (day26.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day26.selected = "selected";
                                                }
                                                if (day27.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day27.selected = "selected";
                                                }
                                                if (day28.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day28.selected = "selected";
                                                }
                                                if (day29.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day29.selected = "selected";
                                                }
                                                if (day30.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day30.selected = "selected";
                                                }
                                                if (day31.value == "<?php echo $row["dob_day"]; ?>"){
                                                    day31.selected = "selected";
                                                }
                                            </script>
                                            <select name="dob_month" id="dob_month" class="form-control">
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
                                                if (month0.value == "<?php echo $row["dob_month"]; ?>"){
                                                    month0.selected = "selected";
                                                }
                                                if (January.value == "<?php echo $row["dob_month"]; ?>"){
                                                    January.selected = "selected";
                                                }
                                                if (February.value == "<?php echo $row["dob_month"]; ?>"){
                                                    February.selected = "selected";
                                                }
                                                if (March.value == "<?php echo $row["dob_month"]; ?>"){
                                                    March.selected = "selected";
                                                }
                                                if (April.value == "<?php echo $row["dob_month"]; ?>"){
                                                    April.selected = "selected";
                                                }
                                                if (May.value == "<?php echo $row["dob_month"]; ?>"){
                                                    May.selected = "selected";
                                                }
                                                if (June.value == "<?php echo $row["dob_month"]; ?>"){
                                                    June.selected = "selected";
                                                }
                                                if (July.value == "<?php echo $row["dob_month"]; ?>"){
                                                    July.selected = "selected";
                                                }
                                                if (August.value == "<?php echo $row["dob_month"]; ?>"){
                                                    August.selected = "selected";
                                                }
                                                if (September.value == "<?php echo $row["dob_month"]; ?>"){
                                                    September.selected = "selected";
                                                }
                                                if (October.value == "<?php echo $row["dob_month"]; ?>"){
                                                    October.selected = "selected";
                                                }
                                                if (November.value == "<?php echo $row["dob_month"]; ?>"){
                                                    November.selected = "selected";
                                                }
                                                if (December.value == "<?php echo $row["dob_month"]; ?>"){
                                                    December.selected = "selected";
                                                }
                                            </script>
                                            <select name="dob_year" id="dob_year" class="form-control">
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
                                            <script type="text/javascript">
                                                var year0 = document.getElementById("year0");
                                                if (year0.value == "<?php echo $row["dob_year"]; ?>"){
                                                    year0.selected = "selected";
                                                }
                                                <?php
                                                $sql2 = "select * from years order by year desc";
                                                $result2 = $conn->query($sql2);
                                                if ($result2->num_rows > 0) {
                                                    while ($row2 = $result2->fetch_assoc()) {
                                                ?>
                                                var year<?php echo $row2['year']; ?> = document.getElementById("year<?php echo $row2['year']; ?>");
                                                if (year<?php echo $row2['year']; ?>.value == "<?php echo $row["dob_year"]; ?>"){
                                                    year<?php echo $row2['year']; ?>.selected = "selected";
                                                }
                                                <?php } } ?>
                                            </script>
                                            <div class="input-group-addon" id="dob_icon"><i class="fa fa-calendar"></i></div>
                                        </div>
                                        <span class="error" id="dobErr"></span>
                                        <span class="error" id="dob_dayErr"></span>
                                        <span class="error" id="dob_monthErr"></span>
                                        <span class="error" id="dob_yearErr"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">CNIC/NICOP/B-form</div>
                                        <input type="text" id="cnic" name="cnic" maxlength="13" placeholder="CNIC/NICOP/B-form Here..." class="form-control" value="<?php echo $row["cnic"]; ?>">
                                        <div class="form-control text-center">
                                            <input type="radio" id="personal" name="personalORparents" value="yes">
                                            <label onclick="onClickPersonal()" style="margin-right: 15px;">Personal</label>
                                            <input type="radio" id="parents/guardians" name="personalORparents" value="no">
                                            <label onclick="onClickParents()">Parents/Guardians</label>
                                        </div>
                                        <div class="input-group-addon" id="cnic_icon"><i class="fa fa-id-card"></i></div>
                                    </div>
                                    <span class="error" id="cnicErr"></span>
                                    <span class="error" id="cnic_typeErr"></span>
                                    <script type="text/javascript">
                                        var personal = document.getElementById("personal").value;
                                        var parents = document.getElementById("parents/guardians").value;
                                        if(personal=="<?php echo $row["cnic_type"]; ?>"){
                                            document.getElementById("personal").checked = true;
                                        }else{
                                            document.getElementById("personal").checked = false;
                                        }
                                        if(parents=="<?php echo $row["cnic_type"]; ?>"){
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
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">Country</div>
                                            <select name="country" id="country" class="form-control">
                                                <option value="country" id="country0">-- Select Country --</option>
                                                <?php
                                                    $query = mysqli_query($conn,"select * from countries");
                                                    while($rows = mysqli_fetch_array($query))
                                                { ?>
                                                <option value="<?php echo $rows['Country_Name']?>" id="country<?php echo $rows['Country_Id']?>"><?php echo $rows['Country_Name']?></option>
                                                <?php } ?>
                                            </select>
                                            <div class="input-group-addon" id="country_icon"><i class="fa fa-map"></i></div>
                                        </div>
                                        <span class="error" id="countryErr"></span>
                                        <script type="text/javascript">
                                            var country0 = document.getElementById("country0");
                                            if (country0.value == "<?php echo $row["country"]; ?>"){
                                                country0.selected = "selected";
                                            }
                                            <?php
                                            $sql2 = "select * from countries";
                                            $result2 = $conn->query($sql2);
                                            if ($result2->num_rows > 0) {
                                                while ($row2 = $result2->fetch_assoc()) {
                                            ?>
                                            var country<?php echo $row2['Country_Id']; ?> = document.getElementById("country<?php echo $row2['Country_Id']; ?>");
                                            if (country<?php echo $row2['Country_Id']; ?>.value == "<?php echo $row["country"]; ?>"){
                                                country<?php echo $row2['Country_Id']; ?>.selected = "selected";
                                            }
                                            <?php } } ?>
                                        </script>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">Nationality</div>
                                            <select name="nationality" id="nationality" class="form-control">
                                                <option value="nationality" id="nationality0">-- Select Nationality --</option>
                                                <?php
                                                    $query2 = mysqli_query($conn,"select * from countries");
                                                    while($rows2 = mysqli_fetch_array($query2))
                                                { ?>
                                                <option value="<?php echo $rows2['nationality']?>" id="nation<?php echo $rows2['Country_Id']?>"><?php echo $rows2['nationality']?></option>
                                                <?php } ?>
                                            </select>
                                            <div class="input-group-addon" id="nationality_icon"><i class="fa fa-map"></i></div>
                                        </div>
                                        <span class="error" id="nationalityErr"></span>
                                        <script type="text/javascript">
                                            var nationality0 = document.getElementById("nationality0");
                                            if (nationality0.value == "<?php echo $row["nationality"]; ?>"){
                                                nationality0.selected = "selected";
                                            }
                                            <?php
                                            $sql2 = "select * from countries";
                                            $result2 = $conn->query($sql2);
                                            if ($result2->num_rows > 0) {
                                                while ($row2 = $result2->fetch_assoc()) {
                                            ?>
                                            var nation<?php echo $row2['Country_Id']; ?> = document.getElementById("nation<?php echo $row2['Country_Id']; ?>");
                                            if (nation<?php echo $row2['Country_Id']; ?>.value == "<?php echo $row["nationality"]; ?>"){
                                                nation<?php echo $row2['Country_Id']; ?>.selected = "selected";
                                            }
                                            <?php } } ?>
                                        </script>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">City</div>
                                            <select name="city" id="city" class="form-control">
                                                <option value="city" id="city0">-- Select City --</option>
                                                <?php
                                                    $query2 = mysqli_query($conn,"select * from cities");
                                                    while($rows2 = mysqli_fetch_array($query2))
                                                { ?>
                                                <option value="<?php echo $rows2['City_Name']?>" id="city<?php echo $rows2['City_Id']?>"><?php echo $rows2['City_Name']?></option>
                                                <?php } ?>
                                            </select>
                                            <div class="input-group-addon" id="city_icon"><i class="fa fa-map"></i></div>
                                        </div>
                                        <span class="error" id="cityErr"></span>
                                        <script type="text/javascript">
                                            var city0 = document.getElementById("city0");
                                            if (city0.value == "<?php echo $row["city"]; ?>"){
                                                city0.selected = "selected";
                                            }
                                            <?php
                                            $sql2 = "select * from cities";
                                            $result2 = $conn->query($sql2);
                                            if ($result2->num_rows > 0) {
                                                while ($row2 = $result2->fetch_assoc()) {
                                            ?>
                                            var city<?php echo $row2['City_Id']; ?> = document.getElementById("city<?php echo $row2['City_Id']; ?>");
                                            if (city<?php echo $row2['City_Id']; ?>.value == "<?php echo $row["city"]; ?>"){
                                                city<?php echo $row2['City_Id']; ?>.selected = "selected";
                                            }
                                            <?php } } ?>
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Mailing Address</div>
                                        <textarea class="form-control" placeholder="Mailing Address Here..." name="mailing_address" id="mailing_address" cols="30" rows="3"><?php echo $row["mailing_address"]; ?></textarea>
                                        <div class="input-group-addon" id="mailing_address_icon"><i class="fa fa-home"></i></div>
                                    </div>
                                    <span class="error" id="mailing_addressErr"></span>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">Contact No</div>
                                            <select name="country_code" id="country_code" class="form-control">
                                                <option value="countrycode" id="countrycode0">-- Select Country Code --</option>
                                                <?php
                                                    $query2 = mysqli_query($conn,"select * from countries");
                                                    while($rows2 = mysqli_fetch_array($query2))
                                                { ?>
                                                <option value="<?php echo $rows2['phonecode']?>" id="country_code<?php echo $rows2['Country_Id']?>"><?php echo $rows2['phonecode']?></option>
                                                <?php } ?>
                                            </select>
                                            <script type="text/javascript">
                                                var countrycode0 = document.getElementById("countrycode0");
                                                if (countrycode0.value == "<?php echo $row["country_code"]; ?>"){
                                                    countrycode0.selected = "selected";
                                                }
                                                <?php
                                                $sql2 = "select * from countries";
                                                $result2 = $conn->query($sql2);
                                                if ($result2->num_rows > 0) {
                                                    while ($row2 = $result2->fetch_assoc()) {
                                                ?>
                                                var country_code<?php echo $row2['Country_Id']; ?> = document.getElementById("country_code<?php echo $row2['Country_Id']; ?>");
                                                if (country_code<?php echo $row2['Country_Id']; ?>.value == "<?php echo $row["country_code"]; ?>"){
                                                    country_code<?php echo $row2['Country_Id']; ?>.selected = "selected";
                                                }
                                                <?php } } ?>
                                            </script>
                                        </div>
                                        <span class="error" id="country_codeErr"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <select name="mobile_code" id="mobile_code" class="form-control">
                                                <option value="0" id="mobile_code0">-- Select Mobile Operator Code --</option>
                                                <?php
                                                    $query2 = mysqli_query($conn,"select * from mobile_code");
                                                    while($rows2 = mysqli_fetch_array($query2))
                                                { ?>
                                                <option value="<?php echo $rows2['mobile_code']?>" id="mobile_code<?php echo $rows2['mobile_code']?>"><?php echo $rows2['mobile_code']?></option>
                                                <?php } ?>
                                            </select>
                                            <script type="text/javascript">
                                                var mobile_code0 = document.getElementById("mobile_code0");
                                                if (mobile_code0.value == "<?php echo $row["mobile_code"]; ?>"){
                                                    mobile_code0.selected = "selected";
                                                }
                                                <?php
                                                $sql2 = "select * from mobile_code";
                                                $result2 = $conn->query($sql2);
                                                if ($result2->num_rows > 0) {
                                                    while ($row2 = $result2->fetch_assoc()) {
                                                ?>
                                                var mobile_code<?php echo $row2['mobile_code']; ?> = document.getElementById("mobile_code<?php echo $row2['mobile_code']; ?>");
                                                if (mobile_code<?php echo $row2['mobile_code']; ?>.value == "<?php echo $row["mobile_code"]; ?>"){
                                                    mobile_code<?php echo $row2['mobile_code']; ?>.selected = "selected";
                                                }
                                                <?php } } ?>
                                            </script>
                                        </div>
                                        <span class="error" id="mobile_codeErr"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <input type="text" id="number" name="number" maxlength="7" placeholder="Number Here..." class="form-control" value="<?php echo $row["number"]; ?>">
                                            <a href="tel:+<?php echo $row["country_code"].' ',$row["mobile_code"].' ',$row["number"]; ?>">
                                                <div class="input-group-addon" id="number_icon"><i class="fa fa-phone"></i></div>
                                            </a>
                                        </div>
                                        <span class="error" id="numberErr"></span>
                                    </div>
                                </div>
                                <div class="form-group" style="padding:0px;margin-top:-10px;">
                                    <i style="color: darkgrey; font-size: 8pt;">&nbsp;&nbsp;&nbsp;Example:  923331122334 Country Code + Mobile Operator Code + Number. &nbsp;&nbsp;&nbsp;&nbsp;</i><br>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Highest Qualification</div>
                                            <input type="text" placeholder="Highest Qualification Here..." class="form-control" id="highest_qualification" value="<?php echo $highest_qualification; ?>" disabled>
                                            <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Current Status</div>
                                            <input type="text" placeholder="Current Status Here..." class="form-control" id="current_status" value="<?php echo $current_status; ?>" disabled>
                                            <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Specialization</div>
                                            <input type="text" placeholder="Specialization Here..." class="form-control" id="specialization" value="<?php echo $specialization; ?>" disabled>
                                            <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var specialization = "<?php echo $specialization; ?>";
                                        if(specialization==""){
                                            document.getElementById("specialization").value = "N/A";
                                        } else {
                                            document.getElementById("specialization").value = "<?php echo $specialization; ?>";
                                        }
                                    </script>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Other Specialization</div>
                                            <input type="text" placeholder="Other Specialization Here..." class="form-control" id="specialization_other" value="<?php echo $specialization_other; ?>" disabled>
                                            <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var specialization_other = "<?php echo $specialization_other; ?>";
                                        if(specialization_other==""){
                                            document.getElementById("specialization_other").value = "N/A";
                                        } else {
                                            document.getElementById("specialization_other").value = "<?php echo $specialization_other; ?>";
                                        }
                                    </script>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Future Plan</div>
                                            <input type="text" placeholder="Future Plan Here..." class="form-control" id="future_plan" value="<?php echo $future_plan; ?>" disabled>
                                            <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Employment Status</div>
                                            <input type="text" placeholder="Employment Status Here..." class="form-control" id="employment_status" value="<?php echo $employment_status; ?>" disabled>
                                            <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var employment_status = "<?php echo $employment_status; ?>";
                                        if(employment_status==""){
                                            document.getElementById("employment_status").value = "N/A";
                                        } else {
                                            document.getElementById("employment_status").value = "<?php echo $employment_status; ?>";
                                        }
                                    </script>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Experience Level</div>
                                            <input type="text" placeholder="Experience Level Here..." class="form-control" id="experience_level" value="<?php echo $experience_level; ?>" disabled>
                                            <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var experience_level = "<?php echo $experience_level; ?>";
                                        if(experience_level==""){
                                            document.getElementById("experience_level").value = "N/A";
                                        } else {
                                            document.getElementById("experience_level").value = "<?php echo $experience_level; ?>";
                                        }
                                    </script>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Job City</div>
                                            <input type="text" placeholder="Job City Here..." class="form-control" id="job_city" value="<?php echo $job_city; ?>" disabled>
                                            <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var job_city = "<?php echo $job_city; ?>";
                                        if(job_city==""){
                                            document.getElementById("job_city").value = "N/A";
                                        } else {
                                            document.getElementById("job_city").value = "<?php echo $job_city; ?>";
                                        }
                                    </script>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Salary Income</div>
                                        <input type="text" placeholder="Salary Income Here..." class="form-control" id="salary_income" value="<?php echo $salary_income; ?>" disabled>
                                        <div class="input-group-addon" style="color:white;background:green;"><i class="fa fa-money"></i></div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var salary_income = "<?php echo $salary_income; ?>";
                                    if(salary_income==""){
                                        document.getElementById("salary_income").value = "N/A";
                                    } else {
                                        document.getElementById("salary_income").value = "<?php echo $salary_income; ?>";
                                    }
                                </script>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Lawyer Type</div>
                                            <input type="text" placeholder="Lawyer Type Here..." class="form-control" id="lawyer_types" value="<?php echo $lawyer_types; ?>" disabled>
                                            <div class="input-group-addon"><i class="fa fa-users"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Other Lawyer Type</div>
                                            <input type="text" placeholder="Other Lawyer Type Here..." class="form-control" id="lawyer_types_other" value="<?php echo $lawyer_types_other; ?>" disabled>
                                            <div class="input-group-addon"><i class="fa fa-users"></i></div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var lawyer_types_other = "<?php echo $lawyer_types_other; ?>";
                                        if(lawyer_types_other==""){
                                            document.getElementById("lawyer_types_other").value = "N/A";
                                        } else {
                                            document.getElementById("lawyer_types_other").value = "<?php echo $lawyer_types_other; ?>";
                                        }
                                    </script>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Short About Me</div>
                                        <textarea class="form-control" placeholder="Short About Me Here..." cols="30" rows="3" id="short_about_me" disabled><?php echo $short_about_me; ?></textarea>
                                        <div class="input-group-addon"><i class="fa fa-list"></i></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">About Me</div>
                                        <textarea class="form-control" placeholder="About Me Here..." cols="30" rows="4" id="about_me" disabled><?php echo $about_me; ?></textarea>
                                        <div class="input-group-addon"><i class="fa fa-list"></i></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Location</div>
                                            <input type="text" placeholder="Location Here..." class="form-control" id="lawyer_location" value="<?php echo $lawyer_location; ?>" disabled>
                                            <div class="input-group-addon"><i class="fa fa-map"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Display Contact No</div>
                                            <input type="text" placeholder="Display Contact No Here..." class="form-control" id="lawyer_contact_number" value="+<?php echo $lawyer_contact_countrycode.' ',$lawyer_contact_mobilecode.' ',$lawyer_contact_number; ?>" disabled>
                                            <a href="tel:+<?php echo $lawyer_contact_countrycode.' ',$lawyer_contact_mobilecode.' ',$lawyer_contact_number; ?>">
                                                <div class="input-group-addon" id="lawyer_contact_icon"><i class="fa fa-phone"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">Casses Done</div>
                                            <input type="text" placeholder="Casses Done Here..." class="form-control" id="lawyer_casses_done" value="<?php echo $lawyer_casses_done; ?>" disabled>
                                            <div class="input-group-addon"><i class="fa fa-book"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">Display Email Address</div>
                                            <input type="text" placeholder="Display Email Address Here..." class="form-control" id="lawyer_email" value="<?php echo $lawyer_email; ?>" disabled>
                                            <a href="mailto:<?php echo $lawyer_email; ?>">
                                                <div class="input-group-addon" id="lawyer_email_icon"><i class="fa fa-envelope"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Skype Invitation URL</div>
                                            <input type="text" placeholder="Skype Invitation URL Here..." class="form-control" id="lawyer_skype" value="<?php echo $lawyer_skype; ?>" disabled>
                                            <a href="<?php echo $lawyer_skype; ?>">
                                                <div class="input-group-addon" style="color:white;background:#00aff0;"><i class="fa fa-skype"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var lawyer_skype = "<?php echo $lawyer_skype; ?>";
                                        if(lawyer_skype==""){
                                            document.getElementById("lawyer_skype").value = "N/A";
                                        } else {
                                            document.getElementById("lawyer_skype").value = "<?php echo $lawyer_skype; ?>";
                                        }
                                    </script>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Website URL</div>
                                            <input type="text" placeholder="Website URL Here..." class="form-control" id="lawyer_website" value="<?php echo $lawyer_website; ?>" disabled>
                                            <a href="<?php echo $lawyer_website; ?>">
                                                <div class="input-group-addon" style="color:white;background:grey;"><i class="fa fa-globe"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var lawyer_website = "<?php echo $lawyer_website; ?>";
                                        if(lawyer_website==""){
                                            document.getElementById("lawyer_website").value = "N/A";
                                        } else {
                                            document.getElementById("lawyer_website").value = "<?php echo $lawyer_website; ?>";
                                        }
                                    </script>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Facebook Page URL</div>
                                            <input type="text" placeholder="Facebook Page URL Here..." class="form-control" id="lawyer_facebook" value="<?php echo $lawyer_facebook; ?>" disabled>
                                            <a href="<?php echo $lawyer_facebook; ?>">
                                                <div class="input-group-addon" style="color:white;background:#3b5998;"><i class="fa fa-facebook"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var lawyer_facebook = "<?php echo $lawyer_facebook; ?>";
                                        if(lawyer_facebook==""){
                                            document.getElementById("lawyer_facebook").value = "N/A";
                                        } else {
                                            document.getElementById("lawyer_facebook").value = "<?php echo $lawyer_facebook; ?>";
                                        }
                                    </script>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Twitter Account URL</div>
                                            <input type="text" placeholder="Twitter Account URL Here..." class="form-control" id="lawyer_twitter" value="<?php echo $lawyer_twitter; ?>" disabled>
                                            <a href="<?php echo $lawyer_twitter; ?>">
                                                <div class="input-group-addon" style="color:white;background:#00acee;"><i class="fa fa-twitter"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var lawyer_twitter = "<?php echo $lawyer_twitter; ?>";
                                        if(lawyer_twitter==""){
                                            document.getElementById("lawyer_twitter").value = "N/A";
                                        } else {
                                            document.getElementById("lawyer_twitter").value = "<?php echo $lawyer_twitter; ?>";
                                        }
                                    </script>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Youtube Channel URL</div>
                                            <input type="text" placeholder="Youtube Channel URL Here..." class="form-control" id="lawyer_youtube" value="<?php echo $lawyer_youtube; ?>" disabled>
                                            <a href="<?php echo $lawyer_youtube; ?>">
                                                <div class="input-group-addon" style="color:white;background:#FF0000;"><i class="fa fa-youtube-play"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var lawyer_youtube = "<?php echo $lawyer_youtube; ?>";
                                        if(lawyer_youtube==""){
                                            document.getElementById("lawyer_youtube").value = "N/A";
                                        } else {
                                            document.getElementById("lawyer_youtube").value = "<?php echo $lawyer_youtube; ?>";
                                        }
                                    </script>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Google Plus URL</div>
                                            <input type="text" placeholder="Google Plus URL Here..." class="form-control" id="lawyer_googleplus" value="<?php echo $lawyer_googleplus; ?>" disabled>
                                            <a href="<?php echo $lawyer_googleplus; ?>">
                                                <div class="input-group-addon" style="color:white;background:#db4a39;"><i class="fa fa-google-plus"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        var lawyer_googleplus = "<?php echo $lawyer_googleplus; ?>";
                                        if(lawyer_googleplus==""){
                                            document.getElementById("lawyer_googleplus").value = "N/A";
                                        } else {
                                            document.getElementById("lawyer_googleplus").value = "<?php echo $lawyer_googleplus; ?>";
                                        }
                                    </script>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Linkedin URL</div>
                                        <input type="text" placeholder="Linkedin URL Here..." class="form-control" id="lawyer_linkedin" value="<?php echo $lawyer_linkedin; ?>" disabled>
                                        <a href="<?php echo $lawyer_linkedin; ?>">
                                            <div class="input-group-addon" style="color:white;background:#0e76a8;"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var lawyer_linkedin = "<?php echo $lawyer_linkedin; ?>";
                                    if(lawyer_linkedin==""){
                                        document.getElementById("lawyer_linkedin").value = "N/A";
                                    } else {
                                        document.getElementById("lawyer_linkedin").value = "<?php echo $lawyer_linkedin; ?>";
                                    }
                                </script>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Personal Statement</div>
                                        <textarea class="form-control" placeholder="Personal Statement Here..." id="lawyer_personal_statement" cols="30" rows="4" disabled><?php echo $lawyer_personal_statement; ?></textarea>
                                        <div class="input-group-addon"><i class="fa fa-list"></i></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Service 1</div>
                                            <input type="text" placeholder="Service 1 Here..." class="form-control" id="service1" value="<?php echo $service1; ?>" disabled>
                                            <div class="input-group-addon" id="service1Icons_1" style="color:#db3636;"><i class="<?php echo $service1_Icon; ?>"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Service 1 Icon</div>
                                            <input type="text" placeholder="Service 1 Icon Here..." class="form-control" id="service1_Icon" value="<?php echo $service1_Icon; ?>" disabled>
                                            <div class="input-group-addon" id="service1Icons_2" style="color:#db3636;"><i class="<?php echo $service1_Icon; ?>"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Service 1 Details</div>
                                        <textarea class="form-control" id="service1Detail" placeholder="Service 1 Details Here..." cols="30" rows="2" disabled><?php echo $service1Detail; ?></textarea>
                                        <div class="input-group-addon" id="service1Icons_3" style="color:#db3636;"><i class="<?php echo $service1_Icon; ?>"></i></div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var service1Icons = "<?php echo $service1_Icon; ?>";
                                    if(service1Icons==""){
                                        document.getElementById("service1Icons_1").innerHTML='<i class="fa fa-exclamation"></i>';
                                        document.getElementById("service1Icons_2").innerHTML='<i class="fa fa-exclamation"></i>';
                                        document.getElementById("service1Icons_3").innerHTML='<i class="fa fa-exclamation"></i>';
                                    } else {
                                        document.getElementById("service1Icons_1").innerHTML='<i class="<?php echo $service1_Icon; ?>"></i>';
                                        document.getElementById("service1Icons_2").innerHTML='<i class="<?php echo $service1_Icon; ?>"></i>';
                                        document.getElementById("service1Icons_3").innerHTML='<i class="<?php echo $service1_Icon; ?>"></i>';
                                    }
                                </script>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Service 2</div>
                                            <input type="text" placeholder="Service 2 Here..." class="form-control" id="service2" value="<?php echo $service2; ?>" disabled>
                                            <div class="input-group-addon" id="service2Icons_1" style="color:#db3636;"><i class="<?php echo $service2_Icon; ?>"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Service 2 Icon</div>
                                            <input type="text" placeholder="Service 2 Icon Here..." class="form-control" id="service2_Icon" value="<?php echo $service2_Icon; ?>" disabled>
                                            <div class="input-group-addon" id="service2Icons_2" style="color:#db3636;"><i class="<?php echo $service2_Icon; ?>"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Service 2 Details</div>
                                        <textarea class="form-control" id="service2Detail" placeholder="Service 2 Details Here..." cols="30" rows="2" disabled><?php echo $service2Detail; ?></textarea>
                                        <div class="input-group-addon" id="service2Icons_3" style="color:#db3636;"><i class="<?php echo $service2_Icon; ?>"></i></div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var service2 = "<?php echo $service2; ?>";
                                    if(service2==""){
                                        document.getElementById("service2").value = "N/A";
                                    } else {
                                        document.getElementById("service2").value = "<?php echo $service2; ?>";
                                    }
                                    var service2Detail = "<?php echo $service2Detail; ?>";
                                    if(service2Detail==""){
                                        document.getElementById("service2Detail").value = "N/A";
                                    } else {
                                        document.getElementById("service2Detail").value = "<?php echo $service2Detail; ?>";
                                    }
                                    var service2Icons = "<?php echo $service2_Icon; ?>";
                                    if(service2Icons==""){
                                        document.getElementById("service2_Icon").value = "N/A";
                                        document.getElementById("service2Icons_1").innerHTML='<i class="fa fa-exclamation"></i>';
                                        document.getElementById("service2Icons_2").innerHTML='<i class="fa fa-exclamation"></i>';
                                        document.getElementById("service2Icons_3").innerHTML='<i class="fa fa-exclamation"></i>';
                                    } else {
                                        document.getElementById("service2_Icon").value = "<?php echo $service2_Icon; ?>";
                                        document.getElementById("service2Icons_1").innerHTML='<i class="<?php echo $service2_Icon; ?>"></i>';
                                        document.getElementById("service2Icons_2").innerHTML='<i class="<?php echo $service2_Icon; ?>"></i>';
                                        document.getElementById("service2Icons_3").innerHTML='<i class="<?php echo $service2_Icon; ?>"></i>';
                                    }
                                </script>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Service 3</div>
                                            <input type="text" placeholder="Service 3 Here..." class="form-control" id="service3" value="<?php echo $service3; ?>" disabled>
                                            <div class="input-group-addon" id="service3Icons_1" style="color:#db3636;"><i class="<?php echo $service3_Icon; ?>"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Service 3 Icon</div>
                                            <input type="text" placeholder="Service 3 Icon Here..." class="form-control" id="service3_Icon" value="<?php echo $service3_Icon; ?>" disabled>
                                            <div class="input-group-addon" id="service3Icons_2" style="color:#db3636;"><i class="<?php echo $service3_Icon; ?>"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Service 3 Details</div>
                                        <textarea class="form-control" id="service3Detail" placeholder="Service 3 Details Here..." cols="30" rows="2" disabled><?php echo $service3Detail; ?></textarea>
                                        <div class="input-group-addon" id="service3Icons_3" style="color:#db3636;"><i class="<?php echo $service3_Icon; ?>"></i></div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var service3 = "<?php echo $service3; ?>";
                                    if(service3==""){
                                        document.getElementById("service3").value = "N/A";
                                    } else {
                                        document.getElementById("service3").value = "<?php echo $service3; ?>";
                                    }
                                    var service3Detail = "<?php echo $service3Detail; ?>";
                                    if(service3Detail==""){
                                        document.getElementById("service3Detail").value = "N/A";
                                    } else {
                                        document.getElementById("service3Detail").value = "<?php echo $service3Detail; ?>";
                                    }
                                    var service3Icons = "<?php echo $service3_Icon; ?>";
                                    if(service3Icons==""){
                                        document.getElementById("service3_Icon").value = "N/A";
                                        document.getElementById("service3Icons_1").innerHTML='<i class="fa fa-exclamation"></i>';
                                        document.getElementById("service3Icons_2").innerHTML='<i class="fa fa-exclamation"></i>';
                                        document.getElementById("service3Icons_3").innerHTML='<i class="fa fa-exclamation"></i>';
                                    } else {
                                        document.getElementById("service3_Icon").value = "<?php echo $service3_Icon; ?>";
                                        document.getElementById("service3Icons_1").innerHTML='<i class="<?php echo $service3_Icon; ?>"></i>';
                                        document.getElementById("service3Icons_2").innerHTML='<i class="<?php echo $service3_Icon; ?>"></i>';
                                        document.getElementById("service3Icons_3").innerHTML='<i class="<?php echo $service3_Icon; ?>"></i>';
                                    }
                                </script>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Service 4</div>
                                            <input type="text" placeholder="Service 4 Here..." class="form-control" id="service4" value="<?php echo $service4; ?>" disabled>
                                            <div class="input-group-addon" id="service4Icons_1" style="color:#db3636;"><i class="<?php echo $service4_Icon; ?>"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Service 4 Icon</div>
                                            <input type="text" placeholder="Service 4 Icon Here..." class="form-control" id="service4_Icon" value="<?php echo $service4_Icon; ?>" disabled>
                                            <div class="input-group-addon" id="service4Icons_2" style="color:#db3636;"><i class="<?php echo $service4_Icon; ?>"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Service 4 Details</div>
                                        <textarea class="form-control" id="service4Detail" placeholder="Service 4 Details Here..." cols="30" rows="2" disabled><?php echo $service4Detail; ?></textarea>
                                        <div class="input-group-addon" id="service4Icons_3" style="color:#db3636;"><i class="<?php echo $service4_Icon; ?>"></i></div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var service4 = "<?php echo $service4; ?>";
                                    if(service4==""){
                                        document.getElementById("service4").value = "N/A";
                                    } else {
                                        document.getElementById("service4").value = "<?php echo $service4; ?>";
                                    }
                                    var service4Detail = "<?php echo $service4Detail; ?>";
                                    if(service4Detail==""){
                                        document.getElementById("service4Detail").value = "N/A";
                                    } else {
                                        document.getElementById("service4Detail").value = "<?php echo $service4Detail; ?>";
                                    }
                                    var service4Icons = "<?php echo $service4_Icon; ?>";
                                    if(service4Icons==""){
                                        document.getElementById("service4_Icon").value = "N/A";
                                        document.getElementById("service4Icons_1").innerHTML='<i class="fa fa-exclamation"></i>';
                                        document.getElementById("service4Icons_2").innerHTML='<i class="fa fa-exclamation"></i>';
                                        document.getElementById("service4Icons_3").innerHTML='<i class="fa fa-exclamation"></i>';
                                    } else {
                                        document.getElementById("service4_Icon").value = "<?php echo $service4_Icon; ?>";
                                        document.getElementById("service4Icons_1").innerHTML='<i class="<?php echo $service4_Icon; ?>"></i>';
                                        document.getElementById("service4Icons_2").innerHTML='<i class="<?php echo $service4_Icon; ?>"></i>';
                                        document.getElementById("service4Icons_3").innerHTML='<i class="<?php echo $service4_Icon; ?>"></i>';
                                    }
                                </script>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Service 5</div>
                                            <input type="text" placeholder="Service 5 Here..." class="form-control" id="service5" value="<?php echo $service5; ?>" disabled>
                                            <div class="input-group-addon" id="service5Icons_1" style="color:#db3636;"><i class="<?php echo $service5_Icon; ?>"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Service 5 Icon</div>
                                            <input type="text" placeholder="Service 5 Icon Here..." class="form-control" id="service5_Icon" value="<?php echo $service5_Icon; ?>" disabled>
                                            <div class="input-group-addon" id="service5Icons_2" style="color:#db3636;"><i class="<?php echo $service5_Icon; ?>"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Service 5 Details</div>
                                        <textarea class="form-control" id="service5Detail" placeholder="Service 5 Details Here..." cols="30" rows="2" disabled><?php echo $service5Detail; ?></textarea>
                                        <div class="input-group-addon" id="service5Icons_3" style="color:#db3636;"><i class="<?php echo $service5_Icon; ?>"></i></div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var service5 = "<?php echo $service5; ?>";
                                    if(service5==""){
                                        document.getElementById("service5").value = "N/A";
                                    } else {
                                        document.getElementById("service5").value = "<?php echo $service5; ?>";
                                    }
                                    var service5Detail = "<?php echo $service5Detail; ?>";
                                    if(service5Detail==""){
                                        document.getElementById("service5Detail").value = "N/A";
                                    } else {
                                        document.getElementById("service5Detail").value = "<?php echo $service5Detail; ?>";
                                    }
                                    var service5Icons = "<?php echo $service5_Icon; ?>";
                                    if(service5Icons==""){
                                        document.getElementById("service5_Icon").value = "N/A";
                                        document.getElementById("service5Icons_1").innerHTML='<i class="fa fa-exclamation"></i>';
                                        document.getElementById("service5Icons_2").innerHTML='<i class="fa fa-exclamation"></i>';
                                        document.getElementById("service5Icons_3").innerHTML='<i class="fa fa-exclamation"></i>';
                                    } else {
                                        document.getElementById("service5_Icon").value = "<?php echo $service5_Icon; ?>";
                                        document.getElementById("service5Icons_1").innerHTML='<i class="<?php echo $service5_Icon; ?>"></i>';
                                        document.getElementById("service5Icons_2").innerHTML='<i class="<?php echo $service5_Icon; ?>"></i>';
                                        document.getElementById("service5Icons_3").innerHTML='<i class="<?php echo $service5_Icon; ?>"></i>';
                                    }
                                </script>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Service 6</div>
                                            <input type="text" placeholder="Service 6 Here..." class="form-control" id="service6" value="<?php echo $service6; ?>" disabled>
                                            <div class="input-group-addon" id="service6Icons_1" style="color:#db3636;"><i class="<?php echo $service6_Icon; ?>"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-addon">Service 6 Icon</div>
                                            <input type="text" placeholder="Service 6 Icon Here..." class="form-control" id="service6_Icon" value="<?php echo $service6_Icon; ?>" disabled>
                                            <div class="input-group-addon" id="service6Icons_2" style="color:#db3636;"><i class="<?php echo $service6_Icon; ?>"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Service 6 Details</div>
                                        <textarea class="form-control" id="service6Detail" placeholder="Service 6 Details Here..." cols="30" rows="2" disabled><?php echo $service6Detail; ?></textarea>
                                        <div class="input-group-addon" id="service6Icons_3" style="color:#db3636;"><i class="<?php echo $service6_Icon; ?>"></i></div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var service6 = "<?php echo $service6; ?>";
                                    if(service6==""){
                                        document.getElementById("service6").value = "N/A";
                                    } else {
                                        document.getElementById("service6").value = "<?php echo $service6; ?>";
                                    }
                                    var service6Detail = "<?php echo $service6Detail; ?>";
                                    if(service6Detail==""){
                                        document.getElementById("service6Detail").value = "N/A";
                                    } else {
                                        document.getElementById("service6Detail").value = "<?php echo $service6Detail; ?>";
                                    }
                                    var service6Icons = "<?php echo $service6_Icon; ?>";
                                    if(service6Icons==""){
                                        document.getElementById("service6_Icon").value = "N/A";
                                        document.getElementById("service6Icons_1").innerHTML='<i class="fa fa-exclamation"></i>';
                                        document.getElementById("service6Icons_2").innerHTML='<i class="fa fa-exclamation"></i>';
                                        document.getElementById("service6Icons_3").innerHTML='<i class="fa fa-exclamation"></i>';
                                    } else {
                                        document.getElementById("service6_Icon").value = "<?php echo $service6_Icon; ?>";
                                        document.getElementById("service6Icons_1").innerHTML='<i class="<?php echo $service6_Icon; ?>"></i>';
                                        document.getElementById("service6Icons_2").innerHTML='<i class="<?php echo $service6_Icon; ?>"></i>';
                                        document.getElementById("service6Icons_3").innerHTML='<i class="<?php echo $service6_Icon; ?>"></i>';
                                    }
                                </script>
                                <div class="form-actions form-group text-center">
                                <input type="submit" name="saveChanges" class="btn btn-success" value="Save Changes"></div>
                            <?php } ?>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>



<?php
require("includes/footer.inc.php");
?>