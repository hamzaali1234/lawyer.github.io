<?php
$titleTag = '';
$title = "Lawyers Website - My Profile";// for dynamic title on selected page
$currentPage = 'My Profile';// for add dynamic active class on selected page on header
$pageTitle = "My Profile";// for add dynamic text of Page Title Section
$page="my-profile.php";// for add dynamic url text of Page Title Section
require("includes/header.inc.php");
require("includes/connection.inc.php");
?>




<!-- Page Title Section Start -->
<?php
require("includes/includes-sections/page-title-section.inc.php");
?>
<!-- Page Title Section End -->






<?php
    require("includes/connection.inc.php");
    $role="";
    $query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' limit 1");
    while($row=mysqli_fetch_array($query)){
    $role=$row["role"];
    if($role=="Lawyer") {
?>

<!-- Lawyer Profile Section Start -->
<?php
require("includes/includes-sections/lawyer-profile.inc.php");
?>
<!-- Lawyer Profile Section End -->


<?php } if($role=="Client") { ?>


<!-- Client Profile Section Start -->
<?php
require("includes/includes-sections/client-profile.inc.php");
?>
<!-- Client Profile Section End -->



<?php } } ?>




<?php
require("includes/footer.inc.php");
?>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
</script>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#lawyerImagePreview').css('background-image', 'url('+e.target.result +')');
                $('#lawyerImagePreview').hide();
                $('#lawyerImagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#lawyerImagePreview").change(function() {
        readURL(this);
    });
</script>