<?php
 
 include(ROOT_PATH . "/app/database/db.php" );
 include(ROOT_PATH . "/app/helpers/validatePost.php" );

$table = 'posts';

$topics = selectAll('topics');
$posts = selectAll($table);

$errors = array();
$id = '';
$title = '';
$body = '';
$topic_id = '';
$image = '';
$published = '';
if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $post = selectOne($table, ['id' => $id]);
   $id = $post['id'];
   $title = $post['title'];
   $body = $post['body'];
   $topic_id = $post['topic_id'];
   $published = $post['published'];
   // dd($post);
}

 if (isset($_POST['add-post'])) {
   // dd($_FILES['image']);
   $errors = validatePost($_POST);

   if (!empty($_FILES['image']['name'])) {
      $image_name = time(). '_'. $_FILES['image']['name'];
      $destination = ROOT_PATH . "/assets/images/" . $image_name;

      $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

      if($result){
         $_POST['image'] = $image_name;
      }else {
         array_push($errors, "Failed to upload image");
      }
   }else {
      array_push($errors, "Post image required");
   }

   if(count($errors)==0) {
      unset($_POST['add-post']);
      $_POST['user_id'] = 1;
      $_POST['published'] = isset($_POST['published']) ? 1 : 0;
      $_POST['body'] = htmlentities($_POST['body']);

      $post_id = create($table, $_POST);
      header('location: '.BASE_URL. '/admin/posts/index.php');
      $_SESSION['message'] = 'Post created successfully';
      $_SESSION['type'] = 'success';
      
   }else {
      $title = $_POST['title'];
      $body = $_POST['body'];
      $topic_id = $_POST['topic_id'];
      $published =isset($_POST['published']) ? 1 : 0;
   }
}
  
if (isset($_POST['update-post'])) {
   $errors = validatePost($_POST);
   if (!empty($_FILES['image']['name'])) {
      $image_name = time(). '_'. $_FILES['image']['name'];
      $destination = ROOT_PATH . "/assets/images/" . $image_name;

      $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

      if($result){
         $_POST['image'] = $image_name;
      }else {
         array_push($errors, "Failed to upload image");
      }
   }else {
      array_push($errors, "Post image required");
   }
   if(count($errors)==0) {
      $id = $_POST['id'];
      unset($_POST['update-post'],  $_POST['id']);
      $_POST['user_id'] = 1;
      $_POST['published'] = isset($_POST['published']) ? 1 : 0;
      $_POST['body'] = htmlentities($_POST['body']);

      $post_id = update($table, $id, $_POST);
      header('location: '.BASE_URL. '/admin/posts/index.php');
      $_SESSION['message'] = 'Post updated successfully';
      $_SESSION['type'] = 'success';
      
   }else {
      $title = $_POST['title'];
      $body = $_POST['body'];
      $topic_id = $_POST['topic_id'];
      $published =isset($_POST['published']) ? 1 : 0;
   }
}