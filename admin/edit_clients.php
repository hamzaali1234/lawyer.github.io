<?php
$currentPage = 'Lawyers';// for add dynamic active class on selected page on header
$pageURL="clients.php";// for add dynamic url text of Navigator Section
$id = $_GET["id"];
require("includes/connection.php");
$role = "Client";
$query=mysqli_query($conn,"select * from user where role='".$role."' and id='".$id."'");
while($row=mysqli_fetch_array($query)){
    $first_name=$row["first_name"];
    $middle_name=$row["middle_name"];
    $last_name=$row["last_name"];
    $lawyer_name=$first_name." ".$middle_name." ".$last_name;
    $image=$row["image"];
    $username=$row["username"];
    $email=$row["email"];
    $password=$row["password"];
    $gender=$row["gender"];
    $cnic=$row["cnic"];
    $mailing_address=$row["mailing_address"];
    $number=$row["number"];
}
$title = "Lawyers Website - Admin | Lawyers | ".$lawyer_name."";// for dynamic title on selected page
require("includes/header.inc.php");
?>
<style>
    #image{
        border:8px solid #db3636;
        border-radius: 100%;
        box-shadow:0px 0px 0px 0px grey;
        transform-style: preserve-3d;
        transform:rotateX(0deg);
        transition:all 0.4s ease;
        margin-left:15px;
        margin-right:15px;
        width:300px;
        height:300px;
    }
    #reflect{
        background:white;
        position:absolute;
        width:100px;
        height:400px;
        z-index:1;
        opacity:0.4;
        transform:skewX(45deg) translateX(450px);
        transition:all 0.4s ease-in-out;
    }

    #image:hover{
        border:2px solid #db3636;
        box-shadow: 0px 1px 0px #db3636,0px 20px 0px #db3636, 0px 40px 20px -8px grey;
        transform:rotateX(45deg);
    }
    .card{
        box-shadow:0px 10px 30px 0px lightgrey;
    }
    #paralaxImg{
        perspective: 1000;
        margin:50px;
    }
    #imgSpan{
        overflow: hidden;
    }
    #imgSpan:hover #reflect{
        transform:skewX(45deg) translateX(-100px);
    }
</style>



<!-- Navigator Section Start -->
<div class="breadcrumbs col-md-12">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1 style="color:#db3636;font-weight:bold;"><?php echo $currentPage; ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="<?php echo $pageURL; ?>"><?php echo $currentPage; ?></a></li>
                            <li class="active"><a href="edit_lawyers.php?id=<?php echo $id; ?>"><?php echo $lawyer_name; ?></a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navigator Section Start -->




<div class="content">
    <div class="animated fadeIn">
        <div class="row">                
            <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body card-block">
                            <div class="text-center" id="paralaxImg">
                                <span class="hvr-bob" id="imgSpan">
                                <div id="reflect"></div>
                                    <img src="../<?php echo $image; ?>" alt="Profile Image of <?php echo $lawyer_name; ?>" title="Profile Image of <?php echo $lawyer_name; ?>" id="image">
                                </span>
                            </div>
                            <form action="" method="post" class="">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Username</div>
                                        <input type="text" id="username" name="username" placeholder="Username" class="form-control" value="<?php echo $username; ?>">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Email Address</div>
                                        <input type="email" id="email" name="email" placeholder="Email Address" class="form-control" value="<?php echo $email; ?>">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Password</div>
                                        <input type="password" id="password" name="password" placeholder="Password" class="form-control" value="<?php echo $password; ?>">
                                        <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">* First Name</div>
                                            <input type="text" id="password" name="first_name" placeholder="First Name" class="form-control" value="<?php echo $first_name; ?>">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">Middle Name</div>
                                            <input type="text" id="middle_name" name="middle_name" placeholder="Middle Name" class="form-control" value="<?php echo $middle_name; ?>">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">Last Name</div>
                                            <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo $last_name; ?>">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-5">
                                        <div class="input-group">
                                            <div class="input-group-addon">Gender</div>
                                            <div class="form-control text-center">
                                                <input type="radio" id="gender" name="gender" value="female">
                                                <label for="female" style="margin-right: 15px;">Female</label>
                                                <input type="radio" id="gender" name="gender" value="male">
                                                <label for="male">Male</label>
                                            </div>
                                            <div class="input-group-addon"><i class="fa fa-venus-mars"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <div class="input-group">
                                            <div class="input-group-addon">DOB</div>
                                            <select name="dob_day" id="" class="form-control">
                                                <option value="">Day</option>
                                            </select>
                                            <select name="dob_month" id="" class="form-control">
                                                <option value="">Month</option>
                                            </select>
                                            <select name="dob_year" id="" class="form-control">
                                                <option value="">Year</option>
                                            </select>
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">CNIC/NICOP/B-form</div>
                                        <input type="text" id="cnic" name="cnic" placeholder="CNIC/NICOP/B-form Here..." class="form-control" value="<?php echo $cnic; ?>">
                                        <div class="form-control text-center">
                                            <input type="radio" id="personalAndParents" name="personalAndParents" value="yes">
                                            <label for="personal" style="margin-right: 15px;">Personal</label>
                                            <input type="radio" id="personalAndParents" name="personalAndParents" value="no">
                                            <label for="parentsAndGuardians">Parents/Guardians</label>
                                        </div>
                                        <div class="input-group-addon"><i class="fa fa-id-card"></i></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">Country</div>
                                            <select name="country" id="" class="form-control">
                                                <option value="">Country</option>
                                            </select>
                                            <div class="input-group-addon"><i class="fa fa-map"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">Nationality</div>
                                            <select name="nationality" id="" class="form-control">
                                                <option value="">Nationality</option>
                                            </select>
                                            <div class="input-group-addon"><i class="fa fa-map"></i></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-addon">City</div>
                                            <select name="city" id="" class="form-control">
                                                <option value="">City</option>
                                            </select>
                                            <div class="input-group-addon"><i class="fa fa-map"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Mailing Address</div>
                                        <textarea class="form-control" placeholder="Mailing Address Here..." name="" id="" cols="30" rows="3"><?php echo $mailing_address; ?></textarea>
                                        <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Contact No</div>
                                        <select name="country_code" id="" class="form-control">
                                            <option value="">Country Code</option>
                                        </select>
                                        <select name="mobile_code" id="" class="form-control">
                                            <option value="">Mobile Code</option>
                                        </select>
                                        <input type="text" id="number" name="number" placeholder="Number Here..." class="form-control" value="<?php echo $number; ?>">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    </div>
                                </div>
                                <div class="form-actions form-group text-center"><button type="submit" class="btn btn-success">Save Changes</button></div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>



<?php
require("includes/footer.inc.php");
?>