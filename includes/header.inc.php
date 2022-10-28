<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!--  50:48-->
<head>
<meta charset="UTF-8">
<title><?php if(isset($title, $titleTag)) {echo $title .' '. $titleTag;} else {echo "Lawyers Website";} ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="Lawyers Website">
<meta name="keywords" content="one page, html, template, responsive, business">
<meta name="author" content="abdur rehman">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="icon" type="image/png" href="images/lawyer.png"/>
<!-- Bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Fontawesome css -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Rev Slider css -->
<link rel="stylesheet" href="js/revolution-slider/css/settings.css">

<!-- Magnific-popup css -->
<link rel="stylesheet" href="css/magnific-popup.css">

<!-- Owl Carousel css -->
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/hover.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- START PRE LOADER -->
<div class="preloader">
  <div class="cssload-dots">
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
  </div>
</div>
<!-- END PRE LOADER -->

<!-- Header Start -->
<!-- Start Navigation Section -->
<?php
require("includes-sections/navigation-section.inc.php");
?>
<!-- End Navigation Section -->
<!-- Header End -->