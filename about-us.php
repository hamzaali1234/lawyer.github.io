<?php
$titleTag = '';
$title = "Lawyers Website - About Us";// for dynamic title on selected page
$currentPage = 'About Us';// for add dynamic active class on selected page on header
$pageTitle = "About Us";// for add dynamic text of Page Title Section
$page="about-us.php";// for add dynamic url text of Page Title Section
require("includes/header.inc.php");
?>


<!-- Page Title Section Start -->
<?php
require("includes/includes-sections/page-title-section.inc.php");
?>
<!-- Page Title Section End -->


<div class="innerpgWraper">
  <div class="container">
    <div class="about-desc">
      <div class="row">
        <div class="col-md-7">
        <h3>Our Work</h3>
          <p style="text-align:justify;">The Lawyers Attorney has been meeting challenges and satisfying the most demanding of expectations for the past 50 years, with demonstrably advantageous results for our distinguished portfolio of international clients and associates.  It is no wonder that we have managed to carve out a niche for ourselves in the international legal services market and are amongst the leading law firms in Pakistan.</p>
          <br>
          <h3>Our Philosophy</h3>
          <p style="text-align:justify;">Achieve your goals with our easy-to-follow advice. Find business-friendly solutions to intricate commercial problems. Engage the finest in conflict resolution in and out-of-court. All whilst complying with international best practices and enjoying cost-effectiveness and efficiency.</p>
        </div>
        <div class="col-md-5">
          <div class="postimg sambox3" data-tilt data-tilt-glare data-tilt-max-glare="0.3"><img src="images/logo-color.jpeg" class="hvr-bob"></div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Team Section Start -->
<?php
require("includes/includes-sections/team-section.inc.php");
?>
<!-- Team Section End -->


<?php
require("includes/footer.inc.php");
?>