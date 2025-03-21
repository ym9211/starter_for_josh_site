<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@800&display=swap" rel="stylesheet">



<title><?php
if (function_exists('is_tag') && is_tag()) {
    single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
elseif (is_archive()) {
    wp_title(''); echo ' Archive - '; }
elseif (is_search()) {
    echo 'Search for &quot;'.wp_specialchars($s). '&quot; - '; }
elseif (!(is_404()) && (is_single()) || (is_page())) {
    wp_title(''); echo ' - '; }
elseif (is_404()) {
    echo 'Not Found - '; }
if (is_home()) {
    bloginfo('name'); echo ' - '; bloginfo('description'); }
else {
    bloginfo('name'); }
if ($paged>1) {
    echo ' - page '. $paged; }
?>
</title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">

<?php wp_head(); ?>
</head>
<body>
<header class="container-fluid smallpage-bg">   <!-- div for the main image the stretches to the edge of the page- -->
        <div class="container">
        
    <nav class="navbar navbar-expand-md navbar-dark">

        <a class="navbar-brand" href="#"><span class="josh">JOSH</span><span class="orange">WHITKIN</span></a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PROJECTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="container smallpage-tag"><!-- div that holds the content in the middle of the page-->
        <h1 class="smallpage-title"> Josh’s CV</h1>
    </div><!--container-->
    </header>