<?php 
    if(isset($_POST["submit_lawyer"])){
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
        $lawyer_types = $_POST['lawyer_types'];
        $lawyer_types_other = $_POST['lawyer_types_other'];
        $short_about_me = $_POST['short_about_me'];
        $about_me = $_POST['about_me'];
        $lawyer_location = $_POST['lawyer_location'];
        $lawyer_casses_done = $_POST['lawyer_casses_done'];
        $lawyer_contact_countrycode = $_POST['lawyer_contact_countrycode'];
        $lawyer_contact_mobilecode = $_POST['lawyer_contact_mobilecode'];
        $lawyer_contact_number = $_POST['lawyer_contact_number'];
        $lawyer_email = $_POST['lawyer_email'];
        $lawyer_skype = $_POST['lawyer_skype'];
        $lawyer_website = $_POST['lawyer_website'];
        $lawyer_facebook = $_POST['lawyer_facebook'];
        $lawyer_twitter = $_POST['lawyer_twitter'];
        $lawyer_youtube = $_POST['lawyer_youtube'];
        $lawyer_googleplus = $_POST['lawyer_googleplus'];
        $lawyer_linkedin = $_POST['lawyer_linkedin'];
        $lawyer_personal_statement = $_POST['lawyer_personal_statement'];
        $service1 = $_POST['service1'];
        $service1Detail = $_POST['service1Detail'];
        $service1_Icon = $_POST['service1_Icon'];
        $service2 = $_POST['service2'];
        $service2Detail = $_POST['service2Detail'];
        $service2_Icon = $_POST['service2_Icon'];
        $service3 = $_POST['service3'];
        $service3Detail = $_POST['service3Detail'];
        $service3_Icon = $_POST['service3_Icon'];
        $service4 = $_POST['service4'];
        $service4Detail = $_POST['service4Detail'];
        $service4_Icon = $_POST['service4_Icon'];
        $service5 = $_POST['service5'];
        $service5Detail = $_POST['service5Detail'];
        $service5_Icon = $_POST['service5_Icon'];
        $service6 = $_POST['service6'];
        $service6Detail = $_POST['service6Detail'];
        $service6_Icon = $_POST['service6_Icon'];
        mysqli_query($conn,"update user set first_name='".$fname."' , middle_name='".$mname."' , last_name='".$lname."' , gender='".$gender."' , dob_day='".$day."' , dob_month='".$month."' , dob_year='".$year."' , cnic='".$cnic."' , cnic_type='".$cnic_type."' , nationality='".$nationality."' , city='".$city."' , mailing_address='".$mailingaddress."' , country_code='".$countrycode."' , mobile_code='".$mobilecode."' , number='".$number."' , highest_qualification='".$highest_qualification."' , specialization='".$specialization."' , specialization_other='".$other."' , current_status='".$current_status."' , future_plan='".$future_plan."' , employment_status='".$employment_status."' , experience_level='".$experience_level."' , job_city='".$job_city."' , salary_income='".$salary_income."' , country='".$country."' where username='".$_SESSION['username']."' limit 1");
        mysqli_query($conn,"update lawyer_details set lawyer_types='".$lawyer_types."' , lawyer_types_other='".$lawyer_types_other."' , short_about_me='".$short_about_me."' , about_me='".$about_me."' , lawyer_location='".$lawyer_location."' , lawyer_casses_done='".$lawyer_casses_done."' , lawyer_contact_countrycode='".$lawyer_contact_countrycode."' , lawyer_contact_mobilecode='".$lawyer_contact_mobilecode."' , lawyer_contact_number='".$lawyer_contact_number."' , lawyer_email='".$lawyer_email."' , lawyer_skype='".$lawyer_skype."' , lawyer_website='".$lawyer_website."' , lawyer_facebook='".$lawyer_facebook."' , lawyer_twitter='".$lawyer_twitter."' , lawyer_youtube='".$lawyer_youtube."' , lawyer_googleplus='".$lawyer_googleplus."' , lawyer_linkedin='".$lawyer_linkedin."' , lawyer_personal_statement='".$lawyer_personal_statement."' , service1='".$service1."' , service1Detail='".$service1Detail."' , service1_Icon='".$service1_Icon."' , service2='".$service2."' , service2Detail='".$service2Detail."' , service2_Icon='".$service2_Icon."' , service3='".$service3."' , service3Detail='".$service3Detail."' , service3_Icon='".$service3_Icon."' , service4='".$service4."' , service4Detail='".$service4Detail."' , service4_Icon='".$service4_Icon."' , service5='".$service5."' , service5Detail='".$service5Detail."' , service5_Icon='".$service5_Icon."' , service6='".$service6."' , service6Detail='".$service6Detail."' , service6_Icon='".$service6_Icon."' where user_id='".$userId."' limit 1");
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
        var lawyer_types = document.getElementById("lawyer_types").value;
        var lawyer_types_other = document.getElementById("lawyer_types_other").value;
        var lawyer_image = document.getElementById("lawyer_image").value;
        var short_about_me = document.getElementById("short_about_me").value;
        var about_me = document.getElementById("about_me").value;
        var lawyer_location = document.getElementById("lawyer_location").value;
        var lawyer_casses_done = document.getElementById("lawyer_casses_done").value;
        var lawyer_contact_countrycode = document.getElementById("lawyer_contact_countrycode").value;
        var lawyer_contact_mobilecode = document.getElementById("lawyer_contact_mobilecode").value;
        var lawyer_contact_number = document.getElementById("lawyer_contact_number").value;
        var lawyer_email = document.getElementById("lawyer_email").value;
        var lawyer_skype = document.getElementById("lawyer_skype").value;
        var lawyer_website = document.getElementById("lawyer_website").value;
        var lawyer_facebook = document.getElementById("lawyer_facebook").value;
        var lawyer_twitter = document.getElementById("lawyer_twitter").value;
        var lawyer_youtube = document.getElementById("lawyer_youtube").value;
        var lawyer_googleplus = document.getElementById("lawyer_googleplus").value;
        var lawyer_linkedin = document.getElementById("lawyer_linkedin").value;
        var lawyer_personal_statement = document.getElementById("lawyer_personal_statement").value;
        var service1 = document.getElementById("service1").value;
        var service1Detail = document.getElementById("service1Detail").value;
        var service1_Icon = document.getElementById("service1_Icon").value;
        var service2 = document.getElementById("service2").value;
        var service2Detail = document.getElementById("service2Detail").value;
        var service2_Icon = document.getElementById("service2_Icon").value;
        var service3 = document.getElementById("service3").value;
        var service3Detail = document.getElementById("service3Detail").value;
        var service3_Icon = document.getElementById("service3_Icon").value;
        var service4 = document.getElementById("service4").value;
        var service4Detail = document.getElementById("service4Detail").value;
        var service4_Icon = document.getElementById("service4_Icon").value;
        var service5 = document.getElementById("service5").value;
        var service5Detail = document.getElementById("service5Detail").value;
        var service5_Icon = document.getElementById("service5_Icon").value;
        var service6 = document.getElementById("service6").value;
        var service6Detail = document.getElementById("service6Detail").value;
        var service6_Icon = document.getElementById("service6_Icon").value;
        
        // Defining error variables with a default value
        var profileImageErr = fnameErr = mnameErr = lnameErr = genderErr = dobErr = dob_dayErr = dob_monthErr = dob_yearErr = cnicErr = cnic_typeErr = countryErr = nationalityErr = cityErr = mailingaddressErr = countrycodeErr = mobilecodeErr = mobilenumberErr = highest_qualificationErr = specializationErr = otherErr = current_statusErr = employment_statusErr = experience_levelErr = job_cityErr = lawyer_typesErr = lawyer_types_otherErr = lawyer_imageErr = short_about_meErr = about_meErr = lawyer_locationErr = lawyer_casses_doneErr = lawyer_contact_countrycodeErr = lawyer_contact_mobilecodeErr = lawyer_contact_numberErr = lawyer_emailErr = lawyer_skypeErr = lawyer_websiteErr = lawyer_facebookErr = lawyer_twitterErr = lawyer_youtubeErr = lawyer_googleplusErr = lawyer_linkedinErr = lawyer_personal_statementErr = service1Err = service1DetailErr = service1_IconErr = service2Err = service2DetailErr = service2_IconErr = service3Err = service3DetailErr = service3_IconErr = service4Err = service4DetailErr = service4_IconErr = service5Err = service5DetailErr = service5_IconErr = service6Err = service6DetailErr = service6_IconErr = true;

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

        // Start Validate Lawyer Types
        if(lawyer_types == "") {
            printError("lawyer_typesErr", "Please! Select Your Lawyer Type");
        } else {
            printError("lawyer_typesErr", "");
            lawyer_typesErr = false;
        }
        // End Validate Lawyer Types

        // Start Validate Other Lawyer Types
        if(lawyer_types == "Others"){
            if(lawyer_types_other == "") {
                printError("lawyer_types_otherErr", "Please! Enter Your Other Lawyer Type");
            } else {
                var regex = /^[a-zA-Z\s]+$/;                
                if(regex.test(lawyer_types_other) === false) {
                    printError("lawyer_types_otherErr", "Please! Enter text only...");
                } else {
                    printError("lawyer_types_otherErr", "");
                    lawyer_types_otherErr = false;
                }
            }
        } else {
            lawyer_types_otherErr = false;
        }
        // End Validate Other Lawyer Types

        // Start Validate Lawyer Image
        if(lawyer_image == "") {
            printError("lawyer_imageErr", "Please! Upload Your Lawyar Image");
        } else {
            printError("lawyer_imageErr", "");
            lawyer_imageErr = false;
        }
        // End Validate Lawyer Image

        // Start Validate Lawyer Short About Me
        if(short_about_me == "") {
            printError("short_about_meErr", "Please! Enter Your Lawyar Short About Me");
        } else {
            var regex = /^[a-zA-Z\.,'"\s]+$/;                
            if(regex.test(short_about_me) === false){
                printError("short_about_meErr", "Please! Enter Only Text...");
            } else {
                if(short_about_me.length < 20){
                    printError("short_about_meErr", "Please! Enter Your Lawyar Short About Me Minimum 20 Characters");
                } else {
                    printError("short_about_meErr", "");
                    short_about_meErr = false;
                }
            }
        }
        // End Validate Lawyer Short About Me

        // Start Validate Lawyer About Me
        if(about_me == "") {
            printError("about_meErr", "Please! Enter Your Lawyar About Me");
        } else {
            var regex = /^[a-zA-Z\.,'"\s]+$/;                
            if(regex.test(about_me) === false){
                printError("about_meErr", "Please! Enter Only Text...");
            } else {
                if(about_me.length < 20){
                    printError("about_meErr", "Please! Enter Your Lawyar Short About Me Minimum 20 Characters");
                } else {
                    printError("about_meErr", "");
                    about_meErr = false;
                }
            }
        }
        // End Validate Lawyer About Me

        // Start Validate Lawyar Location
        if(lawyer_location == "") {
            printError("lawyer_locationErr", "Please! Select Your Lawyar Location");
        } else {
            printError("lawyer_locationErr", "");
            lawyer_locationErr = false;
        }
        // End Validate Lawyar Location

        // Start Validate Lawyar Location
        if(lawyer_casses_done == "") {
            printError("lawyer_casses_doneErr", "Please! Enter Your Lawyar Casses Done");
        } else {
            var regex = /^[1-9]*$/;
            if(regex.test(lawyer_casses_done) === false){
                printError("lawyer_casses_doneErr", "Please! Enter Only Digits");
            } else {
                printError("lawyer_casses_doneErr", "");
                lawyer_casses_doneErr = false;
            }
        }
        // End Validate Lawyar Location

        // Start Validate Country Code For Lawyer Contact Number
        if(lawyer_contact_countrycode == "") {
            printError("lawyer_contact_countrycodeErr", "Please! Select Your Country Code For Contact Number");
        } else {
            printError("lawyer_contact_countrycodeErr", "");
            lawyer_contact_countrycodeErr = false;
        }
        // End Validate Country Code For Lawyer Contact Number

        // Start Validate Mobile Operator Code For Lawyer Contact Number
        if(lawyer_contact_mobilecode == "") {
            printError("lawyer_contact_mobilecodeErr", "Please! Select Your Mobile Operator Code For Contact Number");
        } else {
            printError("lawyer_contact_mobilecodeErr", "");
            lawyer_contact_mobilecodeErr = false;
        }
        // End Validate Mobile Operator Code For Lawyer Contact Number

        // Start Validate Lawyer Contact Number
        if(lawyer_contact_number == "") {
            printError("lawyer_contact_numberErr", "Please! Enter Your Contact Number");
        } else {
            var regex = /^[1-9]\d{6}$/;
            if(regex.test(lawyer_contact_number) === false) {
                printError("lawyer_contact_numberErr", "Please! Enter a valid 7 last digit of Contact Number");
            } else{
                printError("lawyer_contact_numberErr", "");
                lawyer_contact_numberErr = false;
            }
        }
        // End Validate Lawyer Contact Number

        // Start Validate Lawyer Email Address
        if(lawyer_email == "") {
            printError("lawyer_emailErr", "Please! Enter Your Email Address");
        } else {
            var regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(regex.test(lawyer_email) === false) {
                printError("lawyer_emailErr", "Please! Enter a valid Email Address");
            } else{
                printError("lawyer_emailErr", "");
                lawyer_emailErr = false;
            }
        }
        // End Validate Lawyer Email Address

        // Start Validate Lawyer Skype Invitation URL
        if(lawyer_skype == "") {
            printError("lawyer_skypeErr", "");
            lawyer_skypeErr = false;
        } else {
            var regex = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/gi;
            if(regex.test(lawyer_skype) === false) {
                printError("lawyer_skypeErr", "Please! Enter a valid Skype Invitation URL");
            } else{
                printError("lawyer_skypeErr", "");
                lawyer_skypeErr = false;
            }
        }
        // End Validate Lawyer Skype Invitation URL

        // Start Validate Lawyer Website URL
        if(lawyer_website == "") {
            printError("lawyer_websiteErr", "");
            lawyer_websiteErr = false;
        } else {
            var regex = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/gi;
            if(regex.test(lawyer_website) === false) {
                printError("lawyer_websiteErr", "Please! Enter a valid Website URL");
            } else{
                printError("lawyer_websiteErr", "");
                lawyer_websiteErr = false;
            }
        }
        // End Validate Lawyer Website URL

        // Start Validate Lawyer Facebook Page URL
        if(lawyer_facebook == "") {
            printError("lawyer_facebookErr", "");
            lawyer_facebookErr = false;
        } else {
            var regex = /(?:http:\/\/)?(?:www\.)?facebook\.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*([\w\-]*)/;
            if(regex.test(lawyer_facebook) === false) {
                printError("lawyer_facebookErr", "Please! Enter a valid Facebook URL");
            } else{
                printError("lawyer_facebookErr", "");
                lawyer_facebookErr = false;
            }
        }
        // End Validate Lawyer Facebook Page URL

        // Start Validate Lawyer Twitter Account URL
        if(lawyer_twitter == "") {
            printError("lawyer_twitterErr", "");
            lawyer_twitterErr = false;
        } else {
            var regex = /(?:http:\/\/)?(?:www\.)?twitter\.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*([\w\-]*)/;
            if(regex.test(lawyer_twitter) === false) {
                printError("lawyer_twitterErr", "Please! Enter a valid Twitter Account URL");
            } else{
                printError("lawyer_twitterErr", "");
                lawyer_twitterErr = false;
            }
        }
        // End Validate Lawyer Twitter Account URL

        // Start Validate Lawyer Youtube Channel URL
        if(lawyer_youtube == "") {
            printError("lawyer_youtubeErr", "");
            lawyer_youtubeErr = false;
        } else {
            var regex = /(https?:\/\/)?(www\.)?youtu((\.be)|(be\..{2,5}))\/((user)|(channel))\/?([a-zA-Z0-9\-_]{1,})/;
            if(regex.test(lawyer_youtube) === false) {
                printError("lawyer_youtubeErr", "Please! Enter a valid Youtube Channel URL");
            } else{
                printError("lawyer_youtubeErr", "");
                lawyer_youtubeErr = false;
            }
        }
        // End Validate Lawyer Youtube Channel URL

        // Start Validate Lawyer Google Plus URL
        if(lawyer_googleplus == "") {
            printError("lawyer_googleplusErr", "");
            lawyer_googleplusErr = false;
        } else {
            var regex = /plus\.google\.com\/.?\/?.?\/?([0-9]*)/i;
            if(regex.test(lawyer_googleplus) === false) {
                printError("lawyer_googleplusErr", "Please! Enter a valid Google Plus URL");
            } else{
                printError("lawyer_googleplusErr", "");
                lawyer_googleplusErr = false;
            }
        }
        // End Validate Lawyer Google Plus URL

        // Start Validate Lawyer Linkedin URL
        if(lawyer_linkedin == "") {
            printError("lawyer_linkedinErr", "");
            lawyer_linkedinErr = false;
        } else {
            var regex = /(https?)?:?(\/\/)?(([w]{3}||\w\w)\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
            if(regex.test(lawyer_linkedin) === false) {
                printError("lawyer_linkedinErr", "Please! Enter a valid Linkedin URL");
            } else{
                printError("lawyer_linkedinErr", "");
                lawyer_linkedinErr = false;
            }
        }
        // End Validate Lawyer Linkedin URL

        // Start Validate Lawyer Personal Statement
        if(lawyer_personal_statement == "") {
            printError("lawyer_personal_statementErr", "Please! Enter Your Personal Statement");
        } else {
            var regex = /^[a-zA-Z\.,'"\s]+$/;                
            if(regex.test(lawyer_personal_statement) === false){
                printError("lawyer_personal_statementErr", "Please! Enter Only Text...");
            } else {
                if(lawyer_personal_statement.length < 20){
                    printError("lawyer_personal_statementErr", "Please! Enter Your Personal Statement Minimum 20 Characters");
                } else {
                    printError("lawyer_personal_statementErr", "");
                    lawyer_personal_statementErr = false;
                }
            }
        }
        // End Validate Lawyer Personal Statement

        // Start Validate Lawyer Service 1
        if(service1 == "") {
            printError("service1Err", "Please! Enter Your Service 1");
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(service1) === false){
                printError("service1Err", "Please! Enter Only Text...");
            } else {
                printError("service1Err", "");
                service1Err = false;
            }
        }
        // End Validate Lawyer Service 1

        // Start Validate Lawyer Service 1 Detail
        if(!service1 == ""){
            if(service1Detail == "") {
                printError("service1DetailErr", "Please! Enter Your Service 1");
            } else {
                var regex = /^[a-zA-Z\.,'"\s]+$/;                
                if(regex.test(service1Detail) === false){
                    printError("service1DetailErr", "Please! Enter Only Text...");
                } else {
                    if(service1Detail.length < 20){
                        printError("service1DetailErr", "Please! Service 1 Details Minimum 20 Characters");
                    } else {
                        printError("service1DetailErr", "");
                        service1DetailErr = false;
                    }
                }
            }
        } else {
            if(!service1Detail == ""){
                printError("service1Err", "Please! Enter Service 1");
                service1DetailErr = true;
            } else {
                printError("service1DetailErr", "");
                service1DetailErr = false;
            }
        }
        // End Validate Lawyer Service 1 Detail

        // Start Validate Lawyer Service 1 Icon
        if(!service1 == "" && !service1Detail == ""){
            if(service1_Icon == "") {
                printError("service1_IconErr", "Please! Select Your Service 1 Icon");
            } else {
                printError("service1_IconErr", "");
                service1_IconErr = false;
            }
        } else {
            if(!service1_Icon == "") {
                printError("service1DetailErr", "Please! Enter Service 1 Detail");
                service1_IconErr = true;
            } else {
                printError("service1_IconErr", "");
                service1_IconErr = false;
            }
        }
        // End Validate Lawyer Service 1 Icon

        // Start Validate Lawyer Service 2
        if(service2 == "") {
            printError("service2Err", "");
            service2Err = false;
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(service2) === false){
                printError("service2Err", "Please! Enter Only Text...");
            } else {
                printError("service2Err", "");
                service2Err = false;
            }
        }
        // End Validate Lawyer Service 2

        // Start Validate Lawyer Service 2 Detail
        if(!service2 == ""){
            if(service2Detail == "") {
                printError("service2DetailErr", "Please! Enter Your Service 2");
            } else {
                var regex = /^[a-zA-Z\.,'"\s]+$/;                
                if(regex.test(service2Detail) === false){
                    printError("service2DetailErr", "Please! Enter Only Text...");
                } else {
                    if(service2Detail.length < 20){
                        printError("service2DetailErr", "Please! Service 2 Details Minimum 20 Characters");
                    } else {
                        printError("service2DetailErr", "");
                        service2DetailErr = false;
                    }
                }
            }
        } else {
            if(!service2Detail == ""){
                printError("service2Err", "Please! Enter Service 2");
                service2DetailErr = true;
            } else {
                printError("service2DetailErr", "");
                service2DetailErr = false;
            }
        }
        // End Validate Lawyer Service 2 Detail

        // Start Validate Lawyer Service 2 Icon
        if(!service2 == "" && !service2Detail == ""){
            if(service2_Icon == "") {
                printError("service2_IconErr", "Please! Select Your Service 2 Icon");
            } else {
                printError("service2_IconErr", "");
                service2_IconErr = false;
            }
        } else {
            if(!service2_Icon == "") {
                printError("service2DetailErr", "Please! Enter Service 2 Detail");
                service2_IconErr = true;
            } else {
                printError("service2_IconErr", "");
                service2_IconErr = false;
            }
        }
        // End Validate Lawyer Service 2 Icon

        // Start Validate Lawyer Service 3
        if(service3 == "") {
            printError("service3Err", "");
            service3Err = false;
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(service3) === false){
                printError("service3Err", "Please! Enter Only Text...");
            } else {
                printError("service3Err", "");
                service3Err = false;
            }
        }
        // End Validate Lawyer Service 3

        // Start Validate Lawyer Service 3 Detail
        if(!service3 == ""){
            if(service3Detail == "") {
                printError("service3DetailErr", "Please! Enter Your Service 3");
            } else {
                var regex = /^[a-zA-Z\.,'"\s]+$/;                
                if(regex.test(service3Detail) === false){
                    printError("service3DetailErr", "Please! Enter Only Text...");
                } else {
                    if(service3Detail.length < 20){
                        printError("service3DetailErr", "Please! Service 3 Details Minimum 20 Characters");
                    } else {
                        printError("service3DetailErr", "");
                        service3DetailErr = false;
                    }
                }
            }
        } else {
            if(!service3Detail == ""){
                printError("service3Err", "Please! Enter Service 3");
                service3DetailErr = true;
            } else {
                printError("service3DetailErr", "");
                service3DetailErr = false;
            }
        }
        // End Validate Lawyer Service 3 Detail

        // Start Validate Lawyer Service 3 Icon
        if(!service3 == "" && !service3Detail == ""){
            if(service3_Icon == "") {
                printError("service3_IconErr", "Please! Select Your Service 3 Icon");
            } else {
                printError("service3_IconErr", "");
                service3_IconErr = false;
            }
        } else {
            if(!service3_Icon == "") {
                printError("service3DetailErr", "Please! Enter Service 3 Detail");
                service3_IconErr = true;
            } else {
                printError("service3_IconErr", "");
                service3_IconErr = false;
            }
        }
        // End Validate Lawyer Service 3 Icon

        // Start Validate Lawyer Service 4
        if(service4 == "") {
            printError("service4Err", "");
            service4Err = false;
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(service4) === false){
                printError("service4Err", "Please! Enter Only Text...");
            } else {
                printError("service4Err", "");
                service4Err = false;
            }
        }
        // End Validate Lawyer Service 4

        // Start Validate Lawyer Service 4 Detail
        if(!service4 == ""){
            if(service4Detail == "") {
                printError("service4DetailErr", "Please! Enter Your Service 4");
            } else {
                var regex = /^[a-zA-Z\.,'"\s]+$/;                
                if(regex.test(service4Detail) === false){
                    printError("service4DetailErr", "Please! Enter Only Text...");
                } else {
                    if(service4Detail.length < 20){
                        printError("service4DetailErr", "Please! Service 4 Details Minimum 20 Characters");
                    } else {
                        printError("service4DetailErr", "");
                        service4DetailErr = false;
                    }
                }
            }
        } else {
            if(!service4Detail == ""){
                printError("service4Err", "Please! Enter Service 4");
                service4DetailErr = true;
            } else {
                printError("service4DetailErr", "");
                service4DetailErr = false;
            }
        }
        // End Validate Lawyer Service 4 Detail

        // Start Validate Lawyer Service 4 Icon
        if(!service4 == "" && !service4Detail == ""){
            if(service4_Icon == "") {
                printError("service4_IconErr", "Please! Select Your Service 4 Icon");
            } else {
                printError("service4_IconErr", "");
                service4_IconErr = false;
            }
        } else {
            if(!service4_Icon == "") {
                printError("service4DetailErr", "Please! Enter Service 4 Detail");
                service4_IconErr = true;
            } else {
                printError("service4_IconErr", "");
                service4_IconErr = false;
            }
        }
        // End Validate Lawyer Service 4 Icon

        // Start Validate Lawyer Service 5
        if(service5 == "") {
            printError("service5Err", "");
            service5Err = false;
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(service5) === false){
                printError("service5Err", "Please! Enter Only Text...");
            } else {
                printError("service5Err", "");
                service5Err = false;
            }
        }
        // End Validate Lawyer Service 5

        // Start Validate Lawyer Service 5 Detail
        if(!service5 == ""){
            if(service5Detail == "") {
                printError("service5DetailErr", "Please! Enter Your Service 5");
            } else {
                var regex = /^[a-zA-Z\.,'"\s]+$/;                
                if(regex.test(service5Detail) === false){
                    printError("service5DetailErr", "Please! Enter Only Text...");
                } else {
                    if(service5Detail.length < 20){
                        printError("service5DetailErr", "Please! Service 5 Details Minimum 20 Characters");
                    } else {
                        printError("service5DetailErr", "");
                        service5DetailErr = false;
                    }
                }
            }
        } else {
            if(!service5Detail == ""){
                printError("service5Err", "Please! Enter Service 5");
                service5DetailErr = true;
            } else {
                printError("service5DetailErr", "");
                service5DetailErr = false;
            }
        }
        // End Validate Lawyer Service 5 Detail

        // Start Validate Lawyer Service 5 Icon
        if(!service5 == "" && !service5Detail == ""){
            if(service5_Icon == "") {
                printError("service5_IconErr", "Please! Select Your Service 5 Icon");
            } else {
                printError("service5_IconErr", "");
                service5_IconErr = false;
            }
        } else {
            if(!service5_Icon == "") {
                printError("service5DetailErr", "Please! Enter Service 5 Detail");
                service5_IconErr = true;
            } else {
                printError("service5_IconErr", "");
                service5_IconErr = false;
            }
        }
        // End Validate Lawyer Service 5 Icon

        // Start Validate Lawyer Service 6
        if(service6 == "") {
            printError("service6Err", "");
            service6Err = false;
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(service6) === false){
                printError("service6Err", "Please! Enter Only Text...");
            } else {
                printError("service6Err", "");
                service6Err = false;
            }
        }
        // End Validate Lawyer Service 6

        // Start Validate Lawyer Service 6 Detail
        if(!service6 == ""){
            if(service6Detail == "") {
                printError("service6DetailErr", "Please! Enter Your Service 6");
            } else {
                var regex = /^[a-zA-Z\.,'"\s]+$/;                
                if(regex.test(service6Detail) === false){
                    printError("service6DetailErr", "Please! Enter Only Text...");
                } else {
                    if(service6Detail.length < 20){
                        printError("service6DetailErr", "Please! Service 6 Details Minimum 20 Characters");
                    } else {
                        printError("service6DetailErr", "");
                        service6DetailErr = false;
                    }
                }
            }
        } else {
            if(!service6Detail == ""){
                printError("service6Err", "Please! Enter Service 6");
                service6DetailErr = true;
            } else {
                printError("service6DetailErr", "");
                service6DetailErr = false;
            }
        }
        // End Validate Lawyer Service 6 Detail

        // Start Validate Lawyer Service 6 Icon
        if(!service6 == "" && !service6Detail == ""){
            if(service6_Icon == "") {
                printError("service6_IconErr", "Please! Select Your Service 6 Icon");
            } else {
                printError("service6_IconErr", "");
                service6_IconErr = false;
            }
        } else {
            if(!service6_Icon == "") {
                printError("service6DetailErr", "Please! Enter Service 6 Detail");
                service6_IconErr = true;
            } else {
                printError("service6_IconErr", "");
                service6_IconErr = false;
            }
        }
        // End Validate Lawyer Service 6 Icon

        if((profileImageErr || fnameErr || mnameErr || lnameErr || genderErr || dobErr || dob_dayErr 
        || dob_monthErr || dob_yearErr || cnicErr || cnic_typeErr || countryErr || nationalityErr 
        || cityErr || mailingaddressErr || countrycodeErr || mobilecodeErr || mobilenumberErr 
        || highest_qualificationErr || specializationErr || otherErr || current_statusErr || future_planErr 
        || employment_statusErr || experience_levelErr || job_cityErr || lawyer_typesErr 
        || lawyer_types_otherErr || lawyer_imageErr || short_about_meErr || about_meErr 
        || lawyer_locationErr || lawyer_casses_doneErr || lawyer_contact_countrycodeErr
        || lawyer_contact_mobilecodeErr || lawyer_contact_numberErr || lawyer_emailErr
        || lawyer_skypeErr || lawyer_websiteErr || lawyer_facebookErr || lawyer_twitterErr 
        || lawyer_youtubeErr || lawyer_googleplusErr || lawyer_linkedinErr || lawyer_personal_statementErr
        || service1Err || service1DetailErr || service1_IconErr || service2Err || service2DetailErr 
        || service2_IconErr || service3Err || service3DetailErr || service3_IconErr || service4Err 
        || service4DetailErr || service4_IconErr || service5Err || service5DetailErr || service5_IconErr 
        || service6Err || service6DetailErr || service6_IconErr) == true){
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




<!-- Lawyer Image Popup Start -->
<?php 
    require("includes/connection.inc.php");
    $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' limit 1");
    while($row=mysqli_fetch_array($query)){
        $lawyerId = $row["id"];
    }
    if(isset($_POST["submitLawyerImg"])){
        $lawyerImage = $_FILES['lawyerImage'];
        $lawyerImageName = $_FILES['lawyerImage']['name'];
        $lawyerImageTmpName = $_FILES['lawyerImage']['tmp_name'];
        $lawyerImageSize = $_FILES['lawyerImage']['size'];
        $lawyerImageError = $_FILES['lawyerImage']['error'];
        $lawyerImageType = $_FILES['lawyerImage']['type'];
        $lawyerImageExt = explode('.', $lawyerImageName);
        $lawyerImageActualExt = strtolower(end($lawyerImageExt));
        $allowed = array('jpg', 'jpeg' , 'png');
        $lawyerImageMsg = "";
        if(in_array($lawyerImageActualExt, $allowed)){
            if($lawyerImageError === 0){
                if($lawyerImageSize < 125000){
                    $lawyerImageNameNew = uniqid('LawyerImage',true).".".$lawyerImageActualExt;
                    $lawyerImageDestination = 'images/lawyers/'.$lawyerImageNameNew;
                    move_uploaded_file($lawyerImageTmpName,$lawyerImageDestination);
                } else {
                    $lawyerImageMsg = "Your Lawyer image is too big!";
                }
            } else {
                $lawyerImageMsg = "There was an error uploading your Lawyer image!";
            }
        }else{
            $lawyerImageMsg = "You can't upload files of this type!";
        }
        mysqli_query($conn,"update lawyer_details set lawyer_image='".$lawyerImageDestination."' where user_id='".$lawyerId."' limit 1");
    }
    $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' limit 1");
    while($row=mysqli_fetch_array($query)){
?>
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title text-center" id="exampleModalLongTitle2">Lawyer Image</h2>
            </div>
            <div class="modal-body">
                <div class="avatar-upload lawyer sambox3" data-tilt data-tilt-glare data-tilt-max-glare="0.3">
                    <div class="avatar-edit">
                        <input type='file' id="lawyerImageUpload" name="lawyerImage">
                        <label for="lawyerImageUpload"></label>
                    </div>
                    <div class="row">
                        <div class="col-md-12 avatar-preview">
                            <div id="lawyerImagePreview">
                        </div>
                        </div>
                    </div>
                </div>
                <div style="text-align: center; margin-top:80px;">
                <h4 id="usernameORnameLawyerImagePopup"></h4>
                    <i style="color: darkgrey; font-size: 8pt;">&nbsp;<b>Note:</b> JPG, JPEG & PNG file of Max. 2MB is required for Lawyer Image</i>
                    <br><i style="color: #db3636; font-size: 8pt; font-weight: bold;"><?php echo $lawyerImageMsg; ?></i>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="submitLawyerImg" value="Save Lawyer Image">
            </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    var username = "<?php echo $row['id']; ?>";
    if(username == "  "){
        document.getElementById("usernameORnameLawyerImagePopup").innerHTML = "<?php echo $row["username"]; ?>";
    }else{
        document.getElementById("usernameORnameLawyerImagePopup").innerHTML = "<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>";
    }
    <?php
        require("includes/connection.inc.php");
        $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
        while($row2=mysqli_fetch_array($query)){
    ?>
    var profile_image = "<?php echo $row2["lawyer_image"]; ?>";
    if(profile_image == ""){
        document.getElementById("lawyerImagePreview").style.backgroundImage="url(images/lawyers/default_lawyer_image.png)";
    }else{
        document.getElementById("lawyerImagePreview").style.backgroundImage="url(<?php echo $row2["lawyer_image"]; ?>)";
    }
    <?php } ?>
</script>
<?php } ?>
<!-- Lawyer Image Popup End -->


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
                    $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' limit 1");
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
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse3"> Lawyers Details</a> </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body" style="padding:30px; padding-top:20px;">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Lawyer Image</label>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 lawyerImageDiv">
                                <input type="button" id="modal" class="btn btn-primary" data-toggle="modal" value="add or edit image" data-target="#exampleModalCenter2">
                                <img id="checkLawyerImage" src="images/lawyers/default_lawyer_image.png" class="lawyerImage" alt="">
                                <?php
                                    $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                    while($row2=mysqli_fetch_array($query)){
                                ?>
                                <input type="hidden" id="lawyer_image" value="<?php echo $row2["lawyer_image"]; ?>">
                                <?php } ?>
                                <br><br><br><span id="lawyer_imageErr" class="error"></span>
                            </div>
                            <div class="col-md-4"></div>
                            <script type="text/javascript">
                                <?php
                                    $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                    while($row2=mysqli_fetch_array($query)){
                                ?>
                                var checkLawyerImage = "<?php echo $row2["lawyer_image"]; ?>";
                                if(checkLawyerImage == ""){
                                    document.getElementById("checkLawyerImage").src="images/lawyers/default_lawyer_image.png";
                                }else{
                                    document.getElementById("checkLawyerImage").src="<?php echo $row2["lawyer_image"]; ?>";
                                }
                                <?php } ?>
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Lawyer Types</label>
                            <select class="form-control" name="lawyer_types" id="lawyer_types" style="height: 45px;" onchange="lawyerTypes()">
                                <option value="" id="lawyer_types0">-- Select Lawyer Types --</option>
                                <option value="Personal Lawyer" id="lawyer_types1">Personal Lawyer</option>
                                <option value="Personal Injury Lawyer" id="lawyer_types2">Personal Injury Lawyer</option>
                                <option value="Estate Planning Lawyer" id="lawyer_types3">Estate Planning Lawyer</option>
                                <option value="Bankruptcy Lawyer" id="lawyer_types4">Bankruptcy Lawyer</option>
                                <option value="Intellectual Property Lawyer" id="lawyer_types5">Intellectual Property Lawyer</option>
                                <option value="Employment Lawyer" id="lawyer_types6">Employment Lawyer</option>
                                <option value="Corporate Lawyer" id="lawyer_types7">Corporate Lawyer</option>
                                <option value="Immigration Lawyer" id="lawyer_types8">Immigration Lawyer</option>
                                <option value="Criminal Lawyer" id="lawyer_types9">Criminal Lawyer</option>
                                <option value="Medical Malpractice Lawyer" id="lawyer_types10">Medical Malpractice Lawyer</option>
                                <option value="Tax Lawyer" id="lawyer_types11">Tax Lawyer</option>
                                <option value="Family Lawyer" id="lawyer_types12">Family Lawyer</option>
                                <option value="Contract Lawyer" id="lawyer_types13">Contract Lawyer</option>
                                <option value="Social Security Disability Lawyer" id="lawyer_types14">Social Security Disability Lawyer</option>
                                <option value="Civil Litigation Lawyer" id="lawyer_types15">Civil Litigation Lawyer</option>
                                <option value="General Practice Lawyer" id="lawyer_types16">General Practice Lawyer</option>
                                <option value="Others" id="lawyer_types17">Others</option>
                            </select>
                            <span id="lawyer_typesErr" class="error"></span>
                            <script type="text/javascript">
                                <?php
                                    require("includes/connection.inc.php");
                                    $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                    while($row2=mysqli_fetch_array($query)){
                                ?>
                                var lawyer_types0 = document.getElementById("lawyer_types0");
                                var lawyer_types1 = document.getElementById("lawyer_types1");
                                var lawyer_types2 = document.getElementById("lawyer_types2");
                                var lawyer_types3 = document.getElementById("lawyer_types3");
                                var lawyer_types4 = document.getElementById("lawyer_types4");
                                var lawyer_types5 = document.getElementById("lawyer_types5");
                                var lawyer_types6 = document.getElementById("lawyer_types6");
                                var lawyer_types7 = document.getElementById("lawyer_types7");
                                var lawyer_types8 = document.getElementById("lawyer_types8");
                                var lawyer_types9 = document.getElementById("lawyer_types9");
                                var lawyer_types10 = document.getElementById("lawyer_types10");
                                var lawyer_types11 = document.getElementById("lawyer_types11");
                                var lawyer_types12 = document.getElementById("lawyer_types12");
                                var lawyer_types13 = document.getElementById("lawyer_types13");
                                var lawyer_types14 = document.getElementById("lawyer_types14");
                                var lawyer_types15 = document.getElementById("lawyer_types15");
                                var lawyer_types16 = document.getElementById("lawyer_types16");
                                var lawyer_types17 = document.getElementById("lawyer_types17");
                                if (lawyer_types0.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types0.selected = "selected";
                                }
                                if (lawyer_types1.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types1.selected = "selected";
                                }
                                if (lawyer_types2.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types2.selected = "selected";
                                }
                                if (lawyer_types3.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types3.selected = "selected";
                                }
                                if (lawyer_types4.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types4.selected = "selected";
                                }
                                if (lawyer_types5.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types5.selected = "selected";
                                }
                                if (lawyer_types6.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types6.selected = "selected";
                                }
                                if (lawyer_types7.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types7.selected = "selected";
                                }
                                if (lawyer_types8.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types8.selected = "selected";
                                }
                                if (lawyer_types9.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types9.selected = "selected";
                                }
                                if (lawyer_types10.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types10.selected = "selected";
                                }
                                if (lawyer_types11.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types11.selected = "selected";
                                }
                                if (lawyer_types12.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types12.selected = "selected";
                                }
                                if (lawyer_types13.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types13.selected = "selected";
                                }
                                if (lawyer_types14.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types14.selected = "selected";
                                }
                                if (lawyer_types15.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types15.selected = "selected";
                                }
                                if (lawyer_types16.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types16.selected = "selected";
                                }
                                if (lawyer_types17.value == "<?php echo $row2['lawyer_types']; ?>"){
                                    lawyer_types17.selected = "selected";
                                }
                                <?php } ?>
                            </script>
                        </div>
                        <div class="col-md-6" id="lawyer_types_other_div" style="display:none;">
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Others</label>
                            <input type="text" class="form-control" name="lawyer_types_other" id="lawyer_types_other" value="<?php echo $row2["lawyer_types_other"]; ?>" placeholder="Other Lawyer Type" style="height: 45px;">
                            <?php } ?>
                            <span id="lawyer_types_otherErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Short About Me</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <textarea class="form-control" name="short_about_me" id="short_about_me" cols="30" rows="3" maxlength="100"><?php echo $row2["short_about_me"]; ?></textarea>
                            <?php } ?>
                            <span id="short_about_meErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> About Me</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <textarea class="form-control" name="about_me" id="about_me" cols="30" rows="5" maxlength="400"><?php echo $row2["about_me"]; ?></textarea>
                            <?php } ?>
                            <span id="about_meErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Location</label>
                            <select class="form-control" name="lawyer_location" id="lawyer_location" style="height: 45px;">
                                <option value="" id="lawyer_location0">-- Select Lawyer Location --</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from cities");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2['City_Name']?>" id="lawyer_location<?php echo $rows2['City_Id']?>"><?php echo $rows2['City_Name']?></option>
                                <?php } ?>
                            </select>
                            <span id="lawyer_locationErr" class="error"></span>
                            <script type="text/javascript">
                                <?php
                                    require("includes/connection.inc.php");
                                    $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                    while($row2=mysqli_fetch_array($query)){
                                ?>
                                var lawyer_location0 = document.getElementById("lawyer_location0");
                                if (lawyer_location0.value == "<?php echo $row2['lawyer_location']; ?>"){
                                    lawyer_location0.selected = "selected";
                                }
                                <?php
                                    $sql3 = "select * from cities";
                                    $result3 = $conn->query($sql3);
                                    if ($result3->num_rows > 0) {
                                        while ($row3 = $result3->fetch_assoc()) {
                                ?>
                                var lawyer_location<?php echo $row3['City_Id']; ?> = document.getElementById("lawyer_location<?php echo $row3['City_Id']; ?>");
                                if (lawyer_location<?php echo $row3['City_Id']; ?>.value == "<?php echo $row2['lawyer_location']; ?>"){
                                    lawyer_location<?php echo $row3['City_Id']; ?>.selected = "selected";
                                }
                                <?php } } ?>
                                <?php } ?>
                            </script>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Casses Done</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <input type="text" id="lawyer_casses_done" name="lawyer_casses_done" maxlength="5" class="form-control" value="<?php echo $row2["lawyer_casses_done"]; ?>"placeholder="Casses Done" style="height: 45px;">
                            <?php } ?>
                            <span id="lawyer_casses_doneErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Contact Number</label>
                            <i style="color: darkgrey; font-size: 8pt;">&nbsp;<span id="" style="color:red;font-size:9pt;">(Unverified <i class='fa fa-times-circle'></i>)</span>
                                &nbsp;Example:  923331122334 Country Code + Mobile Operator Code + Number. &nbsp;&nbsp;
                            </i>
                        </div>
                        <div class="col-md-2">
                            <select name="lawyer_contact_countrycode" id="lawyer_contact_countrycode" class="form-control" style="height: 45px;">
                                <option value="" id="lawyer_contact_countrycode0">Code</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from countries");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2['phonecode']?>" id="lawyer_contact_countrycode<?php echo $rows2['Country_Id']?>"><?php echo $rows2['phonecode']?></option>
                                <?php } ?>
                            </select>
                            <span id="lawyer_contact_countrycodeErr" class="error"></span>
                            <script type="text/javascript">
                                <?php
                                    require("includes/connection.inc.php");
                                    $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                    while($row2=mysqli_fetch_array($query)){
                                ?>
                                var lawyer_contact_countrycode0 = document.getElementById("lawyer_contact_countrycode0");
                                if (lawyer_contact_countrycode0.value == "<?php echo $row2['lawyer_contact_countrycode']; ?>"){
                                    lawyer_contact_countrycode0.selected = "selected";
                                }
                                <?php
                                    $sql3 = "select * from countries";
                                    $result3 = $conn->query($sql3);
                                    if ($result3->num_rows > 0) {
                                        while ($row3 = $result3->fetch_assoc()) {
                                ?>
                                var lawyer_contact_countrycode<?php echo $row3['Country_Id']; ?> = document.getElementById("lawyer_contact_countrycode<?php echo $row3['Country_Id']; ?>");
                                if (lawyer_contact_countrycode<?php echo $row3['Country_Id']; ?>.value == "<?php echo $row2['lawyer_contact_countrycode']; ?>"){
                                    lawyer_contact_countrycode<?php echo $row3['Country_Id']; ?>.selected = "selected";
                                }
                                <?php } } ?>
                                <?php } ?>
                            </script>
                        </div>
                        <div class="col-md-2">
                            <select name="lawyer_contact_mobilecode" id="lawyer_contact_mobilecode" class="form-control" style="height: 45px;">
                                <option value="" id="lawyer_contact_mobilecode0">-- Select Mobile Operator Code --</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from mobile_code");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2['mobile_code']?>" id="lawyer_contact_mobilecode<?php echo $rows2['mobile_code']?>"><?php echo $rows2['mobile_code']?></option>
                                <?php } ?>
                            </select>
                            <span id="lawyer_contact_mobilecodeErr" class="error"></span>
                            <script type="text/javascript">
                                <?php
                                    require("includes/connection.inc.php");
                                    $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                    while($row2=mysqli_fetch_array($query)){
                                ?>
                                var lawyer_contact_mobilecode0 = document.getElementById("lawyer_contact_mobilecode0");
                                if (lawyer_contact_mobilecode0.value == "<?php echo $row2['lawyer_contact_mobilecode']; ?>"){
                                    lawyer_contact_mobilecode0.selected = "selected";
                                }
                                <?php
                                $sql3 = "select * from mobile_code";
                                $result3 = $conn->query($sql3);
                                if ($result3->num_rows > 0) {
                                    while ($row3 = $result3->fetch_assoc()) {
                                ?>
                                var lawyer_contact_mobilecode<?php echo $row3['mobile_code']; ?> = document.getElementById("lawyer_contact_mobilecode<?php echo $row3['mobile_code']; ?>");
                                if (lawyer_contact_mobilecode<?php echo $row3['mobile_code']; ?>.value == "<?php echo $row2['lawyer_contact_mobilecode']; ?>"){
                                    lawyer_contact_mobilecode<?php echo $row3['mobile_code']; ?>.selected = "selected";
                                }
                                <?php } } ?>
                                <?php } ?>
                            </script>
                        </div>
                        <div class="col-md-8">
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <input name="lawyer_contact_number" type="text" value="<?php echo $row2['lawyer_contact_number']; ?>" maxlength="7" id="lawyer_contact_number" class="form-control" class="form-control" placeholder="Contact Number" style="height: 45px;">
                            <?php } ?>
                            <span id="lawyer_contact_numberErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Email Address</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <input type="text" name="lawyer_email" id="lawyer_email" class="form-control" value="<?php echo $row2["lawyer_email"]; ?>" placeholder="Email Address" style="height: 45px;">
                            <?php } ?>
                            <span id="lawyer_emailErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="control-label"> Skype Invitation URL</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <input type="text" name="lawyer_skype" id="lawyer_skype" class="form-control" value="<?php echo $row2["lawyer_skype"]; ?>" placeholder="Skype Invitation URL" style="height: 45px;">
                            <?php } ?>
                            <span id="lawyer_skypeErr" class="error"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="control-label"> Website URL</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <input type="text" name="lawyer_website" id="lawyer_website" class="form-control" value="<?php echo $row2["lawyer_website"]; ?>" placeholder="Website URL" style="height: 45px;">
                            <?php } ?>
                            <span id="lawyer_websiteErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="control-label"> Facebook Page URL</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <input type="text" name="lawyer_facebook" id="lawyer_facebook" class="form-control" value="<?php echo $row2["lawyer_facebook"]; ?>" placeholder="Facebook Page URL" style="height: 45px;">
                            <?php } ?>
                            <span id="lawyer_facebookErr" class="error"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="control-label"> Twitter Account URL</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <input type="text" name="lawyer_twitter" id="lawyer_twitter" class="form-control" value="<?php echo $row2["lawyer_twitter"]; ?>" placeholder="Twitter Account URL" style="height: 45px;">
                            <?php } ?>
                            <span id="lawyer_twitterErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="control-label"> Youtube Channel URL</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <input type="text" name="lawyer_youtube" id="lawyer_youtube" class="form-control" value="<?php echo $row2["lawyer_youtube"]; ?>" placeholder="Youtube Channel URL" style="height: 45px;">
                            <?php } ?>
                            <span id="lawyer_youtubeErr" class="error"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="control-label"> Google Plus URL</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <input type="text" name="lawyer_googleplus" id="lawyer_googleplus" class="form-control" value="<?php echo $row2["lawyer_googleplus"]; ?>" placeholder="Google Plus URL" style="height: 45px;">
                            <?php } ?>
                            <span id="lawyer_googleplusErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"> Linkedin URL</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <input type="text" name="lawyer_linkedin" id="lawyer_linkedin" class="form-control" value="<?php echo $row2["lawyer_linkedin"]; ?>" placeholder="Linkedin URL" style="height: 45px;">
                            <?php } ?>
                            <span id="lawyer_linkedinErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Personal Statement</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <textarea name="lawyer_personal_statement" id="lawyer_personal_statement" class="form-control" cols="30" rows="5"><?php echo $row2["lawyer_personal_statement"]; ?></textarea>
                            <?php } ?>
                            <span id="lawyer_personal_statementErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="" class="control-label"><span style="color:#db3636">*</span> Service 1 </label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <div class="text-center">
                                <span id="icon1" style="color:#db3636; font-size: 20pt;"><i class="<?php echo $row2["service1_Icon"]; ?>"></i></span>
                            </div>
                            <input type="text" name="service1" id="service1" class="form-control" value="<?php echo $row2["service1"]; ?>" placeholder="Service 1 Required" style="height: 45px;">
                            <?php } ?>
                            <span id="service1Err" class="error"></span>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <textarea name="service1Detail" id="service1Detail" class="form-control" cols="30" rows="4" placeholder="Service 1 Detail" style="margin-top:10px;"><?php echo $row2["service1Detail"]; ?></textarea>
                            <?php } ?>
                            <span id="service1DetailErr" class="error"></span>
                            <select name="service1_Icon" id="service1_Icon" class="form-control" onchange="service1Icon()" style="height: 45px; margin-top:10px;">
                                <option value="" id="service1_Icon0">-- Select Service Icon --</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from services_icons");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2["icons"]; ?>" id="service1_Icon<?php echo $rows2["id"]; ?>"><?php echo $rows2["icons"]; ?></option>
                                <?php } ?>
                            </select>
                            <script type="text/javascript">
                                function service1Icon() {
                                    var service1_Icon = document.getElementById("service1_Icon").value;
                                    if(service1_Icon == ""){
                                        document.getElementById("icon1").innerHTML = "";
                                    } else {
                                        document.getElementById("icon1").innerHTML = "<i class='"+service1_Icon+"'></i>";
                                    }
                                }
                                <?php
                                    require("includes/connection.inc.php");
                                    $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                    while($row2=mysqli_fetch_array($query)){
                                ?>
                                var service1_Icon0 = document.getElementById("service1_Icon0");
                                if(service1_Icon0.value == "<?php echo $row2["service1_Icon"]; ?>"){
                                    service1_Icon0.selected = "selected";
                                }
                                <?php
                                    $sql3 = "select * from services_icons";
                                    $result3 = $conn->query($sql3);
                                    if ($result3->num_rows > 0) {
                                        while ($row3 = $result3->fetch_assoc()) {
                                ?>
                                var service1_Icon<?php echo $row3["id"]; ?> = document.getElementById("service1_Icon<?php echo $row3["id"]; ?>");
                                if(service1_Icon<?php echo $row3["id"]; ?>.value == "<?php echo $row2["service1_Icon"]; ?>"){
                                    service1_Icon<?php echo $row3["id"]; ?>.selected = "selected";
                                }
                                <?php } } ?>
                                <?php } ?>
                            </script>
                            <span id="service1_IconErr" class="error"></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="control-label"> Service 2</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <div class="text-center">
                                <span id="icon2" style="color:#db3636; font-size: 20pt;"><i class="<?php echo $row2["service2_Icon"]; ?>"></i></span>
                            </div>
                            <input type="text" name="service2" id="service2" class="form-control" value="<?php echo $row2["service2"]; ?>" placeholder="Service 2 Optional" style="height: 45px;">
                            <?php } ?>
                            <span id="service2Err" class="error"></span>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <textarea name="service2Detail" id="service2Detail" class="form-control" cols="30" rows="4" placeholder="Service 2 Detail" style="margin-top:10px;"><?php echo $row2["service2Detail"]; ?></textarea>
                            <?php } ?>
                            <span id="service2DetailErr" class="error"></span>
                            <select name="service2_Icon" id="service2_Icon" class="form-control" onchange="service2Icon()" style="height: 45px; margin-top:10px;">
                                <option value="" id="service2_Icon0">-- Select Service Icon --</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from services_icons");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2["icons"]; ?>" id="service2_Icon<?php echo $rows2["id"]; ?>"><?php echo $rows2["icons"]; ?></option>
                                <?php } ?>
                            </select>
                            <script type="text/javascript">
                                function service2Icon() {
                                    var service2_Icon = document.getElementById("service2_Icon").value;
                                    if(service2_Icon == ""){
                                        document.getElementById("icon2").innerHTML = "";
                                    } else {
                                        document.getElementById("icon2").innerHTML = "<i class='"+service2_Icon+"'></i>";
                                    }
                                }
                                <?php
                                    require("includes/connection.inc.php");
                                    $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                    while($row2=mysqli_fetch_array($query)){
                                ?>
                                var service2_Icon0 = document.getElementById("service2_Icon0");
                                if(service2_Icon0.value == "<?php echo $row2["service2_Icon"]; ?>"){
                                    service2_Icon0.selected = "selected";
                                }
                                <?php
                                    $sql3 = "select * from services_icons";
                                    $result3 = $conn->query($sql3);
                                    if ($result3->num_rows > 0) {
                                        while ($row3 = $result3->fetch_assoc()) {
                                ?>
                                var service2_Icon<?php echo $row3["id"]; ?> = document.getElementById("service2_Icon<?php echo $row3["id"]; ?>");
                                if(service2_Icon<?php echo $row3["id"]; ?>.value == "<?php echo $row2["service2_Icon"]; ?>"){
                                    service2_Icon<?php echo $row3["id"]; ?>.selected = "selected";
                                }
                                <?php } } ?>
                                <?php } ?>
                            </script>
                            <span id="service2_IconErr" class="error"></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="control-label"> Service 3</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <div class="text-center">
                                <span id="icon3" style="color:#db3636; font-size: 20pt;"><i class="<?php echo $row2["service3_Icon"]; ?>"></i></span>
                            </div>
                            <input type="text" name="service3" id="service3" class="form-control" value="<?php echo $row2["service3"]; ?>" placeholder="Service 3 Optional" style="height: 45px;">
                            <?php } ?>
                            <span id="service3Err" class="error"></span>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <textarea name="service3Detail" id="service3Detail" class="form-control" cols="30" rows="4" placeholder="Service 3 Detail" style="margin-top:10px;"><?php echo $row2["service3Detail"]; ?></textarea>
                            <?php } ?>
                            <span id="service3DetailErr" class="error"></span>
                            <select name="service3_Icon" id="service3_Icon" class="form-control" onchange="service3Icon()" style="height: 45px; margin-top:10px;">
                                <option value="" id="service3_Icon0">-- Select Service Icon --</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from services_icons");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2["icons"]; ?>" id="service3_Icon<?php echo $rows2["id"]; ?>"><?php echo $rows2["icons"]; ?></option>
                                <?php } ?>
                            </select>
                            <script type="text/javascript">
                                function service3Icon() {
                                    var service3_Icon = document.getElementById("service3_Icon").value;
                                    if(service3_Icon == ""){
                                        document.getElementById("icon3").innerHTML = "";
                                    } else {
                                        document.getElementById("icon3").innerHTML = "<i class='"+service3_Icon+"'></i>";
                                    }
                                }
                                <?php
                                    require("includes/connection.inc.php");
                                    $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                    while($row2=mysqli_fetch_array($query)){
                                ?>
                                var service3_Icon0 = document.getElementById("service3_Icon0");
                                if(service3_Icon0.value == "<?php echo $row2["service3_Icon"]; ?>"){
                                    service3_Icon0.selected = "selected";
                                }
                                <?php
                                    $sql3 = "select * from services_icons";
                                    $result3 = $conn->query($sql3);
                                    if ($result3->num_rows > 0) {
                                        while ($row3 = $result3->fetch_assoc()) {
                                ?>
                                var service3_Icon<?php echo $row3["id"]; ?> = document.getElementById("service3_Icon<?php echo $row3["id"]; ?>");
                                if(service3_Icon<?php echo $row3["id"]; ?>.value == "<?php echo $row2["service3_Icon"]; ?>"){
                                    service3_Icon<?php echo $row3["id"]; ?>.selected = "selected";
                                }
                                <?php } } ?>
                                <?php } ?>
                            </script>
                            <span id="service3_IconErr" class="error"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="" class="control-label"> Service 4</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <div class="text-center">
                                <span id="icon4" style="color:#db3636; font-size: 20pt;"><i class="<?php echo $row2["service4_Icon"]; ?>"></i></span>
                            </div>
                            <input type="text" name="service4" id="service4" class="form-control" value="<?php echo $row2["service4"]; ?>" placeholder="Service 4 Optional" style="height: 45px;">
                            <?php } ?>
                            <span id="service4Err" class="error"></span>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <textarea name="service4Detail" id="service4Detail" class="form-control" cols="30" rows="4" placeholder="Service 4 Detail" style="margin-top:10px;"><?php echo $row2["service4Detail"]; ?></textarea>
                            <?php } ?>
                            <span id="service4DetailErr" class="error"></span>
                            <select name="service4_Icon" id="service4_Icon" class="form-control" onchange="service4Icon()" style="height: 45px; margin-top:10px;">
                                <option value="" id="service4_Icon0">-- Select Service Icon --</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from services_icons");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2["icons"]; ?>" id="service4_Icon<?php echo $rows2["id"]; ?>"><?php echo $rows2["icons"]; ?></option>
                                <?php } ?>
                            </select>
                            <script type="text/javascript">
                                function service4Icon() {
                                    var service4_Icon = document.getElementById("service4_Icon").value;
                                    if(service4_Icon == ""){
                                        document.getElementById("icon4").innerHTML = "";
                                    } else {
                                        document.getElementById("icon4").innerHTML = "<i class='"+service4_Icon+"'></i>";
                                    }
                                }
                                <?php
                                    require("includes/connection.inc.php");
                                    $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                    while($row2=mysqli_fetch_array($query)){
                                ?>
                                var service4_Icon0 = document.getElementById("service4_Icon0");
                                if(service4_Icon0.value == "<?php echo $row2["service4_Icon"]; ?>"){
                                    service4_Icon0.selected = "selected";
                                }
                                <?php
                                    $sql3 = "select * from services_icons";
                                    $result3 = $conn->query($sql3);
                                    if ($result3->num_rows > 0) {
                                        while ($row3 = $result3->fetch_assoc()) {
                                ?>
                                var service4_Icon<?php echo $row3["id"]; ?> = document.getElementById("service4_Icon<?php echo $row3["id"]; ?>");
                                if(service4_Icon<?php echo $row3["id"]; ?>.value == "<?php echo $row2["service4_Icon"]; ?>"){
                                    service4_Icon<?php echo $row3["id"]; ?>.selected = "selected";
                                }
                                <?php } } ?>
                                <?php } ?>
                            </script>
                            <span id="service4_IconErr" class="error"></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="control-label"> Service 5</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <div class="text-center">
                                <span id="icon5" style="color:#db3636; font-size: 20pt;"><i class="<?php echo $row2["service5_Icon"]; ?>"></i></span>
                            </div>
                            <input type="text" name="service5" id="service5" class="form-control" value="<?php echo $row2["service5"]; ?>" placeholder="Service 5 Optional" style="height: 45px;">
                            <?php } ?>
                            <span id="service5Err" class="error"></span>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <textarea name="service5Detail" id="service5Detail" class="form-control" cols="30" rows="4" placeholder="Service 5 Detail" style="margin-top:10px;"><?php echo $row2["service5Detail"]; ?></textarea>
                            <?php } ?>
                            <span id="service5DetailErr" class="error"></span>
                            <select name="service5_Icon" id="service5_Icon" class="form-control" onchange="service5Icon()" style="height: 45px; margin-top:10px;">
                                <option value="" id="service5_Icon0">-- Select Service Icon --</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from services_icons");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2["icons"]; ?>" id="service5_Icon<?php echo $rows2["id"]; ?>"><?php echo $rows2["icons"]; ?></option>
                                <?php } ?>
                            </select>
                            <script type="text/javascript">
                                function service5Icon() {
                                    var service5_Icon = document.getElementById("service5_Icon").value;
                                    if(service5_Icon == ""){
                                        document.getElementById("icon5").innerHTML = "";
                                    } else {
                                        document.getElementById("icon5").innerHTML = "<i class='"+service5_Icon+"'></i>";
                                    }
                                }
                                <?php
                                    require("includes/connection.inc.php");
                                    $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                    while($row2=mysqli_fetch_array($query)){
                                ?>
                                var service5_Icon0 = document.getElementById("service5_Icon0");
                                if(service5_Icon0.value == "<?php echo $row2["service5_Icon"]; ?>"){
                                    service5_Icon0.selected = "selected";
                                }
                                <?php
                                    $sql3 = "select * from services_icons";
                                    $result3 = $conn->query($sql3);
                                    if ($result3->num_rows > 0) {
                                        while ($row3 = $result3->fetch_assoc()) {
                                ?>
                                var service5_Icon<?php echo $row3["id"]; ?> = document.getElementById("service5_Icon<?php echo $row3["id"]; ?>");
                                if(service5_Icon<?php echo $row3["id"]; ?>.value == "<?php echo $row2["service5_Icon"]; ?>"){
                                    service5_Icon<?php echo $row3["id"]; ?>.selected = "selected";
                                }
                                <?php } } ?>
                                <?php } ?>
                            </script>
                            <span id="service5_IconErr" class="error"></span>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="control-label"> Service 6</label>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <div class="text-center">
                                <span id="icon6" style="color:#db3636; font-size: 20pt;"><i class="<?php echo $row2["service6_Icon"]; ?>"></i></span>
                            </div>
                            <input type="text" name="service6" id="service6" class="form-control" value="<?php echo $row2["service6"]; ?>" placeholder="Service 6 Optional" style="height: 45px;">
                            <?php } ?>
                            <span id="service6Err" class="error"></span>
                            <?php
                                require("includes/connection.inc.php");
                                $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                while($row2=mysqli_fetch_array($query)){
                            ?>
                            <textarea name="service6Detail" id="service6Detail" class="form-control" cols="30" rows="4" placeholder="Service 6 Detail" style="margin-top:10px;"><?php echo $row2["service6Detail"]; ?></textarea>
                            <?php } ?>
                            <span id="service6DetailErr" class="error"></span>
                            <select name="service6_Icon" id="service6_Icon" class="form-control" onchange="service6Icon()" style="height: 45px; margin-top:10px;">
                                <option value="" id="service6_Icon0">-- Select Service Icon --</option>
                                <?php
                                    $query2 = mysqli_query($conn,"select * from services_icons");
                                    while($rows2 = mysqli_fetch_array($query2))
                                { ?>
                                <option value="<?php echo $rows2["icons"]; ?>" id="service6_Icon<?php echo $rows2["id"]; ?>"><?php echo $rows2["icons"]; ?></option>
                                <?php } ?>
                            </select>
                            <script type="text/javascript">
                                function service6Icon() {
                                    var service6_Icon = document.getElementById("service6_Icon").value;
                                    if(service6_Icon == ""){
                                        document.getElementById("icon6").innerHTML = "";
                                    } else {
                                        document.getElementById("icon6").innerHTML = "<i class='"+service6_Icon+"'></i>";
                                    }
                                }
                                <?php
                                    require("includes/connection.inc.php");
                                    $query=mysqli_query($conn,"select * from lawyer_details where user_id='".$row["id"]."'");
                                    while($row2=mysqli_fetch_array($query)){
                                ?>
                                var service6_Icon0 = document.getElementById("service6_Icon0");
                                if(service6_Icon0.value == "<?php echo $row2["service6_Icon"]; ?>"){
                                    service6_Icon0.selected = "selected";
                                }
                                <?php
                                    $sql3 = "select * from services_icons";
                                    $result3 = $conn->query($sql3);
                                    if ($result3->num_rows > 0) {
                                        while ($row3 = $result3->fetch_assoc()) {
                                ?>
                                var service6_Icon<?php echo $row3["id"]; ?> = document.getElementById("service6_Icon<?php echo $row3["id"]; ?>");
                                if(service6_Icon<?php echo $row3["id"]; ?>.value == "<?php echo $row2["service6_Icon"]; ?>"){
                                    service6_Icon<?php echo $row3["id"]; ?>.selected = "selected";
                                }
                                <?php } } ?>
                                <?php } ?>
                            </script>
                            <span id="service6_IconErr" class="error"></span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <?php } ?>
            <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-primary btn-lg" style="background-color:#b89b5e ;" value="Submit" id="btn-submit" name="submit_lawyer">
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