<?php
$titleTag = '';
$title = "Lawyers Website - Clients Messages";// for dynamic title on selected page
$currentPage = 'Clients Messages';// for add dynamic active class on selected page on header
$pageTitle = "Clients Messages";// for add dynamic text of Page Title Section
$page="client-messages.php";// for add dynamic url text of Page Title Section
$id = $_GET['id'];
require("includes/header.inc.php");
require("includes/connection.inc.php");
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
    if(isset($_POST["submit"])){
        $lawyer_id = $_POST["lawyer_id"];
        $client_id = $_POST["client_id"];
        $lawyer_name = $_POST["lawyer_name"];
        $lawyer_email = $_POST["lawyer_email"];
        $lawyer_message = $_POST["lawyer_message"];
        mysqli_query($conn,"insert into reply (lawyer_id,client_id,lawyer_name,lawyer_email,lawyer_message,status) values ('$lawyer_id','$client_id','$lawyer_name','$lawyer_email','$lawyer_message','1')");
?>
<script type="text/javascript">
    alert("Send Message Successfully!!!");
</script>
<?php } ?>




<?php
    require("includes/connection.inc.php");
    $lawyer_id="";
    $role="Lawyer";
    error_reporting(0);
    $query=mysqli_query($conn,"select * from user inner join lawyer_details on user.id=lawyer_details.user_id where user.username='".$_SESSION["username"]."' and user.role='".$role."' limit 1");
    while($row=mysqli_fetch_array($query)){
        $lawyer_id=$row["id"];
        $lawyerfname = $row["first_name"];
        $lawyermname = $row["middle_name"];
        $lawyerlname = $row["last_name"];
        $lawyer_email = $row["lawyer_email"];
    }
?>




<?php
  $sql = "select * from contact where id='".$id."' limit 1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
<!-- Page Title Section Start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Reply To <?php echo $row["client_name"]; ?></h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <a href="client-messages.php">Clients Messages</a> / <span><a href="client-messages-reply.php?id=<?php echo $row["id"]; ?>">Reply To <?php echo $row["client_name"]; ?></a></span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title Section End -->



<script type="text/javascript">
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function formValidation() {
        var lawyer_message = document.getElementById("lawyer_message").value;
        
        // Defining error variables with a default value
        var lawyer_messageErr = true;


        // Start Validate Client Message
        if(lawyer_message == "") {
            printError("lawyer_messageErr", "Please! Enter Your Reply Message");
        } else {
            var regex = /^[a-zA-Z\.,?'"\s]+$/;                
            if(regex.test(lawyer_message) === false){
                printError("lawyer_messageErr", "Please! Enter Only Text...");
            } else {
                if(lawyer_message.length < 20){
                    printError("lawyer_messageErr", "Please! Enter Your Reply Message Minimum 20 Characters");
                } else {
                    printError("lawyer_messageErr", "");
                    lawyer_messageErr = false;
                }
            }
        }
        // End Validate Client Message



        if((lawyer_messageErr) == true){
            return false;
        }else{
            return true;
        }
    }
</script>




<div class="listpgWraper">
  <div class="container"> 
    <!-- Blog start -->
    <div class="row">
      <div class="col-md-12">
        <!-- Blog List start -->
        <div class="blogWraper">
          <div class="comments margin-top30">
            
            <!-- LEAVE COMMENTS -->
            <div class="commnetsfrm">
            <div class="section-title-privacy-policy">
                <h2 class="text-center">Reply To <?php echo $row["client_name"]; ?></h2>
            </div>
              <form method="POST" action="" onsubmit="return formValidation()">
                  <input type="hidden" name="lawyer_id" value="<?php echo $lawyer_id; ?>">
                  <input type="hidden" name="client_id" value="<?php echo $row["client_id"]; ?>">
                <ul class="row">
                  <li class="col-sm-6">
                    <label>
                      <input type="text" class="form-control lawyer_name" name="lawyer_name" value="<?php echo $lawyerfname; echo $lawyermname; echo $lawyerlname; ?>" placeholder="Enter Your Name" readonly>
                    </label>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <input type="text" class="form-control lawyer_email" name="lawyer_email" value="<?php echo $lawyer_email; ?>" placeholder="Enter Your Email Address" readonly>
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <textarea class="form-control" name="lawyer_message" id="lawyer_message" placeholder="Enter Your Reply Message"></textarea>
                      <span id="lawyer_messageErr" class="error"></span>
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <button type="submit" name="submit" class="btn margin-top-20">Send Message</button>
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } } ?>




<?php
require("includes/footer.inc.php");
?>