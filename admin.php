<link rel="stylesheet" href="admin.css">


     <!-- header section starts  -->

<header class="header">
<div class="flex">

<a href="adminhome.php" class="logo"> <i class="fas fa-heartbeat"></i> Admin </a>

<nav class="navbar">
    <a href="adminhome.php">Home</a>
    <a href="adminusers.php">Users</a>
    <a href="admintickets.php">Tickets</a>
    <a href="adminschedule.php">Schedule</a>
    <a href="admincontact.php">Messages</a> 
    <a href="adminappoint.php">Appointments</a> 


</nav>

<div id="menu-btn" class="fas fa-bars"></div>




      <div class="icons">
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>

      </div>

   </div>

</header>
<!-- header section ends -->
<script>
let menu = document.querySelector('#menu-btn');
let accountBox = document.querySelector('.header .account-box');

document.querySelector('#menu-btn').onclick = () =>{
   accountBox.classList.remove('active');
}
document.querySelector('#user-btn').onclick = () =>{
   accountBox.classList.toggle('active');
}

window.onscroll = () =>{
   accountBox.classList.remove('active');
}

document.querySelector('#close-update').onclick = () =>{
   document.querySelector('.edit-product-form').style.display = 'none';
   window.location.href = 'adminschedule.php';
}
</script>