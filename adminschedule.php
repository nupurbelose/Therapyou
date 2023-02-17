<?php
require 'config.php';
$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:log.php');
};

if(isset($_POST['add_event'])){
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'up_img/'.$image;
   $category = $_POST['category'];
   $e_name = mysqli_real_escape_string($conn, $_POST['e_name']);
   $deets = $_POST['deets'];
   $date = $_POST['date'];


   $select_ename = mysqli_query($conn, "SELECT e_name FROM schedule WHERE e_name = '$e_name'") or die('query failed');

   if(mysqli_num_rows($select_ename) > 0){
      $message[] = 'event name already added';
   }else{
      $add_event_query = mysqli_query($conn, "INSERT INTO schedule (image,category, e_name, deets, date) VALUES( '$image','$category', '$e_name','$deets' ,'$date')") or die('query failed');

      if($add_event_query){
         if($image_size > 2000000){
            $message[] = 'image size is too large';
         }else{
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'event added successfully!';
         }
      }else{
         $message[] = 'event could not be added!';
      }
   }
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_image_query = mysqli_query($conn, "SELECT image FROM schedule WHERE id = '$delete_id'") or die('query failed');
   $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
   unlink('up_img/'.$fetch_delete_image['image']);
   mysqli_query($conn, "DELETE FROM schedule WHERE id = '$delete_id'") or die('query failed');
   header('location:adminschedule.php');
}

if(isset($_POST['update_event'])){

   $update_id = $_POST['update_id'];
   $update_image = $_POST['update_image'];
   $update_category = $_POST['update_category'];
   $update_ename = $_POST['update_ename'];
   $update_deets = $_POST['update_deets'];
   $update_date = $_POST['update_date'];


   mysqli_query($conn, "UPDATE schedule SET  date = '$update_date ,  image = '$update_image, e_name = '$update_ename', deets = '$update_deets' , category = '$update_category'  WHERE id = '$update_id'") or die('query failed');

   $update_image = $_FILES['update_image']['name'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_folder = 'up_img/'.$update_image;
   $update_old_image = $_POST['update_old_image'];

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image file size is too large';
      }else{
         mysqli_query($conn, "UPDATE schedule SET image = '$update_image' WHERE id = '$update_id'") or die('query failed');
         move_uploaded_file($update_image_tmp_name, $update_folder);
         unlink('up_img/'.$update_old_image);
      }
   }

   header('location:adminschedule.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="admin.css">

</head>
<body>
<?php    include 'admin.php';?>

<!-- product CRUD section starts  -->

<section class="add-products">

   <h1 class="title">Add Events</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <h3>add Event</h3>
      <input type="file" name="image" accept="image/jpg, image/jpeg, image/png" class="box" required>
      <select id="category" class="box" name="category">
            <option value="AT">Art Therapy</option>
            <option value="HL">Human Library</option>
            <option value="FR">Fund Raisers</option> 
      </select>    
     <input type="text" name="e_name" class="box" placeholder="enter event name" required>
      <input type="text" name="deets" class="box" placeholder="enter event details" required>
      <input type="date" name="date" class="box" placeholder="enter event's date" required>
      <input type="submit" value="add event" name="add_event" class="btn">
   </form>

</section>

<!-- product CRUD section ends -->

<!-- show events  -->

<section class="show-products">

   <div class="box-container">

      <?php
         $select_events = mysqli_query($conn, "SELECT * FROM schedule") or die('query failed');
         if(mysqli_num_rows($select_events) > 0){
            while($fetch_events = mysqli_fetch_assoc($select_events)){
      ?>
      <div class="box">
      <img src="up_img/<?php echo $fetch_events['image']; ?>" alt="">   
      <div class="category"><?php echo $fetch_events['category']; ?></div>   
      <div class="name"><?php echo $fetch_events['e_name']; ?></div>
      <div class="name"><?php echo $fetch_events['deets']; ?></div>
      <div class="date"><?php echo $fetch_events['date']; ?></div>

      <a href="adminschedule.php?update=<?php echo $fetch_events['id']; ?>" class="option-btn">update</a>
      <a href="adminschedule.php?delete=<?php echo $fetch_events['id']; ?>" class="delete-btn" onclick="return confirm('delete this product?');">delete</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no events added yet!</p>';
      }
      ?>
   </div>

</section>

<section class="edit-product-form">

   <?php
      if(isset($_GET['update'])){
         $update_id = $_GET['update'];
         $update_query = mysqli_query($conn, "SELECT * FROM schedule WHERE id = '$update_id'") or die('query failed');
         if(mysqli_num_rows($update_query) > 0){
            while($fetch_update = mysqli_fetch_assoc($update_query)){
   ?>
   <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="update_id" value="<?php echo $fetch_update['id']; ?>">
      <input type="hidden" name="update_old_image" value="<?php echo $fetch_update['image']; ?>">
      <img src="up_img/<?php echo $fetch_update['image']; ?>" alt="">
      <select id="category" class="box" name="update_category" value="<?php echo $fetch_update['category']; ?>">
            <option value="Art Therapy">Art Therapy</option>
            <option value="Human Library">Human Library</option>
            <option value="Fund Raisers">Fund Raisers</option> 
      </select>  
      <input type="text" name="update_ename" value="<?php echo $fetch_update['e_name']; ?>" class="box" required placeholder="enter Event name">
      <input type="text" name="update_deets" value="<?php echo $fetch_update['deets']; ?>" min="0" class="box" required placeholder="enter Event Deets">
      <input type="date" name="update_date" value="<?php echo $fetch_update['date']; ?>" min="0" class="box" required placeholder="enter Event Time">
      <input type="file" class="box" name="update_image" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" value="update" name="update_event" class="btn">
      <input type="reset" value="cancel" id="close-update" class="option-btn">
   </form>
   <?php
         }
      }
      }else{
         echo '<script>document.querySelector(".edit-product-form").style.display = "none";</script>';
      }
   ?>

</section>







<!-- custom admin js file link  -->
<!-- <script src="js/admin_script.js"></script> -->

</body>
</html>