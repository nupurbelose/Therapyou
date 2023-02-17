<?php
 require 'config.php';
 if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM contactus WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
if (isset($_POST["contactbtn"])) {
    $name = $_POST["name"];
    $Phone = $_POST["Phone"];
    $mail = $_POST["mail"];
    $message = $_POST["message"];

    $emailquery = " SELECT * FROM signup WHERE email='$mail' ";
    $query= mysqli_query($conn,$emailquery);
    $emailcount = mysqli_num_rows($query);
        
    if($emailcount>0)
        {
        $query1 = "INSERT INTO contactus VALUES('','$name','$Phone','$mail','$message')";
        mysqli_query($conn, $query1);

               ?>
            <script>
                alert('Thankyou for contacting us, will reach to you soon');
            </script>
            <?php
        }
       else{
    
        ?>
            <script>
                alert('Please register first!!');
            </script>
        <?php 
             /* echo "Please register first!!"; */ 
    } 
       
}
header('location:contact.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TherapYOUtic</title>
    <link rel="icon" type="images/x-icon" href="img/logo.png" />
        <link rel="stylesheet" href="contact.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            You can find us at:
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>SIES College of Arts, Science & Commerce Sion West, Mumbai</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>therapyouticmentalhealthguide@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="mail" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="Phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" name="contactbtn" />
          </form>
        </div>
      </div>
    </div>

    <script src="contact.js"></script>

  </body>
</html>