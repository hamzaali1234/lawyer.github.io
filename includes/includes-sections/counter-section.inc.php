<div id="counter">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
        <?php
            $lawyer = "";
            $query=mysqli_query($conn,"select count(*) from user where role='Lawyer'");
            while($row=mysqli_fetch_array($query)){
                $lawyer=$row["count(*)"];
            }
        ?>
          <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="<?php echo $lawyer; ?>" data-speed="1000"></span> <span class="counter-text">Trusted Lawyers</span> </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
        <?php
            $casses = "";
            $query=mysqli_query($conn,"select sum(lawyer_casses_done) from lawyer_details");
            while($row=mysqli_fetch_array($query)){
                $casses=$row["sum(lawyer_casses_done)"];
            }
        ?>
          <div class="counter-icon"><i class="fa fa-university" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="<?php echo $casses; ?>" data-speed="2000"></span> <span class="counter-text">Success Cases</span> </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
        <?php
            $appoinment = "";
            $query=mysqli_query($conn,"select count(*) from appoinment");
            while($row=mysqli_fetch_array($query)){
                $appoinment=$row["count(*)"];
            }
        ?>
          <div class="counter-icon"><i class="fa fa-book" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="<?php echo $appoinment; ?>" data-speed="3000"></span> <span class="counter-text">Appointments</span> </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
        <?php
            $client = "";
            $query=mysqli_query($conn,"select count(*) from user where role='Client'");
            while($row=mysqli_fetch_array($query)){
                $client=$row["count(*)"];
            }
        ?>
          <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="<?php echo $client; ?>" data-speed="4000"></span> <span class="counter-text">Trusted Users</span> </div>
      </div>
    </div>
  </div>
</div>