<?php 
    // Include the database config file 
    include_once 'dbConfig.php'; 
     
    // Fetch all the country data 
    $query = "SELECT * FROM branch WHERE status = 1 ORDER BY branch_name ASC"; 
    $result = $db->query($query); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column align-items-center justify-content-center">
    

    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
          <link href="assets/img/favicon.png" rel="icon">
          <h1><a href="index.html">Choose the category</a></h1>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="#about">Technical</a></li>
            <li><a class="nav-link scrollto" href="#resume">Cultural</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">Sports</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->

    <main id="main">

      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <!-- Country dropdown -->
        <select id="branch">
          <option value="">Select Branch</option>
          <?php 
            if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){  
              echo '<option value="'.$row['branch_id'].'">'.$row['branch_name'].'</option>'; 
            } 
            }else{ 
              echo '<option value="">branch not available</option>'; 
            } 
          ?>
        </select>
        
        <!-- State dropdown -->
        <select id="state">
          <option value="">Select country first</option>
        </select>
        
        <!-- City dropdown -->
        <select id="city">
          <option value="">Select state first</option>
        </select>
      </section><!-- End About Section -->

      <!-- ======= Skills Section ======= -->
      <section id="skills" class="skills section-bg">
      
      </section><!-- End Skills Section -->

      <!-- ======= Resume Section ======= -->
      <section id="resume" class="resume section-bg">
      
      </section><!-- End Resume Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact section-bg">
        <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>SDK Devs.</h3>
              <p>Assist you in developing an app and website by performing the following tasks: Ideating and freezing the framework, architecture, and navigation. Choosing a coding language to build your site and app (HTML, PHP, JavaScript, ASP, etc). Coding and programming the back end.</p>
              <div class="social-links">
                <a href="https://twitter.com/d_kotyan" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/Gamer18092002" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/spandan_d_k?igshid=YmMyMTA2M2Y=" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/spandan-kotyan-4b59661a1/" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div class="d-flex align-items-center">
                <i class="bi bi-geo-alt"></i>
                <p>Reva University<br>Banglore, Karnataka, India.</p>
              </div>

              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-envelope"></i>
                <p>spandankotyan189@gmail.com</p>
              </div>

              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-phone"></i>
                <p>+91-8105928479</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

          </div>

        </div>
      </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Spandan</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by Spandan D Kotyan
        </div>
      </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>
</html>