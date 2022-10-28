<?php
$titleTag = '';
$title = "Lawyers Website - Appointment";// for dynamic title on selected page
$currentPage = 'Appointment';// for add dynamic active class on selected page on header
$pageTitle = "Appointment";// for add dynamic text of Page Title Section
$page="appointment.php";// for add dynamic url text of Page Title Section
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




<!-- Page Title Section Start -->
<?php
require("includes/includes-sections/page-title-section.inc.php");
?>
<!-- Page Title Section End -->



<?php
    require("includes../connection.inc.php");
    $id="";
    error_reporting(0);
    $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' limit 1");
    while($row=mysqli_fetch_array($query)){
        $id=$row["id"];
    }
?>
<div class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="section-title-privacy-policy">
                <h2 class="text-center">Client's Appointment</h2><br>
            </div>
            <div class="col-md-12 text-center" id="appointmentPreview" style="overflow: scroll;">
                <table class="table table-striped table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th class="text-center">S.No</th>
                            <th class="text-center">Client Name</th>
                            <th class="text-center">Client Selected Service</th>
                            <th class="text-center">Client Contact No</th>
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
                            <td><a href="tel:<?php echo $row["client_contact_number"]; ?>"><?php echo $row["client_contact_number"]; ?></a></td>
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




<?php
require("includes/footer.inc.php");
?>