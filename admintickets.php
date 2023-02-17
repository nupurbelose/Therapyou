<?php

require "config.php";
$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:log.php');
}


if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM ticket WHERE id = '$delete_id'") or die('query failed');
   header('location:admintickets.php');
}
 include 'admin.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="admin.css">

</head>
<body>
   

<section class="orders">

   <h1 class="title">Tickets</h1>

   <div class="box-container">
      <?php
      $select_ticket = mysqli_query($conn, "SELECT * FROM ticket") or die('query failed');
      if(mysqli_num_rows($select_ticket) > 0){
         while($fetch_ticket = mysqli_fetch_assoc($select_ticket)){
      ?>
      <div class="box">
      <p> user id : <span><?php echo $fetch_ticket['id']; ?></span> </p>
      <p> name : <span><?php echo $fetch_ticket['Name']; ?></span> </p>
         <p> email : <span><?php echo $fetch_ticket['email']; ?></span> </p>
         <p> event : <span><?php echo $fetch_ticket['event']; ?></span> </p>
         <p> e_number : <span><?php echo $fetch_ticket['e_number']; ?></span> </p>
         <p> placed on : <span><?php echo $fetch_ticket['date']; ?></span> </p>

         <form action="" method="post">
            <input type="hidden" name="event_id" value="<?php echo $fetch_ticket['id']; ?>">

            <a href="admintickets.php?delete=<?php echo $fetch_ticket['id']; ?>" onclick="return confirm('delete this order?');" class="delete-btn">delete</a>
         </form>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no tickets placed yet!</p>';
      }
      ?>
   </div>

</section>










<!-- custom admin js file link  -->
<!-- <script src="js/admin_script.js"></script> -->

</body>
</html>