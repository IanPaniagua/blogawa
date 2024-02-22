<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Y-UA-Compatible" content="ie-edge">
    <title>Registrer</title>

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
<?php include(ROOT_PATH . "/app/includes/header.php");  ?>




<!-- authorization content -->
    <div class="auth-content">
  

        <form action="register.php" method="post">
            <h2 class="form-title">Registrer</h2>
        <!-- error messages -->
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php");  ?>

            <div>
                <label for="">Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
            </div>
            <div>
                <label for="">password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
            </div>
            <div>
                <label for="">Password Confirmation</label>
                <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>"  class="text-input">
            </div>
            <div>
                <button type="submit" name="register-btn" class="btn btn-gib">Register</button>
            </div>
            <p>Or <a href="<?php echo BASE_URL . "/login.php" ?>">Sign In</a></p>

        </form>
    </div>
<!-- // authorization content --> 

     <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Custom script -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>