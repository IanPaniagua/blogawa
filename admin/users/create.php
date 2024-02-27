<?php include("../../path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Y-UA-Compatible" content="ie-edge">
    <title>Admin Section - Add User</title>

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
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>

            <div class="content">

                <h2 class="page-title">Add User</h2>

                <form action="create.php" method="post">
                    <div>
                        <label for="">Username</label>
                        <input type="text" name="username" class="text-input">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="email" name="email" class="text-input">
                    </div>
                    <div>
                        <label for="">Passwort</label>
                        <input type="passwort" name="passwort" class="text-input">
                    </div>
                    <div>
                        <label for="">Passwort Confirmation</label>
                        <input type="passwort" name="passwortConf" class="text-input">
                    </div>
                    <div>
                        <label for="">Role</label>
                        <select name="role" class="text-input">
                            <option value="Author">Author</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" name="add-user" class="btn btn-big">Add User</button>
                    </div>
                </form>
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