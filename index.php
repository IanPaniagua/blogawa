<?php
 include("path.php");
 include(ROOT_PATH . "/app/database/db.php" );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Y-UA-Compatible" content="ie-edge">
    <title>Blog_Family</title>

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/3922761f25.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@400;500;700&family=Open+Sans:wght@400;700&family=Roboto:wght@400;900&display=swap" rel="stylesheet">

    <!--Custom Styling-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
  <?php include(ROOT_PATH . "/app/includes/header.php");?>
  <?php include(ROOT_PATH . "/app/includes/messages.php");?>
    
        
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Post Slider(carousel) -->
        <div class="post-slider">
        <h1 class="slider-title">Trending Posts</h1>
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>
            <!-- Single post -->
        <div class="post-wrapper">   
            <div class="post">
                <img src="assets/images/father-and-son-2258681_1280.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="single.html">The history about a fahter and his son</a></h4>
                    <i class="far fa-user">Ian Paniagua</i>
                    &nbsp;
                    <i class="far fa-calendar">Friday 26, 2024</i>
                </div>
            </div>
            <div class="post">
                <img src="assets/images/father-and-son-2258681_1280.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="single.html">The history about a fahter and his son</a></h4>
                    <i class="far fa-user">Ian Paniagua</i>
                    &nbsp;
                    <i class="far fa-calendar">Friday 26, 2024</i>
                </div>
            </div><div class="post">
                <img src="assets/images/father-and-son-2258681_1280.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="single.html">The history about a fahter and his son</a></h4>
                    <i class="far fa-user">Ian Paniagua</i>
                    &nbsp;
                    <i class="far fa-calendar">Friday 26, 2024</i>
                </div>
            </div><div class="post">
                <img src="assets/images/father-and-son-2258681_1280.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="single.html">The history about a fahter and his son</a></h4>
                    <i class="far fa-user">Ian Paniagua</i>
                    &nbsp;
                    <i class="far fa-calendar">Friday 26, 2024</i>
                </div>
            </div><div class="post">
                <img src="assets/images/father-and-son-2258681_1280.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="single.html">The history about a fahter and his son</a></h4>
                    <i class="far fa-user">Ian Paniagua</i>
                    &nbsp;
                    <i class="far fa-calendar">Friday 26, 2024</i>
                </div>
            </div><div class="post">
                <img src="assets/images/father-and-son-2258681_1280.jpg" alt="" class="slider-image">
                <div class="post-info">
                    <h4><a href="single.html">The history about a fahter and his son</a></h4>
                    <i class="far fa-user">Ian Paniagua</i>
                    &nbsp;
                    <i class="far fa-calendar">Friday 26, 2024</i>
                </div>
            </div>
            

        </div>
        </div>
        <!-- // Post Slider(carousel) -->

        <!-- Content Post-->
    <div class="content clearfix">
        <!-- Main Content Post-->
        <div class="main-content">
            <h2 class="recent-post-title">Recent Posts</h2>
        
            <div class="post clearfix">
                <img src="assets/images/father-and-son-2258681_1280.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h1><a href="single.html">Title of the post</a></h1>
                <i class="far fa-user">Ian Paniagua</i>
                &nbsp;
                <i class="far calendar">Saturday 27, 2024</i>
                <p class="preview-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, recusandae nihil! Illo iure est eos.
                </p>
                <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>
            <div class="post clearfix">
                <img src="assets/images/father-and-son-2258681_1280.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h1><a href="single.html">Title of the post</a></h1>
                <i class="far fa-user">Ian Paniagua</i>
                &nbsp;
                <i class="far calendar">Saturday 27, 2024</i>
                <p class="preview-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, recusandae nihil! Illo iure est eos.
                </p>
                <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>
            <div class="post clearfix">
                <img src="assets/images/father-and-son-2258681_1280.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h1><a href="single.html">Title of the post</a></h1>
                <i class="far fa-user">Ian Paniagua</i>
                &nbsp;
                <i class="far calendar">Saturday 27, 2024</i>
                <p class="preview-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, recusandae nihil! Illo iure est eos.
                </p>
                <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>
            <div class="post clearfix">
                <img src="assets/images/father-and-son-2258681_1280.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h1><a href="single.html">Title of the post</a></h1>
                <i class="far fa-user">Ian Paniagua</i>
                &nbsp;
                <i class="far calendar">Saturday 27, 2024</i>
                <p class="preview-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, recusandae nihil! Illo iure est eos.
                </p>
                <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>
            <div class="post clearfix">
                <img src="assets/images/father-and-son-2258681_1280.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h1><a href="single.html">Title of the post</a></h1>
                <i class="far fa-user">Ian Paniagua</i>
                &nbsp;
                <i class="far calendar">Saturday 27, 2024</i>
                <p class="preview-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, recusandae nihil! Illo iure est eos.
                </p>
                <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>
        </div>
        <!-- // Main Content Post-->

        <!-- Main Content Sidebar -->
        <div class="sidebar">
            <div class="section search">
                <h2 class="section-title">Search</h2>
                <form action="index.html" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </form>
            </div>

            <div class="section topics">
                <h2 class="section-title">Topics</h2>
                <ul>
                    <li><a href="#">Poems</a></li>
                    <li><a href="#">Quotes</a></li>
                    <li><a href="#">Fiction</a></li>
                    <li><a href="#">Biography</a></li>
                    <li><a href="#">Motivation</a></li>
                    <li><a href="#">Inspiration</a></li>
                    <li><a href="#">Life Lesson</a></li>
                </ul>
            </div>
        </div>
        <!-- // Main Content Sidebar -->
    </div>  
        <!-- // Content Post-->
    </div>
     <!-- // Page Wrapper -->
     
     <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
 

     <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    
    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   
    <!-- Custom script -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>