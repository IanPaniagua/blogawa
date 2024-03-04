<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");


if (isset($_GET['id'])){
    $post = selectOne('posts', ['id' => $_GET['id']]);
    // dd($post);
}
$topics = selectAll('topics');

$posts = selectAll('posts', ['publisched => 1 ']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Y-UA-Compatible" content="ie-edge">
    <title><?php echo $post['title']; ?> | blogawa</title>

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

<!-- facebook page Plugin JS SDK -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v19.0" nonce="NtxCFf8r"></script>
<!-- //facebook page Plugin JS SDK -->


<?php include(ROOT_PATH . "/app/includes/header.php");  ?>


    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Content Post-->
    

    <div class="content clearfix">
        <!-- Main Content  wrapper-->
     <div class="main-content-wrapper">
        <div class="main-content single">
            <h1 class="post-title clearfix-title"><?php echo $post['title']; ?></h1>
            <div class="post-content clearfix-content">
                <?php echo html_entity_decode($post['body']); ?>
            </div>
        </div>
    </div>
        <!-- // Main Content wrapper-->

        <!-- Main Content Sidebar -->
        <div class="sidebar single">
            <!-- Facebook page -->
            <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=61555739147459" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/profile.php?id=61555739147459" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profile.php?id=61555739147459">InteligenciaArtificial</a></blockquote></div>
            <!-- // Facebook page -->
          
            <div class="section popular">
                <h2 class="section-title">Popular</h2>
                <?php foreach($posts as $p): ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                        <a href="" class="title">
                            <h4><?php echo $p['title']; ?></h4>
                        </a>
                    </div>
                <?php endforeach; ?>
                

            <div class="section topics">
                <h2 class="section-title">Topics</h2>
                <ul>
                <?php foreach($topics as $topic): ?>
                    <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' .$topic['name'];  ?>"><?php echo $topic['name']; ?></a></li>
                    <?php endforeach; ?>
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