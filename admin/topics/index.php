<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Y-UA-Compatible" content="ie-edge">
    <title>Admin Section - Manage Topics</title>

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/3922761f25.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@400;500;700&family=Open+Sans:wght@400;700&family=Roboto:wght@400;900&display=swap" rel="stylesheet">

    <!--Custom Styling-->
    <link rel="stylesheet" href="../../assets/css/style.css">

     <!--Admin Styling-->
     <link rel="stylesheet" href="../../assets/css/admin.css">
</head>
<body>
<?php include(ROOT_PATH . "/app/includes/adminHeader.php");?>


    <!-- Page Wrapper -->
    <div class="admin-wrapper">
        <!-- Left Sidebar -->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php");?>
 
        <!-- // Left Sidebar -->

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>

            <div class="content">
        
                <h2 class="page-title">Manage Topics</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php");?>
                

                <table>
                    <head>
                        <th>SN</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </head>
                    <tbody>
                        <?php foreach($topics as $key =>$topic): ?>
                        <tr>
                            <td><?php echo $key +1 ?></td>
                            <td><?php echo $topic['name']; ?></td>
                            <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">edit</a></td>
                            <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">delete</a></td>
                        </tr>
                        <?php endforeach; ?>
                       
                    </tbody>
                </table>
            </div>
            
            

        </div>
        <!-- // Admin Content -->
  
    </div>
     <!-- // Page Wrapper -->
    
 

     <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
     <!-- CKEditor 5 -->
     <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

    <!-- Custom script -->
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>