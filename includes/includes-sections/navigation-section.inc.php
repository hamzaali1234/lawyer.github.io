<div class="navbar custom-navbar" id="navbar" role="navigation">
  <div class="container"> 

    <!-- NAVBAR HEADER -->
    <div class="navbar-header" style="padding-bottom:10px;">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span class="icon icon-bar"></span> </button>
      <!-- lOGO TEXT HERE --> 
      <a href="index.php" class="navbar-brand"><img src="images/logo-color-remove.png" width="165px" style="margin-top:-57px;" class="hvr-buzz-out" alt="" /></a> </div>
      <?php
        require("includes../connection.inc.php");
        error_reporting(0);
        $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' limit 1");
        while($row=mysqli_fetch_array($query)){
          $status=$row["status"];
        if($status=="0") {
      ?>
      <script type="text/javascript">
        window.location.href = "logout.php";
      </script>
      <?php } } ?>
    <!-- NAVIGATION LINKS -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
      <?php
        require("includes../connection.inc.php");
        $role="";
        error_reporting(0);
        $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' limit 1");
        while($row=mysqli_fetch_array($query)){
          $role=$row["role"];
        if($role=="Lawyer") { 
      ?>
        <li class="<?php if($currentPage =='Home'){echo 'active';}?>"><a href="index.php">Home</a></li>
        <li class="<?php if($currentPage =='Our Services'){echo 'active';}?>"><a href="our-services.php">Our Services</a></li>
        <li class="<?php if($currentPage =='Our Lawyers'){echo 'active';}?>"><a href="our-lawyers.php">Our Lawyers</a></li>
        <li class="<?php if($currentPage =='Appointment'){echo 'active';}?>"><a href="appointment.php">Appointment</a></li>
        <li class="<?php if($currentPage =='About Us'){echo 'active';}?>"><a href="about-us.php">About Us</a></li>
        <li class="<?php if($currentPage =='Contact Us'){echo 'active';}?>"><a href="contact-us.php">Contact Us</a></li>
        <li><button onclick="searchOpen()" id="nav-search"><span><i class="fa fa-search"></i></span></button></li>
        <?php }else{ ?>
          <li class="<?php if($currentPage =='Home'){echo 'active';}?>"><a href="index.php">Home</a></li>
          <li class="<?php if($currentPage =='Our Services'){echo 'active';}?>"><a href="our-services.php">Our Services</a></li>
          <li class="<?php if($currentPage =='Our Lawyers'){echo 'active';}?>"><a href="our-lawyers.php">Our Lawyers</a></li>
          <li class="<?php if($currentPage =='About Us'){echo 'active';}?>"><a href="about-us.php">About Us</a></li>
          <li class="<?php if($currentPage =='Contact Us'){echo 'active';}?>"><a href="contact-us.php">Contact Us</a></li>
          <li><button onclick="searchOpen()" id="nav-search"><span><i class="fa fa-search"></i></span></button></li>
        <?php } } ?>
        <?php if($role==""){ ?> 
          <li class="<?php if($currentPage =='Home'){echo 'active';}?>"><a href="index.php">Home</a></li>
          <li class="<?php if($currentPage =='Our Services'){echo 'active';}?>"><a href="our-services.php">Our Services</a></li>
          <li class="<?php if($currentPage =='Our Lawyers'){echo 'active';}?>"><a href="our-lawyers.php">Our Lawyers</a></li>
          <li class="<?php if($currentPage =='About Us'){echo 'active';}?>"><a href="about-us.php">About Us</a></li>
          <li class="<?php if($currentPage =='Contact Us'){echo 'active';}?>"><a href="contact-us.php">Contact Us</a></li>
          <li><button onclick="searchOpen()" id="nav-search"><span><i class="fa fa-search"></i></span></button></li>
          <!-- <li><a href="services.html">Service</a></li> -->
          <!-- <li class="dropdown"><a href="#" style="pointer-events:none;">More <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="<?php if($currentPage =='Practice Area'){echo 'active';}?>"><a href="practice-area.php">Practice Area</a></li>
              <li class="<?php if($currentPage =='Practice Area Detail'){echo 'active';}?>"><a href="practice-area-detail.php">Practice Area Detail</a></li>
              <li class="<?php if($currentPage =='Our Services'){echo 'active';}?>"><a href="our-services.php">Our Services</a></li>
              <li class="<?php if($currentPage =='FAQs'){echo 'active';}?>"><a href="faqs.php">FAQs</a></li>
              <li class="<?php if($currentPage =='Testimonials'){echo 'active';}?>"><a href="testimonials.php">Testimonials</a></li>
              <li class="<?php if($currentPage =='404'){echo 'active';}?>"><a href="404.php">404</a></li>
            </ul> -->
        <?php } ?>
        <!-- <li><span class="calltxt"><i class="fa fa-phone" aria-hidden="true"></i> +92 345 2418563</span></li> -->
        <!-- <li><a href="lawyers login system/login.php"><button class="btn btn-primary">Lawyer Login</button></a></li>
        <li><a href="clients login system/login.php"><button class="btn btn-primary">Client Login</button></a></li> -->
        <?php
            require("includes../connection.inc.php");
            $role="";
            error_reporting(0);
            $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' limit 1");
            while($row=mysqli_fetch_array($query)){
              $role=$row["role"];
              $userid=$row["id"];
            if($role=="Lawyer") { ?>
        <li class="dropdown"><a href="#" style="pointer-events:none;"><img src="" id="login-img"><span id="usernameORname_nav"></span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="text-center"><img src="" id="login-img-dropdown"></li>
            <li class="text-center"><h4 id="login-title"></h4></li>
            <li class="text-center"><a href="#" id="login-email" style="pointer-events:none;"><?php echo $row["email"]; ?></a><span id="login-type"><?php echo $role; ?></span></li>
            <li class="text-center <?php if($currentPage =='My Profile'){echo 'active';}?>" style="margin-top:20px;"><a href="my-profile.php">My Profile</a></li>
            <?php 
              $query2=mysqli_query($conn,"select count(*) from contact where lawyer_id='".$userid."' or client_id='".$userid."'");
              while($row2=mysqli_fetch_array($query2)){
            ?>
            <li class="text-center <?php if($currentPage =='Clients Messages'){echo 'active';}?>"><a href="client-messages.php?page=1">Clients Messages <span style="background:#1b6cff;color:white;padding:5px;border-radius:100%;border:1px solid white;" id="lawyer_messages" class="badge badge-light"></span></a></li>
            <script type="text/javascript">
              var lawyer_messages_row = "<?php echo $row2["count(*)"]; ?>";
              if(lawyer_messages_row == "0"){
                document.getElementById("lawyer_messages").style.display = "none";
                document.getElementById("lawyer_messages").innerHTML = "";
              } else {
                document.getElementById("lawyer_messages").style.display = "inline-block";
                document.getElementById("lawyer_messages").innerHTML = "<?php echo $row2["count(*)"]; ?>";
              }
            </script>
            <?php } ?>
            <li class="text-center"><a href="logout.php">Log Out</a></li>
          </ul>
        </li>
        <input type="hidden" id="username_nav" value="<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>">
        <script type="text/javascript">
          var username_nav = document.getElementById("username_nav").value;
          if(username_nav == "  "){
              document.getElementById("usernameORname_nav").innerHTML = "<?php echo $row["username"]; ?>";
              document.getElementById("login-title").innerHTML = "<?php echo $row["username"]; ?>";
          }else{
              document.getElementById("usernameORname_nav").innerHTML = "<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>";
              document.getElementById("login-title").innerHTML = "<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>";
          }
          var profile_image = "<?php echo $row["image"]; ?>"
          if(profile_image == ""){
              document.getElementById("login-img").src="images/lawyers/default_profile_image.png";
              document.getElementById("login-img-dropdown").src="images/lawyers/default_profile_image.png";
          }else{
              document.getElementById("login-img").src="<?php echo $row["image"]; ?>";
              document.getElementById("login-img-dropdown").src="<?php echo $row["image"]; ?>";
          }
        </script>
        <?php } if($role=="Client"){ ?>
          <li class="dropdown"><a href="#" style="pointer-events:none;"><img src="" id="login-img"><span id="usernameORname_nav"></span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="text-center"><img src="" id="login-img-dropdown"></li>
            <li class="text-center"><h4 id="login-title"></h4></li>
            <li class="text-center"><a href="#" id="login-email" style="pointer-events:none;"><?php echo $row["email"]; ?></a><span id="login-type"><?php echo $role; ?></span></li>
            <li class="text-center <?php if($currentPage =='My Profile'){echo 'active';}?>" style="margin-top:20px;"><a href="my-profile.php">My Profile</a></li>
            <?php 
              $query2=mysqli_query($conn,"select count(*) from reply where client_id='".$userid."'");
              while($row2=mysqli_fetch_array($query2)){
            ?>
            <li class="text-center <?php if($currentPage =='Lawyers Messages'){echo 'active';}?>"><a href="lawyer-messages.php?page=1">Lawyers Messages <span style="background:#1b6cff;color:white;padding:5px;border-radius:100%;border:1px solid white;" id="client_messages" class="badge badge-light"></span></a></li>
            <script type="text/javascript">
              var client_messages_row = "<?php echo $row2["count(*)"]; ?>";
              if(client_messages_row == "0"){
                document.getElementById("client_messages").style.display = "none";
                document.getElementById("client_messages").innerHTML = "";
              } else {
                document.getElementById("client_messages").style.display = "inline-block";
                document.getElementById("client_messages").innerHTML = "<?php echo $row2["count(*)"]; ?>";
              }
            </script>
            <?php } ?>
            <li class="text-center"><a href="logout.php">Log Out</a></li>
          </ul>
        </li>
        <input type="hidden" id="username_nav" value="<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>">
        <script type="text/javascript">
          var username_nav = document.getElementById("username_nav").value;
          if(username_nav == "  "){
              document.getElementById("usernameORname_nav").innerHTML = "<?php echo $row["username"]; ?>";
              document.getElementById("login-title").innerHTML = "<?php echo $row["username"]; ?>";
          }else{
              document.getElementById("usernameORname_nav").innerHTML = "<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>";
              document.getElementById("login-title").innerHTML = "<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>";
          }
          var profile_image = "<?php echo $row["image"]; ?>"
          if(profile_image == ""){
              document.getElementById("login-img").src="images/lawyers/default_profile_image.png";
              document.getElementById("login-img-dropdown").src="images/lawyers/default_profile_image.png";
          }else{
              document.getElementById("login-img").src="<?php echo $row["image"]; ?>";
              document.getElementById("login-img-dropdown").src="<?php echo $row["image"]; ?>";
          }
        </script>
        <?php } } ?>
        <?php if($role==""){ ?> 
        <li><a href="lawyers login system/login.php"><button class="btn btn-primary" style="background-color:#b89b5e ;">Lawyer Login</button></a></li>
        <li><a href="clients login system/login.php"><button class="btn btn-primary" style="background-color:#b89b5e ;">Client Login</button></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>
<script type="text/javascript">
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function formValidation() {
        var nav_search_input = document.getElementById("nav_search_input").value;
        
        // Defining error variables with a default value
        var nav_search_inputErr = true;


        // Start Validate Search
        if(nav_search_input == "") {
            printError("nav_search_inputErr", "");
            nav_search_inputErr = false;
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(nav_search_input) === false){
                printError("nav_search_inputErr", "Please! Enter Only Text...");
            } else {
                printError("nav_search_inputErr", "");
                nav_search_inputErr = false;
            }
        }
        // End Validate Search

        if((nav_search_inputErr) == true){
            return false;
        }else{
            return true;
        }
    }
</script>
<div class="container-fluid" id="main-nav-search-div" style="padding-top: 10px; display:none;">
  <div class="col-md-12" id="nav-search-div">
    <form action="our-lawyers.php" method="POST" onsubmit="return formValidation()">
      <span id="nav-search-icon-input"><i class="fa fa-search"></i></span>
      <input type="search" placeholder="Search Lawyers..." id="nav-search-input" name="nav-search-input">
      <span id="nav_search_inputErr" class="error"></span>
      <div class="col-md-6 text-center nav-search-btn">
        <input class="btn btn-primary" type="submit" value="Search">
      </div>
      <div class="col-md-6 text-center nav-search-btn">
        <span onclick="searchClose()"><i class="fa fa-close"></i></span>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
  function searchClose() {
    document.getElementById("main-nav-search-div").style.display = "none";
    document.getElementById("navbar").style.display = "block";
  }
  function searchOpen() {
    document.getElementById("main-nav-search-div").style.display = "block";
    document.getElementById("navbar").style.display = "none";
  }
</script>