<?php
$title = "Lawyers Website - Admin | Messages";// for dynamic title on selected page
$currentPage = 'Messages';// for add dynamic active class on selected page on header
$pageURL="messages.php";// for add dynamic url text of Navigator Section
require("includes/connection.php");
if(isset($_GET['type']) && $_GET['type']!=''){
    $type=$_GET['type'];
    $id=$_GET['id'];	
	if($type=='delete'){
		$delete_sql="delete from contact_us where id='".$id."'";
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





<!-- Messages Section Start -->
<div style="width:1060px;padding-right:0px;">
<div class="content pb-0" style="box-sizing: border-box;">
    <div class="orders">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">All Messages </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table" id="table" style="overflow-x:scroll !important;">
                            <table class="table table-hover table-bordered" style="width:200% !important;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Message ID</th>
                                        <th style="width:180px !important;">Name</th>
                                        <th>Email</th>
                                        <th style="width:180px !important;">Contact No</th>
                                        <th>Address</th>
                                        <th>Message</th>
                                        <th style="width:180px !important;text-align:center;">Message On Date</th>
                                        <th style="width:100px !important;text-align:center;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql = "select * from contact_us";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        $i = 1;
                                        while ($row = $result->fetch_assoc()) {
                                            $timestamp = strtotime($row['on_date']);
                                            $date = date('F j, Y, g:ia',$timestamp);
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?>.</td>
                                        <td>#<?php echo $row["id"]; ?></td>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><a href="mailto:<?php echo $row["email"]; ?>" style="color:#db3636;text-transform:none;"><?php echo $row["email"]; ?></a></td>
                                        <td><a href="tel:<?php echo $row["contact_number"]; ?>" style="color:#db3636;"><?php echo $row["contact_number"]; ?></a></td>
                                        <td><?php echo $row["address"]; ?></td>
                                        <td><?php echo $row["message"]; ?></td>
                                        <td style="text-align:center;"><?php echo $date; ?></td>
                                        <td style="text-align:center;">
                                            <?php
                                                echo "<a class='badge badge-danger' href='?type=delete&id=".$row['id']."'>Delete</a>&nbsp;";    
                                            ?>
                                        </td>
                                    </tr>
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
<!-- Messages Section End -->

<div class="clearfix"></div>



<?php
require("includes/footer.inc.php");
?>