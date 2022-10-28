<?php
$title = "Lawyers Website - Admin | Clients";// for dynamic title on selected page
$currentPage = 'Clients';// for add dynamic active class on selected page on header
$pageURL="clients.php";// for add dynamic url text of Navigator Section
require("includes/connection.php");
if(isset($_GET['type']) && $_GET['type']!=''){
    $type=$_GET['type'];
    $id=$_GET['id'];
	if($type=='status'){
		$operation=$_GET['operation'];
		if($operation=='active'){
            $status='1';
?>
<script type="text/javascript">
    alert("Client has been Activated!!!");
</script>
<?php
		}else{
            $status='0';
?>
<script type="text/javascript">
    alert("Client has been Deactivated!!!");
</script>
<?php
		}
		$update_status_sql="update user set status='".$status."' where id='".$id."'";
        mysqli_query($conn,$update_status_sql);
	}
	
	if($type=='delete'){
		$delete_sql="delete from user where id='".$id."'";
        mysqli_query($conn,$delete_sql);
?>
<script type="text/javascript">
    alert("Client has been Delete!!!");
</script>
<?php
	}
}
require("includes/header.inc.php");
?>
<style>
#table::-webkit-scrollbar {
    /* display: none; */
    width:18px;
}
#table::-webkit-scrollbar-thumb {
	background: #db3636; 
	box-shadow: inset 0 0 8px grey , 0 0 10px 3px lightgrey;
    border-radius: 10px;
    border: 2px solid rgba(255, 255, 255, 1);
}
#table::-webkit-scrollbar-track {
	background: #f1f1f1; 
	box-shadow: inset 0 0 10px 1px lightgrey;
    margin-top:2px !important;
    border-radius: 10px;
}
</style>



<!-- Navigator Section Start -->
<?php
require("includes/include-sections/navigator-section.inc.php");
?>
<!-- Navigator Section Start -->


<!-- Clients Section Start -->
<div style="width:1060px;padding-right:0px;">
<div class="content pb-0" style="box-sizing: border-box;">
    <div class="orders">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">All Clients </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table" id="table" style="overflow-x:scroll !important;">
                            <table class="table table-hover table-bordered" style="width:400% !important;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th style="width:180px !important;">Name</th>
                                        <th>Gender</th>
                                        <th style="width:180px !important;">DOB</th>
                                        <th>CNIC/NICOP/B-form</th>
                                        <th>Country</th>
                                        <th>Nationality</th>
                                        <th>City</th>
                                        <th style="width:300px !important;">Mailing/Postal Address</th>
                                        <th style="width:180px !important;">Contact No</th>
                                        <th>Highest Qualification</th>
                                        <th>Specialization</th>
                                        <th>Other Specialization</th>
                                        <th>Current Status</th>
                                        <th>Future Plan</th>
                                        <th>Employment Status</th>
                                        <th>Experience Level</th>
                                        <th>Job City</th>
                                        <th>Salary Income</th>
                                        <th style="width:180px !important;text-align:center;">Account Created On</th>
                                        <th style="width:300px !important;text-align:center;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $role = "Client";
                                    $sql = "select * from user where role='".$role."' order by id asc";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        $i = 1;
                                        while ($row = $result->fetch_assoc()) {
                                            $timestamp = strtotime($row['date']);
                                            $date = date('F j, Y, g:ia',$timestamp);
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?>.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img id="image<?php echo $row["id"]; ?>" class="rounded-circle" src="" alt=""></a>
                                            </div>
                                        </td>
                                        <td>#<?php echo $row["id"]; ?></td>
                                        <td style="text-transform:none;"><?php echo $row["username"]; ?></td>
                                        <td><a href="mailto:<?php echo $row["email"]; ?>" style="color:#db3636;text-transform:none;"><?php echo $row["email"]; ?></a></td>
                                        <td><?php echo $row["password"]; ?></td>
                                        <td><?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?></td>
                                        <td><?php echo $row["gender"]; ?></td>
                                        <td><span class="count"><?php echo $row["dob_day"]; ?></span> <?php echo $row["dob_month"]; ?> <span class="count"><?php echo $row["dob_year"]; ?></span></td>
                                        <td><span class="count"><?php echo $row["cnic"]; ?></span></td>
                                        <td><?php echo $row["country"]; ?></td>
                                        <td><?php echo $row["nationality"]; ?></td>
                                        <td><?php echo $row["city"]; ?></td>
                                        <td><?php echo $row["mailing_address"]; ?></td>
                                        <td><a href="tel:+<?php echo $row["country_code"]; ?> <?php echo $row["mobile_code"]; ?> <?php echo $row["number"]; ?>" style="color:#db3636;">+<span class="count"><?php echo $row["country_code"]; ?></span> <span class="count"><?php echo $row["mobile_code"]; ?></span> <span class="count"><?php echo $row["number"]; ?></span></a></td>
                                        <td><?php echo $row["highest_qualification"]; ?></td>
                                        <td id="specialization<?php echo $row["id"]; ?>"></td>
                                        <td id="specialization_other<?php echo $row["id"]; ?>"></td>
                                        <td><?php echo $row["current_status"]; ?></td>
                                        <td><?php echo $row["future_plan"]; ?></td>
                                        <td id="employment_status<?php echo $row["id"]; ?>"></td>
                                        <td id="experience_level<?php echo $row["id"]; ?>"></td>
                                        <td id="job_city<?php echo $row["id"]; ?>"></td>
                                        <td id="salary_income<?php echo $row["id"]; ?>"></td>
                                        <td style="text-align:center;"><?php echo $date; ?></td>
                                        <td style="text-align:center;">
                                            <?php
                                                echo "<a class='badge badge-primary' href='edit_clients.php?id=".$row['id']."'>Edit</a>&nbsp;";
                                                echo "<a class='badge badge-danger' href='?type=delete&id=".$row['id']."'>Delete</a>&nbsp;";
                                                if($row["status"]==1){
                                                    echo "<a class='badge badge-pending' href='?type=status&operation=deactive&id=".$row['id']."'>Deactivate</a>";
                                                }else{
                                                    echo "<a class='badge badge-complete' href='?type=status&operation=active&id=".$row['id']."'>Activate</a>";
                                                }    
                                            ?>
                                        </td>
                                    </tr>
                                    <script type="text/javascript">
                                        var image = "<?php echo $row["image"]; ?>";
                                        if(image == ""){
                                            document.getElementById("image<?php echo $row["id"]; ?>").src = "../images/message-image.png";
                                        } else {
                                            document.getElementById("image<?php echo $row["id"]; ?>").src = "../<?php echo $row["image"]; ?>";
                                        }
                                        var specialization = "<?php echo $row["specialization"]; ?>";
                                        if(specialization == ""){
                                            document.getElementById("specialization<?php echo $row["id"]; ?>").innerHTML = "N/A";
                                        } else {
                                            document.getElementById("specialization<?php echo $row["id"]; ?>").innerHTML = "<?php echo $row["specialization"]; ?>";
                                        }
                                        var specialization_other = "<?php echo $row["specialization_other"]; ?>";
                                        if(specialization_other == ""){
                                            document.getElementById("specialization_other<?php echo $row["id"]; ?>").innerHTML = "N/A";
                                        } else {
                                            document.getElementById("specialization_other<?php echo $row["id"]; ?>").innerHTML = "<?php echo $row["specialization_other"]; ?>";
                                        }
                                        var employment_status = "<?php echo $row["employment_status"]; ?>";
                                        if(employment_status == ""){
                                            document.getElementById("employment_status<?php echo $row["id"]; ?>").innerHTML = "N/A";
                                        } else {
                                            document.getElementById("employment_status<?php echo $row["id"]; ?>").innerHTML = "<?php echo $row["employment_status"]; ?>";
                                        }
                                        var experience_level = "<?php echo $row["experience_level"]; ?>";
                                        if(experience_level == ""){
                                            document.getElementById("experience_level<?php echo $row["id"]; ?>").innerHTML = "N/A";
                                        } else {
                                            document.getElementById("experience_level<?php echo $row["id"]; ?>").innerHTML = "<?php echo $row["experience_level"]; ?>";
                                        }
                                        var job_city = "<?php echo $row["job_city"]; ?>";
                                        if(job_city == ""){
                                            document.getElementById("job_city<?php echo $row["id"]; ?>").innerHTML = "N/A";
                                        } else {
                                            document.getElementById("job_city<?php echo $row["id"]; ?>").innerHTML = "<?php echo $row["job_city"]; ?>";
                                        }
                                        var salary_income = "<?php echo $row["salary_income"]; ?>";
                                        if(salary_income == ""){
                                            document.getElementById("salary_income<?php echo $row["id"]; ?>").innerHTML = "N/A";
                                        } else {
                                            document.getElementById("salary_income<?php echo $row["id"]; ?>").innerHTML = "<?php echo $row["salary_income"]; ?>";
                                        }
                                    </script>
                                <?php $i++; } } ?>
                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                </div> <!-- /.card -->
            </div>
        </div>
    </div>
</div>
</div>
<!-- Clients Section End -->
<div class="clearfix"></div>



<?php
require("includes/footer.inc.php");
?>