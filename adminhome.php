<?php

require "config.php";
$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:log.php');
}
include 'admin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TherapYOUtic</title>
    <link rel="icon" type="images/x-icon" href="img/logo.png" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="admin.css">

</head>
<body>
   

<!-- admin dashboard section starts  -->

<section class="dashboard">

   <h1 class="title">Dashboard</h1>

   <div class="box-container">


      <div class="box">
         <?php 
            $select_events = mysqli_query($conn, "SELECT * FROM ticket") or die('query failed');
            $number_of_events = mysqli_num_rows($select_events);
         ?>
         <h3><?php echo $number_of_events; ?></h3>
         <p>Tickets Booked</p>
      </div>

      <div class="box">
         <?php 
            $select_events = mysqli_query($conn, "SELECT * FROM schedule") or die('query failed');
            $number_of_events = mysqli_num_rows($select_events);
         ?>
         <h3><?php echo $number_of_events; ?></h3>
         <p>Events added</p>
      </div>

      <div class="box">
         <?php 
            $select_users = mysqli_query($conn, "SELECT * FROM signup WHERE user_type = 'user'") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         <p>users</p>
      </div>

      <div class="box">
         <?php 
            $select_admins = mysqli_query($conn, "SELECT * FROM signup WHERE user_type = 'admin'") or die('query failed');
            $number_of_admins = mysqli_num_rows($select_admins);
         ?>
         <h3><?php echo $number_of_admins; ?></h3>
         <p>admins</p>
      </div>

      <div class="box">
         <?php 
            $select_messages = mysqli_query($conn, "SELECT * FROM contactus") or die('query failed');
            $number_of_messages = mysqli_num_rows($select_messages);
         ?>
         <h3><?php echo $number_of_messages; ?></h3>
         <p>new messages</p>
      </div>
      
      <div class="box">
         <?php 
            $select_messages = mysqli_query($conn, "SELECT * FROM ap_users") or die('query failed');
            $number_of_messages = mysqli_num_rows($select_messages);
         ?>
         <h3><?php echo $number_of_messages; ?></h3>
         <p>Appointments</p>
      </div>

   </div>

</section>

<!-- admin dashboard section ends -->









<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>