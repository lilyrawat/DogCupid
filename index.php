<?php
$message_sent = false;

if (isset($_POST['email']) && $_POST['email'] != "") {
  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    //submit form
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "b19090@students.iitmandi.ac.in";
    $body = "";
    $body .= "From: " . $userName . "\r\n";
    $body .= "Email: " . $userEmail . "\r\n";
    $body .= "Message: " . $message . "\r\n";

    mail($to, $messageSubject, $body);
    $message_sent = true;
  } else {
    $invalid_class_name = "form-invalid";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
  <!-- Navbar -->
  <header>
    <a href="#" class="logo"> <img src="img/logo.jpg" alt="" /></a>
    <div class="bx bx-menu" id="menu-icon"></div>
    <ul class="navbar">
      <li><a href="#home">Home</a></li>
      <li><a href="#shop">Pricing</a></li>
      <li><a href="#app">App</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </header>

  <!-- Home -->
  <section class="home" id="home">
    <div class="home-text">
      <span>Welcome To</span>
      <h1>DogCupid</h1>
      <h2>
        Meet new and interesting <br />
        Dogs Nearby
      </h2>
      <div class="stars">
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star-half"></i>
      </div>
      <a href="#" class="btn">Join Now</a>
    </div>
    <div class="home-img">
      <img src="img/home.png" alt="home" />
    </div>
  </section>
  <section class="shop" id="shop">
    <div class="heading">
      <h1>A Plan for Every Dog's Needs</h1>
      <span>Simple and affordable price plans for your dog.</span>
    </div>
    <div class="shop-container">
      <div class="box">
        <div class="box-img">
          <img src="img/shop1.png" alt="" />
        </div>
        <p>5 Matches per day</p>
        <p>10 Messages per day</p>
        <p>Unlimited App Usage</p>
        <span>Free</span>
        <a href="#" class="btn">Sign Up</a>
      </div>
      <div class="box">
        <div class="box-img">
          <img src="img/shop2.png" alt="" />
        </div>
        <p></p>
        <p>10 Matches per day</p>
        <p>Unlimited Messages</p>
        <p>Unlimited App Usage</p>
        <span>$49 / mo</span>
        <a href="#" class="btn">Sign Up</a>
      </div>
      <div class="box">
        <div class="box-img">
          <img src="img/shop3.png" alt="" />
        </div>
        <p>Unlimited Matches</p>
        <p>Unlimited Messages</p>
        <p>Unlimited App Usage</p>
        <span>$99 / mo</span>
        <a href="#" class="btn">Sign Up</a>
      </div>
    </div>
  </section>

  <!-- App -->
  <section class="app" id="app">
    <div class="heading">
      <span>Our App</span>
      <h1>Download App</h1>
    </div>
    <div class="container">
      <div class="app-text">
        <h2>Easy to use.</h2>
        <p>So easy to use, even your dog could do it.</p>
        <h2>Elite Clientele.</h2>
        <p>We have all the dogs, the greatest dogs.</p>
        <h2>Guaranteed to work.</h2>
        <p>Find the love of your dog's life or your money back.</p>
        <a href="#" class="btn">Get App</a>
      </div>
      <div class="app-img">
        <img src="img/app.jpeg" alt="" />
      </div>
    </div>
  </section>
  <!-- About -->
  <section class="about" id="about">
    <div class="about-img">
      <img src="img/about.jpeg" alt="" />
    </div>
    <div class="about-text">
      <h2>Find the True Love of Your Dog's Life Today.</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo
        porta vestibulum. Suspendisse magna turpis, porta ut dolor non,
        gravida placerat arcu. Nulla massa erat, porttitor vitae tempor id,
        luctus luctus eros.
      </p>
      <p>
        In viverra fermentum nisi quis lobortis. Nulla facilisi. Cras at
        varius metus, sit amet ultrices tortor. Aliquam ultrices vulputate
        diam non consectetur.
      </p>
      <p>
        Duis laoreet posuere orci, ac interdum ipsum ultrices sed. Duis
        condimentum sapien in tellus tempor, in convallis ipsum iaculis.
      </p>

      <a href="#" class="btn">Learn More</a>
    </div>
  </section>
  <!-- Contact -->
  <section class="contact" id="contact">
    <?php
    if ($message_sent) :
    ?>
      <h2>Thanks, we will get in touch</h2>
    <?php
    else :
    ?>
      <div class="container contact-text">
        <h2>Contact</h2>
        <form action="index.php" method="POST" class="form">
          <div class="form-group">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" tabindex="1" required />
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="john@doe.com" tabindex="2" required />
          </div>
          <div class="form-group">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required />
          </div>
          <div class="form-group">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
          </div>
          <div>
            <button type="submit" class="btn">Send Message!</button>
            <!-- <a href="#" class="btn" onclick="document.getElementById('form').submit()">Send</a> -->
          </div>
        </form>
      </div>
    <?php
    endif;
    ?>
    <div class="social">
      <a href="#"> <i class="bx bxl-meta"></i> </a>
      <a href="#"> <i class="bx bxl-twitter"></i> </a>
      <a href="#"> <i class="bx bxl-instagram"></i> </a>
      <a href="#"> <i class="bx bxl-youtube"></i> </a>
    </div>
    <div class="links">
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Use</a>
      <a href="#">Our Company</a>
    </div>
    <p>Copyright &#169; 2023 All Rights Reserved</p>
  </section>
  <!-- Link to Custom JavaScript File -->
  <script src="main.js"></script>
</body>

</html>