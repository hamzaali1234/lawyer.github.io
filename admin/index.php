<?php
$title = "Lawyers Website - Admin | Dashboard";// for dynamic title on selected page
$currentPage = 'Dashboard';// for add dynamic active class on selected page on header 
require("includes/header.inc.php");
?>
        



<?php
    $casses = "";
    $query=mysqli_query($conn,"select sum(lawyer_casses_done) from lawyer_details");
    while($row=mysqli_fetch_array($query)){
        $casses=$row["sum(lawyer_casses_done)"];
    }
?>
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-search"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $casses; ?></span></div>
                                            <div class="stat-heading">Success Casses</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php
    $lawyer = "";
    $query=mysqli_query($conn,"select count(*) from user where role='Lawyer'");
    while($row=mysqli_fetch_array($query)){
        $lawyer=$row["count(*)"];
    }
?>
                    <div class="col-lg-3 col-md-6">
                        <a href="lawyers.php">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $lawyer; ?></span></div>
                                            <div class="stat-heading">Lawyers</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
<?php
    $appoinment = "";
    $query=mysqli_query($conn,"select count(*) from appoinment");
    while($row=mysqli_fetch_array($query)){
        $appoinment=$row["count(*)"];
    }
?>
                    <div class="col-lg-3 col-md-6">
                        <a href="appoinments.php">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $appoinment; ?></span></div>
                                            <div class="stat-heading">Appointments</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
<?php
    $client = "";
    $query=mysqli_query($conn,"select count(*) from user where role='Client'");
    while($row=mysqli_fetch_array($query)){
        $client=$row["count(*)"];
    }
?>
                    <div class="col-lg-3 col-md-6">
                        <a href="clients.php">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $client; ?></span></div>
                                            <div class="stat-heading">Clients</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <!-- /Widgets -->

                <div class="clearfix"></div>
                



<?php
require("includes/footer.inc.php");
?>