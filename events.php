<!DOCTYPE html>
<html lang="en">

<head><?php
 require 'config.php';
 $id = $_SESSION['id'];
 
if (isset($_POST["bookbtn"])) {
  $Name = $_POST["Name"];
    $email = $_POST["email"];
    $event = $_POST["event"];
    $e_number = $_POST["e_number"];
    $date = $_POST["date"];

    if($Email = $email)
        {
        $query = "INSERT INTO ticket VALUES('','$Name','$email','$event','$e_number','$date')";
        mysqli_query($conn, $query);

        "<script> alert('Your Seat is Booked, see you there.'); </script>";
        }
      header("location: events.php");
}

// if(isset($_POST['book'])){

//   $image = $_POST['image'];
//   $category = $_POST['category'];
//   $e_name = $_POST['e_name'];
//   $deets = $_POST['deets'];
//   $date = $_POST['date'];


//      mysqli_query($conn, "INSERT INTO schedule (id, time, image, e_name, deets) VALUES('', '$time', '$image', 'e_name', 'deets')") or die('query failed');
//      $message[] = 'event added !';
//   }

?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TherapYOUtic</title>
    <link rel="icon" type="images/x-icon" href="img/logo.png" />
      
    <!-- Favicons-->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> 
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="events.css">
</head>
<body>
    
<?php include 'header.php'; ?>

    <!-- Intro Section -->
    <section id="intro">
      <div class="intro-container wow fadeIn">
        <h3 class="mb-4 pb-0">Event:<br><span>Art Therapy</span></h3>
        <p class="mb-4 pb-0"> Every Sat and Sun at Art Heals- Therapyoutic, Bandra(w)</p>
        <a href="https://youtu.be/4BZynyGzyow" class="venobox play-btn mb-4" data-vbtype="video"
          data-autoplay="true"></a>
          <a href="#about"  class="about-btn scrollto" >About The Event</a>
      </div>
    </section>
  
    <main id="main">
        <!-- About Section -->
 
        <section id="about">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h2>About The Event</h2>
                <p>Art therapy is a technique that hepls in creative expression that can foster healing and mental well-being. </p>
              </div>
              <div class="col-lg-3">
                <h3>Where</h3>
                <p>Art Heals- Therapyoutic, Bandra(w)</p>
              </div>
              <div class="col-lg-3">
                <h3>When</h3>
                <p> Every Saturday and Sunday from 9:00 to 11:00 am & 8:00 to 10:00 pm</p>
              </div>
            </div>
          </div>
        </section>
    
        <!-- Schedule Section -->

    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>

        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Art Threapy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Human Library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Fund Raisers</a>
          </li>
        </ul>



        <div class="tab-content row justify-content-center">
        <?php  
         $select_events = mysqli_query($conn, "SELECT * FROM schedule") or die('query failed');
         if(mysqli_num_rows($select_events) > 0){
            while($fetch_events = mysqli_fetch_assoc($select_events)){
      ?>
          <form action="" method="post" >
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">

              <div class="col-md-10">
                <img class="speaker" src="up_img/<?php echo $fetch_events['image']; ?>" alt="">      
                <input type="hidden" name="image" value="<?php echo $fetch_events['image']; ?>">
                
                <div class="col-md-2"><?php echo $fetch_events['category']; ?></div>
               <input type="hidden" name="category" value="<?php echo $fetch_events['category']; ?>">

               <div class="col-md-2"><?php echo $fetch_events['e_name']; ?></div>
               <input type="hidden" name="e_name" value="<?php echo $fetch_events['e_name']; ?>">

               <div class="col-md-2"><?php echo $fetch_events['deets']; ?></div>  
               <input type="hidden" name="deets" value="<?php echo $fetch_events['deets']; ?>">

               <div class="col-md-2"><?php echo $fetch_events['date']; ?>
              <input type="hidden" name="date" value="<?php echo $fetch_events['date']; ?>"></div>
              </div>

            </div>
           <div class="text-center">
          <button type="button" class="btn2" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access" name ="view">view</button>
           </div>
            </form>
           
<!-- 
           Human Library 
          <form action="" method="post" >
          <div role="tabpanel" class="col-lg-9 tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><?php echo $fetch_events['time']; ?>
              <input type="hidden" name="e_time" value="<?php echo $fetch_events['time']; ?>"></div>

              <div class="col-md-10">
                <img class="speaker" src="uploaded_img/<?php echo $fetch_events['image']; ?>" alt="">      
                <input type="hidden" name="image" value="<?php echo $fetch_products['image']; ?>">

               <h4> <div class=""><?php echo $fetch_products['e_name']; ?></div></h4>
               <input type="hidden" name="e_name" value="<?php echo $fetch_products['e_name']; ?>">

               <p><div class=""><?php echo $fetch_products['deets']; ?></div></p>      
               <input type="hidden" name="deets" value="<?php echo $fetch_products['deets']; ?>">

              </div>

            </div>
           <div class="text-center">
          <button type="button" class="btn2" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access" name ="book">Book</button>
           </div>
            </form>
         

           Fund raisers
          <form action="" method="post" >
          <div role="tabpanel" class="col-lg-9 tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><?php echo $fetch_events['time']; ?>
              <input type="hidden" name="e_time" value="<?php echo $fetch_events['time']; ?>"></div>

              <div class="col-md-10">
                <img class="speaker" src="uploaded_img/<?php echo $fetch_events['image']; ?>" alt="">      
                <input type="hidden" name="image" value="<?php echo $fetch_products['image']; ?>">

               <h4> <div class=""><?php echo $fetch_products['e_name']; ?></div></h4>
               <input type="hidden" name="e_name" value="<?php echo $fetch_products['e_name']; ?>">

               <p><div class=""><?php echo $fetch_products['deets']; ?></div></p>      
               <input type="hidden" name="deets" value="<?php echo $fetch_products['deets']; ?>">

              </div>

            </div>
           <div class="text-center">
          <button type="button" class="btn2" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access" name ="view">view</button>
           </div>
            </form>  -->
           
        <?php
         }
      }else{
         echo '<p class="empty">no events are scheduled!</p>';
      }
      ?>
    </div>

  </section>


        <!-- Your Tickets session -->
                    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
                      <div class="container">
                
                        <div class="tickets">
                          <h2>your Tickets</h2>
                        
                        </div>
                
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="card mb-5 mb-lg-0">
                              <div class="card-body">
                                <hr>
                                <?php
         $ticket_query = mysqli_query($conn, "SELECT * FROM ticket WHERE id = '$id'") or die('query failed');
         if(mysqli_num_rows($ticket_query) > 0){
            while($fetch_ticket = mysqli_fetch_assoc($ticket_query)){
      ?>
         <p> name : <span><?php echo $fetch_ticket['Name']; ?></span> </p>
         <p> email : <span><?php echo $fetch_ticket['email']; ?></span> </p>
         <p> event : <span><?php echo $fetch_ticket['event']; ?></span> </p>
         <p> e_number : <span><?php echo $fetch_ticket['e_number']; ?></span> </p>
         <p> placed on : <span><?php echo $fetch_ticket['date']; ?></span> </p>


         </div>
      <?php
       }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>
                            </div>
                          </div>
                        </div>
                
                      </div>
                    </section>
                    
                      <!-- Modal Order Form -->
                      <div id="buy-ticket-modal" class="modal fade">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Book Tickets</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="POST" action="#">
                                <div class="form-group">
                                  <input type="text" class="form-control" name="Name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" name="email" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                  <select id="ticket-type" name="event" class="form-control" >
                                    <option value="">Select Your Event</option>
                                    <option value="Art Threapy">Art Threapy</option>
                                    <option value="Human Library">Human Library</option>
                                    <option value="Fund Raisers">Fund Raisers</option>
                                  </select><br>
                                  <select id="ticket-type" name="e_number" class="form-control" >
                                    <option value="">Select Your Event Number </option>
                                    <option value="E1">E1</option>
                                    <option value="E2">E2</option>
                                    <option value="E3">E3</option>
                                    <option value="E4">E4</option>
                                  </select>
                                  <div class="form-group">
                                  <input type="date" class="form-control" name="date" placeholder="Date">
                                </div>

                                </div>
                                <div class="text-center">
                                  <button type="submit" class="btn" name="bookbtn">Book Now</button>
                                </div>
                              </form>
                            </div>
                          </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                      </div><!-- /.modal -->
                
                    </section>
                

          <!-- reviews Section -->

          <section id="hotels" class="section-with-bg wow fadeInUp">
      
            <div class="container">
              <div class="section-header">
                <h2>Reviews</h2>
                <p>Chcek these reviews by the Community</p>
              </div>
      
              <div class="row">
      
                <div class="col-lg-4 col-md-6">
                  <div class="hotel">
                    <div class="img/hotel-img">
                      <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
                    </div>
                    <h3><a href="#">review 1</a></h3>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>i really liked the event</p>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6">
                  <div class="hotel">
                    <div class="hotel-img">
                      <img src="img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
                    </div>
                    <h3><a href="#">review2</a></h3>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-full"></i>
                    </div>
                    <p>i really liked the event</p>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6">
                  <div class="hotel">
                    <div class="hotel-img">
                      <img src="img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">
                    </div>
                    <h3><a href="#">review 3</a></h3>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>i really liked the event</p>
                  </div>
                </div>
      
              </div>
            </div>
      
          </section>
      
          <!--==========================
            Gallery Section
          ============================-->
          <!-- <section id="gallery" class="wow fadeInUp">
      
            <div class="container">
              <div class="section-header">
                <h2>Gallery</h2>
                <p>Check our gallery from the recent events</p>
              </div>
            </div>
      
            <div class="owl-carousel gallery-carousel">
              <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
              <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
              <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
              <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
              <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
              <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
              <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
              <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
            </div>
      
          </section> -->


    <div class="credit"> created by <span>Nupur & Sherin</span> </div>

</section>
    <!-- custom js file link  -->
<script src="events.js"></script>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/venobox/venobox.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js">
  </script>
  <!-- <script>
    let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
  </script> -->
</body>
</html>


