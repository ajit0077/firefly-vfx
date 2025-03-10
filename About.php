<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style_new.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css.map">
  <title>FireFly | About Us</title>
  <link rel="icon" href="img/FireFly_logo.ico" type="image/x-icon">
</head>

<body>
  <?php
    $page = "about"
  ?>

  <div class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-lg bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/FireFly_logo.png" width="60" height="60" class="d-inline-block align-top" alt="">
        </a>
        <div class="iso-img">
          <img class="ml-3" src="img/iso_certified.png" width="70" height="70" alt=""
            style="filter: brightness(10) saturate(0%);">

        </div>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item px-2">
              <a class="nav-link <?php if($page == 'home') echo 'active'; ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link <?php if($page == 'about') echo 'active'; ?>" href="About.php">About Us</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link <?php if($page == 'services') echo 'active'; ?>" href="services.php">Services</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link <?php if($page == 'contact') echo 'active'; ?>" href="contact.php">Contact</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link <?php if($page == 'pipeline') echo 'active'; ?>" href="workflow.php">Pipeline</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  


  <div class="container text-center" style="margin-top: 6rem;">
    <h2 class="underline-animation animatedText custom-title">
      <span style="color: #FFCC00;">Who</span> are we?
    </h2>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="test_css test_css_about1 mt-5 about-container" data-aos="fade-right" data-aos-duration="800">
        <div>
          <h4>Best Visual Effects Studio With 5 Years of Experience</h4>
          <p><strong>FireFly VFX</strong> is India's most progressive and dynamic
            Visual Effects studio based in Kolkata, Mumbai, India.</p>
          <p><strong>FireFly VFX </strong>is home to exceptional artists specializing in <strong>Rotoscopy, Paint/Prep
              and Match-Move</strong>. We cater to top creators working on features, episodes,
            advertising, and immersive experiences. We have a homegrown<strong> customized innovative approach
            </strong>that generates <strong>highest quality product </strong>with <strong>efficient delivery
              timelines</strong>.</p>
          <p><strong>FireFly VFX </strong>has a capacity of 60+ artists to work in collaboration within a streamlined
            workflow. The studio is <strong>fully scalable, putting creativity and artists at the core</strong>,
            seamlessly sharing ideas with a <strong>wealth of experience and knowledge in the design and management
              of Visual effects</strong>. We offer a bespoke service working collaboratively and creatively with
            clients to deliver work of the highest quality.</p>
          <p>Since the studio was founded in 2018 and we have continued to build strong business relationships with
            a commitment to providing outstanding services and the highest quality work in films, Television,
            Advertising industries.</p>
        </div>
      </div>
      <div class="test_css test_css_about2" data-aos="fade-up" data-aos-duration="800">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-caption" style="top: -2%; color : #FFCC00; position:static;">
            <h3>Our Projects</h3>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/carousel1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/carousel2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/carousel4.jpg" alt="Third slide">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container text-center about_glossy w-80" data-aos="flip-up" data-aos-duration="800">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="pb-3">
          <h1>Quality and Timely deliveries and <span style="color: #FFCC00;">Client Satisfaction</span></h1>
        </div>
        <p>With a pragmatic and Innovative approach, <strong><span style="color: #FFCC00;">FireFly</span></strong> can
          handle entire productions, we work
          collaboratively with Clients to ensure delivery on time with quality, and on budget.
        </p>
        <div>
          <i class="bi-phone-vibrate"></i>
          Call us for any query
          <a href="tel:+918999881785">+91 8999881785</a>
        </div>
      </div>

    </div>
  </div>


  <footer>
    <div class="animation-line-bottom"></div>
    <div class="container-fluid text-light mt-5 pt-5 footerbg" style="background-image: url('img/footer.png');">
      <div class="container">
        <div class="row gx-5">
          <div class="col-lg-4 col-md-4 col-sm-12 footer-about">
            <div class="d-flex flex-column h-100">
              <h1 class="mt-0" style="text-decoration: underline;">FireFly VFX</h1>
              <p class="mt-2 mb-4"><strong>FireFly VFX</strong> is India's most
                progressive and dynamic Visual Effects studio based in Pune, KolKata, India.</p>
              <div class="d-flex">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="row gx-5">
              <div class="section-title section-title-sm position-relative pb-3 mb-3 ml-3">
                <h3 class="text-light mb-0">Get In Touch</h3>

                <div class="d-flex mb-2 mt-4"> <i class="bi bi-geo-alt text-light me-2 mr-1"></i>
                  <p class="mb-0 footcont"><a href="https://maps.app.goo.gl/jYzqRHz7HSH4J5Gm8" target="_blank" style="
                      text-decoration: none; color: white;">Narayan Chambers Behind HP Petrol Pump </a></p>
                </div>
                <div class="d-flex mb-2"> <i class="bi bi-envelope-open text-light me-2  mr-1"></i>
                  <p class="mb-0 footcont"><a href="mailto:business@fireflyvfx.com"
                      style="text-decoration: none; color: white;">business@fireflyvfx.com</a></p>
                </div>
                <div class="d-flex mb-2"> <i class="bi bi-telephone text-light me-2  mr-1"></i>
                  <p class="mb-0 footcont"><a href="tel:+918999881785" target="_blank" style="
                      text-decoration: none; color: white;">+91 8999881785 </a></p>
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="row gx-5">
              <div class="section-title section-title-sm position-relative pb-3 mb-4 ml-3">
                <h3 class="text-light mb-4">Links</h3>
                <div class="link-animated d-flex flex-column justify-content-start">
                  <a class="text-light mb-2" href="index.php">Home</a>
                  <a class="text-light mb-2" href="About.php">About Us</a>
                  <a class="text-light mb-2" href="services.php">Services</a>
                  <a class="text-light mb-2" href="contact.php">Contact</a>
                  <a class="text-light mb-2" href="workflow.php">Pipeline</a>
                </div>
              </div>

            </div>
          </div>


        </div>
      </div>


    </div>
    <div class=" col-sm-12 align-items-center justify-content-center copyright">
      <center>
        <p class="mb-0">All Right Reserved. Design & Developed By
          <br>
          <span class="border-bottom" style="color: white; font-weight: 500;"> FireFly VFX
          </span>.
        </p>
      </center>
    </div>
  </footer>

  <!-- <script src="js/all_js.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
    document.addEventListener('DOMContentLoaded', function () {

      const animatedText = document.getElementsByClassName("animatedText");
      for (i = 0; i <= animatedText.length; i++) {
        try {
          animatedText[i].classList.add("animate");
        }
        catch {

        }
      }
    });


  </script>

</body>