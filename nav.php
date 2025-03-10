
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
</head>

<body>
  <?php
    $page = "home"
  ?>

  <div class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-lg bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/FireFly_logo.png" width="40" height="50" class="d-inline-block align-top" alt="">
        </a>
        <div class="iso-img">
          <img class="ml-3" src="img/iso_certified.png" width="70" height="70" alt="" style="filter: brightness(10) saturate(0%);">
        
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
      
    </div>
    </nav>
    

  
  


      <video autoplay muted loop id="covervideo" class="video-fluid">
        <source src="https://www.fireflyvfx.com/img/camera_reel.mp4" type="video/mp4">
        <source src="https://www.fireflyvfx.com/img/roto_reel.mp4" type="video/mp4">
        
        <source src="https://www.fireflyvfx.com/img/paint_reel.mp4" type="video/mp4">
        
      </video>


</div>

<div class="container-fluid cover-image">
  <div class="container h-100">
    <div class="row align-items-center">
      <div class="col-md-6 col-sm-12" style="margin-top: 5rem!important;" data-aos="fade-right">
        <div class="mt-5">
          <h1 class="position-relative mb-4 underline-animation animatedText">FireFly VFX</h1>
        </div>
        <br>
        <div class="we-do-text position-relative" style="height: 170px">
          <h3><span style="color: #FFA813;">We Do </span><br><span id="output"></span></h3>
        </div>
        <br>
        <h5 class="position-relative mb-2">We Provide VFX Post Production Solutions</h5>
        <h2 class="position-relative mb-5">Quality, Timely deliveries and Client Satisfaction</h2>

        <a class="btn btn-primary" href="About.php">About us</a>

        <a class="btn btn-secondary" href="contact.php">Contact</a>

      </div>
      <div class="col-md-6 only-desk d-none d-sm-block">
        <div class="container-slider h-100 child_image" style="animation: scatterImage 0.8s ease forwards;">
          <div class="image-container">
            <img class="image-before slider-image" src="img/mm_before.jpg" alt="color photo" />
            <img class="image-after slider-image" src="img/mm_after.jpg" alt="black and white" />
          </div>
          <input type="range" min="0" max="100" value="50" aria-label="Percentage of before photo shown"
            class="slider" />
          <div class="slider-line" aria-hidden="true"></div>
          <div class="slider-button" aria-hidden="true">
            <i class="bi-arrow-left-right"></i>
          </div>
        </div>
        <div class="container-slider h-100 child_image" style="animation: scatterImage2 0.6s ease forwards;">
          <div class="image-container">
            <img class="image-before slider-image" src="img/before_g.jpg" alt="color photo" />
            <img class="image-after slider-image" src="img/after_g.jpg" alt="black and white" />

          </div>
          <input type="range" min="0" max="100" value="50" aria-label="Percentage of before photo shown"
            class="slider" />
          <div class="slider-line" aria-hidden="true"></div>
          <div class="slider-button" aria-hidden="true">
            <i class="bi-arrow-left-right"></i>
          </div>
        </div>

        <div class="container-slider h-100 child_image" style="animation: scatterImage3 1s ease forwards;">
          <div class="image-container">
            <img class="image-before slider-image" src="img/roto_before.jpg" alt="color photo" />
            <img class="image-after slider-image" src="img/roto_after.jpg" alt="black and white" />
          </div>
          <input type="range" min="0" max="100" value="50" aria-label="Percentage of before photo shown"
            class="slider" />
          <div class="slider-line" aria-hidden="true"></div>
          <div class="slider-button" aria-hidden="true">
            <i class="bi-arrow-left-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Solutions -->

<div class="container mt-5 text-center">
  <h2 class="underline-animation animatedText custom-title" style="margin-top: 2rem;">Solutions <span style="color: #FFA813;">We</span> Provide
  </h2>
</div>

<hr>
<div class="container">
  <div class="row mb-5">
    <div class="col-md-4 col-sm-12 mb-3 service-thumbnail">
      <div class="card h-100 d-flex align-items-center" data-aos="flip-up" data-aos-duration="800">
        <div class="container-slider">
          <div class="image-container">
            <img class="image-before slider-image" src="img/roto_before.jpg"  alt="color photo" />
            <img class="image-after slider-image" src="img/roto_after.jpg" alt="black and white" />
          </div>
          <input type="range" min="0" max="100" value="50" aria-label="Percentage of before photo shown"
            class="slider" />
          <div class="slider-line" aria-hidden="true"></div>
          <div class="slider-button" aria-hidden="true">
            <i class="bi-arrow-left-right"></i>
          </div>
        </div>
        <div class="card-body text-center">
          <a href="services.php">
            <h5>ROTOSCOPY - VFX, Stereo, VR</h5>
          </a>
        </div>
        <a class="btn btn-primary mb-3" style="color: white;" href="services.php">Reel & More</a>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 mb-3 service-thumbnail">
      <div class="card h-100 d-flex align-items-center" data-aos="flip-up" data-aos-duration="800">
        <div class="container-slider">
          <div class="image-container">
            <img class="image-before slider-image" src="img/mm_before.jpg" alt="color photo" />
            <img class="image-after slider-image" src="img/mm_after.jpg" alt="black and white" />
          </div>
          <input type="range" min="0" max="100" value="50" aria-label="Percentage of before photo shown"
            class="slider" />
          <div class="slider-line" aria-hidden="true"></div>
          <div class="slider-button" aria-hidden="true">
            <i class="bi-arrow-left-right"></i>
          </div>
        </div>
        <div class="card-body text-center">
          <a href="services.php#mm_div">
            <h5>MATCH MOVE (Tracking) - Object Tracking, Body Tracking (RA)</h5>
          </a>
        </div>
        <a class="btn btn-primary mb-3" style="color: white;" href="services.php#mm_div">Reel & More</a>
      </div>
    </div>

    <div class="col-md-4 col-sm-12 mb-3 service-thumbnail">
      <div class="card h-100 d-flex align-items-center" data-aos="flip-up" data-aos-duration="800">
        <div class="container-slider">
          <div class="image-container">
            <img class="image-before slider-image" src="img/before_g.jpg" alt="color photo" />
            <img class="image-after slider-image" src="img/after_g.jpg" alt="black and white" />
          </div>
          <input type="range" min="0" max="100" value="50" aria-label="Percentage of before photo shown"
            class="slider" />
          <div class="slider-line" aria-hidden="true"></div>
          <div class="slider-button" aria-hidden="true">
            <i class="bi-arrow-left-right"></i>
          </div>
        </div>
        <div class="card-body text-center">
          <a href="services.php#pp_div">
            <h5>PAINT/PREP - Wire Removal, Rig Removal, Painting out markers, Re-creation</h5>
          </a>
        </div>
        <a class="btn btn-primary mb-3" style="color: white;" href="services.php#pp_div">Reel & More</a>
      </div>
    </div>
    </div>
  </div>

</div>

<!-- Numbers -->


<div class="container mt-5 text-center">
  <h2 class="underline-animation animatedText custom-title">Studio Stats</h2>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4 mt-5">
      <div class="card" data-aos="fade-right" data-aos-duration="800">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <i class="m-5 bi-person-circle custom-icon"></i>
            <div class="px-4 flex custom-card-text">
              <h4>Happy Clients</h4>
              <h5 class="text-success mt-3">25+</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-5">
      <div class="card" data-aos="flip-up" data-aos-duration="800">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <i class="m-5 bi-check-circle custom-icon"></i>
            <div class="px-4 flex custom-card-text">
              <h4>Projects Done</h4>
              <h5 class="text-success mt-3">50+</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 mt-5">
      <div class="card" data-aos="fade-right" data-aos-duration="800">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <i class="m-5 bi-gear-fill custom-icon"></i>
            <div class="px-4 flex custom-card-text">
              <h4>Total Services</h4>
              <h5 class="text-success mt-3">3+</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<section class="testimonial text-center mt-5" style="background: url('img/testimonial_bg.jpg');background-position: top;background-size: cover;">
  <div class="container">
    <div class="heading white-heading">
      Happy Clients
    </div>
    <div id="testimonial4"
      class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
      data-ride="carousel" data-pause="hover" data-interval="3000" data-duration="2000">

      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="testimonial4_slide">
            <img src='img/s_dutta.jpg' class="img-circle img-responsive" />
            <p>Delighted to share my experience with FireFly VFX! And I'm incredibly happy with their top-notch roto
              work. Their service is exceptional, and I highly recommend them for their outstanding commitment and
              expertise</p>
            <h4>Sandeep Dutta</h4>
          </div>
        </div>
        <div class="carousel-item">
          <div class="testimonial4_slide">
            <img src='img/d_roy.jpg' class="img-circle img-responsive" />
            <p>Excellent paint team exceeded my expectations with their impeccable work. The attention to detail
              and precision in their craft are truly commendable. FireFly VFX is my top choice for exceptional paint
              services!</p>
            <h4>Debojyoti Roy</h4>
          </div>
        </div>
        <div class="carousel-item">
          <div class="testimonial4_slide">
            <img src='img/a_dey.jpg'class="img-circle img-responsive" />
            <p>Matchmove team showcased unparalleled precision in their work. I'm
              thoroughly impressed with the seamless integration and attention to detail. FireFly VFX is undoubtedly
              the go-to choice for exceptional matchmove solutions.</p>
            <h4>Arpan Dey</h4>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial4" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
</section>





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
          <span class="border-bottom"
            style="font-weight: 500;"> SSS STUDIO & TECHNOLOGIES PRIVATE LIMITED
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
    const statements = [
    "MATCH MOVE (Tracking) - Object Tracking, Body Tracking (RA)",
    "ROTOSCOPY - VFX, Stereo, VR",
    "PAINT/PREP - Wire Removal, Rig Removal, Painting out markers, Re-creation"
  ];

  const outputElement = document.getElementById("output");

  function typeWriter(index) {
    const currentStatement = statements[index % statements.length];
    let charIndex = 0;

    function type() {
      if (charIndex < currentStatement.length) {
        outputElement.innerHTML += currentStatement.charAt(charIndex);
        charIndex++;
        setTimeout(type, 50);
      } else {
        setTimeout(() => {
          outputElement.innerHTML = "";
          typeWriter(index + 1);
        }, 1000);
      }
    }

    type();
  }

  // Start the typing animation
  typeWriter(0);
  </script>
</body>

</html>