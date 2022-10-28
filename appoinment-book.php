<?php
$titleTag = $_GET['name'];
$title = "Lawyers Website - Appoinment Book -";// for dynamic title on selected page
$currentPage = 'Appoinment Book';// for add dynamic active class on selected page on header
$pageTitle = "Appoinment Book";// for add dynamic text of Page Title Section
$page="appoinment-book.php";// for add dynamic url text of Page Title Section
$id = $_GET['id'];
require("includes/header.inc.php");
require("includes/connection.inc.php");
if(!isset($_SESSION["username"])){
?>
<script type="text/javascript">
    window.location.href = "clients login system/login.php";
</script>
<?php } ?>
<?php
    $sql = "select * from user where username='".$_SESSION["username"]."' limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
<script type="text/javascript">
    var role = "<?php echo $row["role"]; ?>";
    if(role == "Lawyer"){
        window.location.href = "clients login system/login.php";
    }
</script>
<?php } } ?>




<?php
    $sql = "select * from user where id='".$id."' limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
<!-- Page Title Section Start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Appoinment Book</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <a href="our-lawyers.php">Our Lawyers</a> / <a href="our-lawyers-details.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>"><?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?></a> / <span><a href="appoinment-book.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>">Appoinment Book</a></span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title Section End -->
<?php } } ?>





<?php 
    require("includes/connection.inc.php");
    if(isset($_POST["book_appoinment"])){
        $lawyer_id = $_POST["lawyer_id"];
        $lawyer_name = $_POST["lawyer_name"];
        $lawyer_contact_number = $_POST["lawyer_contact_number"];
        $lawyer_service = $_POST["lawyer_service"];
        $lawyer_location = $_POST["lawyer_location"];
        $client_id = $_POST["client_id"];
        $client_name = $_POST["client_name"];
        $client_contact_number = $_POST["client_contact_number"];
        $start_time = $_POST["start_time"];
        $end_time = $_POST["end_time"];
        $appoinment_date = $_POST["appoinment_date"];
        $sql = "select * from appoinment where lawyer_id='".$id."' limit 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $lawyer_nameDB = $row["lawyer_name"];
                $lawyer_contact_numberDB = $row["lawyer_contact_number"];
                $lawyer_serviceDB = $row["lawyer_service"];
                $lawyer_locationDB = $row["lawyer_location"];
                $client_nameDB = $row["client_name"];
                $client_contact_numberDB = $row["client_contact_number"];
                $start_timeDB = $row["start_time"];
                $end_timeDB = $row["end_time"];
                $appoinment_dateDB = $row["appoinment_date"];
            }
        }
            if($lawyer_name == $lawyer_nameDB && $lawyer_contact_number == $lawyer_contact_numberDB && $lawyer_service == $lawyer_serviceDB && $lawyer_location == $lawyer_locationDB && $client_name == $client_nameDB && $client_contact_number == $client_contact_numberDB && $start_time == $start_timeDB && $end_time == $end_timeDB && $appoinment_date == $appoinment_dateDB){
?>
<script type="text/javascript">
    alert("Appoinment already Exist");
</script>
<?php
            } else {
?>
<script type="text/javascript">
    alert("Appoinment Book Successfull!!!!!");
</script>
<?php
                mysqli_query($conn,"insert into appoinment(lawyer_id,lawyer_name,lawyer_contact_number,lawyer_service,lawyer_location,client_id,client_name,client_contact_number,start_time,end_time,appoinment_date,appointment_status) values ('".$lawyer_id."','".$lawyer_name."','".$lawyer_contact_number."','".$lawyer_service."','".$lawyer_location."','".$client_id."','".$client_name."','".$client_contact_number."','".$start_time."','".$end_time."','".$appoinment_date."','1') limit 1");
            }
    }
?>






<script type="text/javascript">
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function formValidation() {
        var lawyer_service = document.getElementById("lawyer_service").value;
        var start_time = document.getElementById("start_time").value;
        var end_time = document.getElementById("end_time").value;
        var appoinment_date = document.getElementById("appoinment_date").value;
        
        // Defining error variables with a default value
        var lawyer_serviceErr = start_timeErr = end_timeErr = appoinment_dateErr = true;

        // Start Validate Lawyer Service
        if(lawyer_service == "") {
            printError("lawyer_serviceErr", "Please! Select Your Lawyer Service");
        } else {
            printError("lawyer_serviceErr", "");
            lawyer_serviceErr = false;
        }
        // End Validate Lawyer Service

        // Start Validate Start Time
        if(start_time == "") {
            printError("start_timeErr", "Please! Select Your Appoinment Start Time");
        } else {
            printError("start_timeErr", "");
            start_timeErr = false;
        }
        // End Validate Start Time

        // Start Validate End Time
        if(end_time == "") {
            printError("end_timeErr", "Please! Select Your Appoinment End Time");
        } else {
            var start_timeHidden = document.getElementById("start_timeHidden").value;
            var end_timeHidden = document.getElementById("end_timeHidden").value;
            if(end_timeHidden == start_timeHidden) {
                printError("end_timeErr", "Please! Change the end time because Start Time and End Time are matching.");
            } else {
                printError("end_timeErr", "");
                end_timeErr = false;
            }
        }
        // End Validate End Time

        // Start Validate Appoinment Date
        if(appoinment_date == "") {
            printError("appoinment_dateErr", "Please! Select Your Appoinment Date");
        } else {
            var currentDate = new Date();
            var givenDate = new Date(appoinment_date);
            if(currentDate > givenDate) {
                printError("appoinment_dateErr", "You can't book an Appointment on this date, The Date must be Bigger or Equal to today date");
            } else {
                printError("appoinment_dateErr", "");
                appoinment_dateErr = false;
            }
        }
        // End Validate Appoinment Date



        if((lawyer_serviceErr || start_timeErr || end_timeErr || appoinment_dateErr) == true){
            return false;
        }else{
            return true;
        }
    }
</script>






<!-- Appoinment Book Form Section Start -->
<div class="parallax-section appoinment_form">
    <form action="" method="POST" onsubmit="return formValidation()">
        <div class="container" style="padding:30px; padding-top:20px;">
            <div class="section-title-appoinment">
                <h2 class="text-left">Lawyer Details</h2>
            </div>
            <?php
                $sql = "select * from user inner join lawyer_details on user.id=lawyer_details.user_id where user.id='".$id."' limit 1";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
            ?>
            <div class="row">
                <div class="col-md-12">
                    <label for="" class="control-label">Lawyer Name</label>
                    <input type="text" name="lawyer_name" id="lawyer_name" class="form-control lawyer_name" value="<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="" class="control-label">Lawyer Contact Number</label>
                    <input type="text" name="lawyer_contact_number" class="form-control lawyer_contact_number" value="+<?php echo $row["country_code"]; ?> <?php echo $row["mobile_code"]; ?> <?php echo $row["number"]; ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="" class="control-label">Lawyer Services</label>
                    <select name="lawyer_service" id="lawyer_service" class="form-control">
                        <option value="">-- Select Service --</option>
                        <option value="<?php echo $row["service1"]; ?>" id="service1"><?php echo $row["service1"]; ?></option>
                        <option value="<?php echo $row["service2"]; ?>" id="service2"><?php echo $row["service2"]; ?></option>
                        <option value="<?php echo $row["service3"]; ?>" id="service3"><?php echo $row["service3"]; ?></option>
                        <option value="<?php echo $row["service4"]; ?>" id="service4"><?php echo $row["service4"]; ?></option>
                        <option value="<?php echo $row["service5"]; ?>" id="service5"><?php echo $row["service5"]; ?></option>
                        <option value="<?php echo $row["service6"]; ?>" id="service6"><?php echo $row["service6"]; ?></option>
                    </select>
                    <span id="lawyer_serviceErr" class="error"></span>
                    <script type="text/javascript">
                        var service1 = document.getElementById("service1").value;
                        if(service1 == "") {
                            document.getElementById("service1").style.display = "none";
                        } else {
                            document.getElementById("service1").style.display = "block";
                        }
                        var service2 = document.getElementById("service2").value;
                        if(service2 == "") {
                            document.getElementById("service2").style.display = "none";
                        } else {
                            document.getElementById("service2").style.display = "block";
                        }
                        var service3 = document.getElementById("service3").value;
                        if(service3 == "") {
                            document.getElementById("service3").style.display = "none";
                        } else {
                            document.getElementById("service3").style.display = "block";
                        }
                        var service4 = document.getElementById("service4").value;
                        if(service4 == "") {
                            document.getElementById("service4").style.display = "none";
                        } else {
                            document.getElementById("service4").style.display = "block";
                        }
                        var service5 = document.getElementById("service5").value;
                        if(service5 == "") {
                            document.getElementById("service5").style.display = "none";
                        } else {
                            document.getElementById("service5").style.display = "block";
                        }
                        var service6 = document.getElementById("service6").value;
                        if(service6 == "") {
                            document.getElementById("service6").style.display = "none";
                        } else {
                            document.getElementById("service6").style.display = "block";
                        }
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="" class="control-label">Lawyer Loction</label>
                    <input type="text" name="lawyer_location" class="form-control lawyer_location" value="<?php echo $row["lawyer_location"]; ?>" readonly>
                </div>
            </div>
            <input type="hidden" name="lawyer_id" value="<?php echo $row["id"]; ?>">
            <?php } } ?>
            <br>
            <div class="section-title-appoinment">
                <h2 class="text-left">Client Details</h2>
            </div>
            <?php
                $sql = "select * from user where username='".$_SESSION["username"]."' limit 1";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
            ?>
            <input type="hidden" name="client_id" value="<?php echo $row["id"]; ?>">
            <div class="row">
                <div class="col-md-12">
                    <label for="" class="control-label">Your Name</label>
                    <input type="text" name="client_name" class="form-control client_name" value="<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="" class="control-label">Your Contact Number</label>
                    <input type="text" id="client_contact_number" name="client_contact_number" maxlength="15" class="form-control client_contact_number" value="+<?php echo $row["country_code"]; ?> <?php echo $row["mobile_code"]; ?> <?php echo $row["number"]; ?>" readonly>
                    <script type="text/javascript">
                        var client_contact_number = document.getElementById("client_contact_number").value;
                        if(client_contact_number == "+0 0 ") {
                            document.getElementById("client_contact_number").value = "";
                        }
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="" class="control-label">Start Time</label>
                    <input type="time" id="start_time" onchange="onStartTimeChange()" class="form-control">
                    <span id="start_timeErr" class="error"></span>
                    <input type="hidden" id="start_timeHidden" name="start_time">
                    <script type="text/javascript">
                        var start_time = document.getElementById("start_time");
                        function onStartTimeChange() {
                            var timeSplit = start_time.value.split(':'),
                                hours,
                                minutes,
                                meridian;
                            hours = timeSplit[0];
                            minutes = timeSplit[1];
                            if (hours > 12) {
                                meridian = 'PM';
                                hours -= 12;
                            } else if (hours < 12) {
                                meridian = 'AM';
                                if (hours == 0) {
                                hours = 12;
                                }
                            } else {
                                meridian = 'PM';
                            }
                            console.log(hours + ':' + minutes + ' ' + meridian);
                            document.getElementById("start_timeHidden").value = hours + ':' + minutes + ' ' + meridian;
                        }
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="" class="control-label">End Time</label>
                    <input type="time" id="end_time" onchange="onEndTimeChange()" class="form-control">
                    <span id="end_timeErr" class="error"></span>
                    <input type="hidden" id="end_timeHidden" name="end_time">
                    <script type="text/javascript">
                        var end_time = document.getElementById("end_time");
                        function onEndTimeChange() {
                            var timeSplit = end_time.value.split(':'),
                                hours,
                                minutes,
                                meridian;
                            hours = timeSplit[0];
                            minutes = timeSplit[1];
                            if (hours > 12) {
                                meridian = 'PM';
                                hours -= 12;
                            } else if (hours < 12) {
                                meridian = 'AM';
                                if (hours == 0) {
                                hours = 12;
                                }
                            } else {
                                meridian = 'PM';
                            }
                            console.log(hours + ':' + minutes + ' ' + meridian);
                            document.getElementById("end_timeHidden").value = hours + ':' + minutes + ' ' + meridian;
                            if(end_timeHidden.value == start_timeHidden.value) {
                                document.getElementById("end_timeErr").innerHTML = "Please! Change the end time because Start Time and End Time are matching.";
                            } else {
                                document.getElementById("end_timeErr").innerHTML = "";
                            }
                        }
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="" class="control-label">Appoinment Date</label>
                    <input type="date" id="appoinment_date" name="appoinment_date" onchange="appoinmentDate()" class="form-control">
                    <span id="appoinment_dateErr" class="error"></span>
                    <script type="text/javascript">
                        function appoinmentDate(){
                            var appoinment_date = document.getElementById("appoinment_date").value;
                            alert(appoinment_date);
                        }
                    </script>
                </div>
            </div>
            <?php } } ?>
            <br>
            <div class="row">
                <div class="col-md-6 text-center">
                    <input type="submit" class="btn btn-primary btn-lg" value="Book" name="book_appoinment">
                </div>
                <?php
                    $sql = "select * from user where id='".$id."' limit 1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-6 text-center">
                    <a href="our-lawyers-details.php?id=<?php echo $row["id"]; ?>&name=<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>" class="btn btn-primary btn-lg">Cancel</a>
                </div>
                <span id="appoinmentErr" class="error"></span>
                <?php } } ?>
            </div>
        </div>
    </form>
</div>
<!-- Appoinment Book Form Section End -->


<?php
require("includes/footer.inc.php");
?>