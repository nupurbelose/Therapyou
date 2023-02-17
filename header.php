    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="header.css">

<!-- for logout -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,
GRAD@20..48,100..700,0..1,-50..200" />
 <!-- header section starts  -->

<header class="header">

    <a href="log.php" class="logo"> <i class="fas fa-heartbeat"></i> TherapYOUtic </a>
    <
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="calendar.php">calendar</a>
        <a href="events.php">Events</a>
        <a href="breath.php">Breath</a>
        <a href="bot.php">chat</a> 

    </nav>

<div class="flex">
    <div id="user-btn" class="fas fa-user"></div>
    
    <div class="user-box">
         <p>username : <span><?php echo $_SESSION['username']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>

      </div>
</div>
<div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->
<script src="script.js"></script>
