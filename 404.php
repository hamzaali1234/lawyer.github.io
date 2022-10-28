<?php
$titleTag = '';
$title = "Lawyers Website - 404";// for dynamic title on selected page
$currentPage = '404';// for add dynamic active class on selected page on header
$pageTitle = "Page Not Found";// for add dynamic text of Page Title Section
$page="404.php";// for add dynamic url text of Page Title Section
require("includes/header.inc.php");
?>


<!-- Page Title Section Start -->
<?php
require("includes/includes-sections/page-title-section.inc.php");
?>
<!-- Page Title Section End -->



<div class="error-page-wrap">
  <div class="container">
    <div class="errormain">
      <h2>404</h2>
      <h3>Page was not Found</h3>
      <div class="error-msg">
        <p>The page you are looking is not available or has been removed. Try going to Home Page by using the button below.</p>
        <a href="index.php" class="btn">Go to Home Page</a> </div>
    </div>
  </div>
</div>


<?php
require("includes/footer.inc.php");
?>