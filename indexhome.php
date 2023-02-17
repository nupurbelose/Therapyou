<?php
 require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM signup WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style2.css">

<!-- for logout -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,
GRAD@20..48,100..700,0..1,-50..200" />
<!-- css -->

    

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="log.php" class="logo"> <i class="fas fa-heartbeat"></i> TherapYOUtic </a>
    
    <nav class="navbar">
    <a href="indexhome.php">home</a>
       <!-- <a href="">calendar</a>
       <a href="">Events</a>
       <a href="">Post</a> -->
       <a href="log.php">login</a>  
       
   </nav>

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="img/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>Your Mental Health guide</h3>
        <p>Tell us all about it, we're here for you</p>
        <a href="contact.php" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>30+</h3>
        <p>professionals Availabke</p>
    </div>

    <div class="icons">
        <i class="fas fa-bell"></i>
        <h3>15+</h3>
        <p>Events for you</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>5+</h3>
        <p>Support Groups</p>
    </div>

    <div class="icons">
        <i class="fas fa-edit"></i>
        <h3>10+</h3>
        <p>Articles and more</p>
    </div>

</section>

<!-- icons section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-calendar"></i>
            <h3>Journaling</h3>
            <p>Write about your emotions, feelings, mood for the day using the calendar feature.</p>
            <a href="#servies" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-plus-square"></i>
            <h3>Expert Doctors</h3>
            <p>You can book an appointment as per your needs with our experienced panel of doctors</p>
            <a href="#servies" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heart"></i>
            <h3>Art Therapy </h3>
            <p>Immerse yourself into the world of art and heal from within.</p>
            <a href="#servies" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="	fas fa-user-plus"></i>
            <h3>Support Groups </h3>
            <p>We provide a safe space for people to interact anonymously, and grow together.</p>
            <a href="#servies" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-comment-alt"></i>
            <h3>Helpful Content</h3>
            <p>Insights on helpful videos, blogs, articles, to learn more and spread awareness.</p>
            <a href="#servies" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-newspaper"></i>
            <h3>Human Library</h3>
            <p>You'll get to know that you are not alone here, find passionate stories that will inspire. </p>
            <a href="#servies" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="img/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>We are a user-friendly website, that promotes the health and fitness of your 
mind and body. Traditional clinic-based services are inaccessible and expensive for many 
people therefore not many people are used to treating mental health issues. We will 
help our users heal themselves, show personal progress, and support. It will have several 
features which will analyze the user’s growth and give appropriate guidance. Considering 
the age of the user and the issues they commonly face, their chosen preferences will 
recommend activities, suggestions, and support groups accordingly.</p>
            <a href="#services" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="img/doc-4.jpg" alt="">
            <h3>Dr.Gorav Gupta</h3>
            <span>22 years of experience</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/doc-1.jpg" alt="">
            <h3>Dr.Vasantha Jayaraman</h3>
            <span>26 years of experience</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/doc-4.jpg" alt="">
            <h3>Dr.Murali Raj</h3>
            <span>35 years of experience</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/doc-4.jpg" alt="">
            <h3>Dr.Ajit Dandekar</h3>
            <span>35 years of experience</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/doc-4.jpg" alt="">
            <h3>Dr.Sameer Malhotra</h3>
            <span>23 years of experience</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/doc-1.jpg" alt="">
            <h3>Dr.Jyoti Maheshwari</h3>
            <span>32 years of experience</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- booking section starts   -->

<section class="appointments" id="appointments">

    <h1 class="heading"> <span>appointments</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="img/book-img.svg" alt="">
        </div>

        <form action="">
            <h3>book appointments</h3>
            <input type="text" placeholder="Full Name" class="box">
            <input type="number" placeholder="Mobile Number" class="box">
            <input type="email" placeholder="Email Address" class="box">
            <input type="text" placeholder="Age" class="box">
            <select name="Doctors" id="Doctors" class="box">
            <option value="">Select a Doctor to Appoint</option>
            <option value="Dr.Gorav Gupta">Dr.Gorav Gupta</option>
            <option value="Dr.Vasantha Jayaraman">Dr.Vasantha Jayaraman</option>
            <option value="Dr.Murali Raj">Dr.Murali Raj</option>
            <option value="Dr.Ajit Dandekar">Dr.Ajit Dandekar</option>
            <option value="Dr.Sameer Malhotra">Dr.Sameer Malhotra</option>
            <option value="Dr.Jyoti Maheshwari">Dr.Jyoti Maheshwari</option>
            </select>
            <input type="date" class="box">
            <input type="time" class="box">
            <input type="submit" value="book now" class="btn">
        </form>

    </div>

</section>

<!-- booking section ends -->


<!-- insights section starts  -->

<section class="insights" id="insights">

    <h1 class="heading"> our <span>insights</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="img/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blogs</h3>
                <a href="blogs/blogs.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>videos</h3>
                <a href="videos/videos.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>podcasts</h3>
                <a href="podcasts/podcast.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- insights section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="calendar.php"> <i class="fas fa-chevron-right"></i> Calendar</a>
            <a href="events.php"> <i class="fas fa-chevron-right"></i> Events</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Posts </a>
            <a href="log.php"> <i class="fas fa-chevron-right"></i> login </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Journaling</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Expert Doctors  </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Art Therapy</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Support Groups</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Helpful Content</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Events</a>

        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> sanaa@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> naziya@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Mumbai, India - 400104 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>

        </div>

    </div>

    <div class="credit"> created by <span>Nupur & Sherin</span> </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>
