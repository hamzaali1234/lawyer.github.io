<?php
$title = "Lawyers Website - Admin | Appoinments";// for dynamic title on selected page
$currentPage = 'Appoinments';// for add dynamic active class on selected page on header
$pageURL="appoinments.php";// for add dynamic url text of Navigator Section
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
    alert("Appointment has been Activated!!!");
</script>
<?php
		}else{
            $status='0';
?>
<script type="text/javascript">
    alert("Appointment has been Deactivated!!!");
</script>
<?php
		}
		$update_status_sql="update appoinment set appointment_status='".$status."' where appointment_id='".$id."'";
        mysqli_query($conn,$update_status_sql);
	}
	
	if($type=='delete'){
		$delete_sql="delete from appoinment where appointment_id='".$id."'";
        mysqli_query($conn,$delete_sql);
?>
<script type="text/javascript">
    alert("Lawyer has been Delete!!!");
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




<!-- Appointments Section Start -->
<div style="width:1060px;padding-right:0px;">
<div class="content pb-0" style="box-sizing: border-box;">
    <div class="orders">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">All Lawyers Appoinments </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table" id="table" style="overflow-x:scroll !important;">
                            <table class="table table-hover table-bordered" style="width:200% !important;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Lawyer Image</th>
                                        <th>Appoinment ID</th>
                                        <th style="width:180px !important;">Lawyer Name</th>
                                        <th style="width:180px !important;">Lawyer Contact No</th>
                                        <th>Lawyer Service</th>
                                        <th>Lawyer Location</th>
                                        <th style="width:180px !important;">Client Name</th>
                                        <th style="width:180px !important;">Client Contact No</th>
                                        <th>Appoinment Start Time</th>
                                        <th>Appoinment End Time</th>
                                        <th>Appoinment Date</th>
                                        <th style="width:180px !important;text-align:center;">Appoinment Created On</th>
                                        <th style="width:300px !important;text-align:center;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql = "select * from user inner join appoinment on user.id=appoinment.lawyer_id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        $i = 1;
                                        while ($row = $result->fetch_assoc()) {
                                            $timestamp = strtotime($row['appoinment_created_on']);
                                            $date = date('F j, Y, g:ia',$timestamp);
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?>.</td>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img id="image<?php echo $row["appointment_id"]; ?>" class="rounded-circle" src="" alt=""></a>
                                            </div>
                                        </td>
                                        <td>#<?php echo $row["appointment_id"]; ?></td>
                                        <td><?php echo $row["lawyer_name"]; ?></td>
                                        <td><a href="tel:<?php echo $row["lawyer_contact_number"]; ?>" style="color:#db3636;"><?php echo $row["lawyer_contact_number"]; ?></a></td>
                                        <td><?php echo $row["lawyer_service"]; ?></td>
                                        <td><?php echo $row["lawyer_location"]; ?></td>
                                        <td><?php echo $row["client_name"]; ?></td>
                                        <td><a href="tel:<?php echo $row["client_contact_number"]; ?>" style="color:#db3636;"><?php echo $row["client_contact_number"]; ?></a></td>
                                        <td><?php echo $row["start_time"]; ?></td>
                                        <td><?php echo $row["end_time"]; ?></td>
                                        <td><?php echo $row["appoinment_date"]; ?></td>
                                        <td style="text-align:center;"><?php echo $date; ?></td>
                                        <td style="text-align:center;">
                                            <?php
                                                echo "<a class='badge badge-danger' href='?type=delete&id=".$row['appointment_id']."'>Delete</a>&nbsp;";
                                                if($row["appointment_status"]=="1"){
                                                    echo "<a class='badge badge-pending' href='?type=status&operation=deactive&id=".$row['appointment_id']."'>Deactivate</a>";
                                                }else{
                                                    echo "<a class='badge badge-complete' href='?type=status&operation=active&id=".$row['appointment_id']."'>Activate</a>";
                                                }    
                                            ?>
                                        </td>
                                    </tr>
                                    <script type="text/javascript">
                                        var image = "<?php echo $row["image"]; ?>";
                                        if(image == ""){
                                            document.getElementById("image<?php echo $row["appointment_id"]; ?>").src = "../images/message-image.png";
                                        } else {
                                            document.getElementById("image<?php echo $row["appointment_id"]; ?>").src = "../<?php echo $row["image"]; ?>";
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
<!-- Appointments Section End -->

<div class="clearfix"></div>





<?php
require("includes/footer.inc.php");
?>