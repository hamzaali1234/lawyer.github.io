<?php
$titleTag = '';
$title = "Lawyers Website - Clients Messages";// for dynamic title on selected page
$currentPage = 'Clients Messages';// for add dynamic active class on selected page on header
$pageTitle = "Clients Messages";// for add dynamic text of Page Title Section
$page="client-messages.php";// for add dynamic url text of Page Title Section
require("includes/header.inc.php");
require("includes/connection.inc.php");
$search_input = $_POST['search_input'];
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
    $role="Lawyer";
    error_reporting(0);
    $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' and role='".$role."' limit 1");
    while($row=mysqli_fetch_array($query)){
        $id=$row["id"];
    }
?>



<script type="text/javascript">
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function formValidation() {
        var search_input = document.getElementById("search_input").value;
        
        // Defining error variables with a default value
        var search_inputErr = true;


        // Start Validate Search
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
        // End Validate Search

        if((search_inputErr) == true){
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
          <!-- Side Bar -->
        <div class="sidebar"> 
          <!-- Search -->
          <div class="widget">
            <h5 class="widget-title">Search</h5>
            <div class="search">
              <form action="" method="POST" onsubmit="return formValidation()">
                <input type="search" class="form-control" id="search_input" name="search_input" placeholder="Search Here...">
                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                <span id="search_inputErr" class="error"></span>
              </form>
            </div>
          </div>
        </div>
        <!-- Blog List start -->
        <div class="blogWraper">
          <div class="comments margin-top30">
            <h4>Clients Messages</h4>
            <ul class="media-list">
            <?php
                error_reporting(0);
                $page=$_GET["page"];
                if($page=="" || $page=="1")
                {
                    $page1=0;
                } else {
                    $page1=($page*10)-10;
                }
                if($search_input == "") {
                    if($page=="all"){
                      $sql = "select * from contact where lawyer_id='".$id."' order by id desc";
                    }else{
                      $sql = "select * from contact where lawyer_id='".$id."' order by id desc limit ".$page1.",10";
                    }
                } else {
                    $sql = "select * from contact where lawyer_id='".$id."' and client_name like '%$search_input%' order by id desc";
                }
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $timestamp = strtotime($row['contact_on']);
                        $date = date('F j, Y, g:ia',$timestamp);
            ?>
              <!-- Client Message -->
              <li class="media">
                <div class="media-left"> <a href="client-messages-reply.php?id=<?php echo $row["id"]; ?>">
                <?php $clientId = $row["client_id"];
                  $query2=mysqli_query($conn,"select * from user where id='".$clientId."' limit 1");
                  while($row2=mysqli_fetch_array($query2)){
                      $client_image=$row2["image"];
                  }
                ?>
                <img class="media-object img-responsive" src="<?php echo $client_image; ?>" alt=""> <br>
                  </a> </div>
                <div class="media-body">
                  <h6 class="media-heading"><?php echo $row["client_name"]; ?><span> <?php echo $date; ?></span></h6>
                  <p><?php echo $row["client_message"]; ?></p>
                  <a href="client-messages-reply.php?id=<?php echo $row["id"]; ?>" class="btn btn-yellow raply"><i class="fa fa-reply" aria-hidden="true"></i></a> </div>
              </li>
            <?php } } ?>
            </ul>
            <style>
              li.page-item a.page-link{
                background:#db3636;
                color:white;
              }
              li.page-item a.active{
                background:#343A40;
                color:white;
              }
            </style>
            <div class="text-center" id="pagination">
            <ul class="pagination">
              <?php
                if($page>1){
                    $last = $page-1;
                    echo '<li class="page-item"><a class="page-link hvr-bob" href="client-messages.php?page='.$last.'">Previous</a></li>';
                } else {
                    echo '<li class="page-item"><a class="page-link" style="background:grey;pointer-events: none;" href="#">Previous</a></li>';
                }
                $query2=mysqli_query($conn,"select * from contact where lawyer_id='".$id."' order by id desc");
                $count=mysqli_num_rows($query2);
                $a=$count/10;
                $a=ceil($a);
                for($b=1;$b<=$a;$b++){
              ?>
                <li class="page-item"><a class="page-link hvr-bob <?php if($b==$page){echo 'active';} ?>" style="color:white;" href="client-messages.php?page=<?php echo $b; ?>"><?php echo $b; ?></a></li> 
              <?php }
                if($b>2){
                  if($page>$page1){
                      $next = $page+1;
                      echo '<li class="page-item"><a class="page-link hvr-bob" href="client-messages.php?page='.$next.'">Next</a></li>';   
                  } else {
                      echo '<li class="page-item"><a class="page-link" style="background:grey;pointer-events: none;" href="#">Next</a></li>';
                  }
                ?>
                <li class="page-item"><a class="page-link hvr-bob <?php if($page=='all'){echo 'active';} ?>" href="client-messages.php?page=all">View All</a></li>
                <?php
                } else {
                  echo '<li class="page-item"><a class="page-link" style="background:grey;pointer-events: none;" href="#">Next</a></li>';
                  echo '<li class="page-item"><a class="page-link" style="background:grey;pointer-events: none;" href="#">View All</a></li>';
                }
              ?>
            </ul>
            </div>
          </div>
        </div>
      </div>
        <?php
            error_reporting(0);
            $page=$_GET["page"];
            if($page=="" || $page=="1")
            {
                $page1=0;
            } else {
                $page1=($page*10)-10;
            }
            if($search_input == "") {
                if($page=="all"){
                  $sql = "select * from contact where lawyer_id='".$id."' order by id desc";
                }else{
                  $sql = "select * from contact where lawyer_id='".$id."' order by id desc limit ".$page1.",10";
                }
            } else {
                $sql = "select * from contact where lawyer_id='".$id."' and client_name like '%$search_input%' order by id desc";
            }
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $timestamp = strtotime($row['contact_on']);
                    $date = date('F j, Y, g:ia',$timestamp);
                }}else{
        ?>
        <div class="error-page-wrap">
          <div class="container">
            <div class="col-md-12 text-center errormain" style="padding-top:0px;">
              <h2>4<span style="color:#b89b5e">0</span>4</h2>
              <h3>Messages not Found</h3>
              <div class="error-msg">
                <p id="searching_error_msg"></p>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          var search_input = "<?php echo $search_input; ?>";
          if(search_input != ""){
            document.getElementById("searching_error_msg").innerHTML = 'You are looking for someone with the message <span style="color:#db3636;font-weight:bold;">"<?php echo $search_input; ?>"</span>, messages from this client were not found.';
          }else{
            document.getElementById("searching_error_msg").innerHTML = 'Clients messages are not available';
          }
          document.getElementById("pagination").style.display = "none";
        </script>
        <?php } ?>
    </div>
  </div>
</div>





<?php
require("includes/footer.inc.php");
?>