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
  <title>FireFly | Services</title>
  <link rel="icon" href="img/FireFly_logo.ico" type="image/x-icon">
</head>

<body>
  <?php
    $page = "services"
  ?>

  <div class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-lg bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/FireFly_logo.png" width="60" height="60" class="d-inline-block align-top" alt="">
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


<div class="container text-center" style="margin-top: 6rem; overflow: hidden;">
  <h3 class="underline-animation animatedText custom-title">What <span style="color: #FFA813;">Solutions</span> We
    Provide</h3>
</div>
<div class="container services_shadow" style="color: white; overflow: hidden;">

  <div class="row mt-5 mb-5" id="roto_div" data-aos="flip-up" data-aos-duration="500">
    <div class="order-md-2 test_css  p-4" data-aos="fade-right" data-aos-duration="800">
      <video muted loop height="100%" width="100%" controls id="FlyVideo">
        <source src="https://www.fireflyvfx.com/img/roto_reel.mp4" type="video/mp4">
      </video>

    </div>
    <div class="order-md-1 test_css p-4" data-aos="fade-right" data-aos-duration="800">
      <h4 class="mb-4">ROTOSCOPY - VFX, Stereo, VR</h4>
      <p>
        Roto Artists play a pivotal role in the filmmaking process by meticulously tracing live-action frames where
        computer-generated (CG) elements will overlap or interact. Their primary objective is to create well-defined
        areas, referred to as mattes, within the frame. These mattes serve as clear guidelines for layering different
        elements of the scene convincingly, allowing for seamless integration of CG effects with live images. The
        precision and accuracy of their work are crucial to achieving a natural and immersive visual experience for the
        audience. <span id="mm_div"></span> By outlining specific regions, Roto Artists contribute to the overall realism and cohesion of the
        composition, ensuring that the interaction between live and CG elements appears seamless. Their attention to
        detail is paramount in enhancing the visual impact and successfully bringing together the various components of
        a scene in a harmonious manner.
      </p>

    </div>
  </div>

  <div class="row mt-5 mb-5" data-aos="flip-up" data-aos-duration="500">
    <div class="test_css p-4" data-aos="fade-right" data-aos-duration="800">
     
      <video muted loop height="100%" width="100%" controls id="FlyVideo">
        <source src="https://www.fireflyvfx.com/img/camera_reel.mp4" type="video/mp4">
      </video>
    </div>
    <div class="test_css p-4" data-aos="fade-right" data-aos-duration="800">
      <h5 class="mb-4">MATCH MOVE (Tracking) - Object Tracking, Body Tracking (RA)</h5>
      <p>
        The Tracking Artists and Leads specialize in object and body tracking for visual media projects, seamlessly
        integrating live-action and CGI. Their expertise is grounded in advanced techniques and a deep understanding of
        subject matter. With extensive experience, the team navigates diverse challenges, enhancing visual storytelling.
        The Leads play a pivotal role, guiding the team to align tasks with project goals and standards. Collaboration
        is key in achieving precise results for special effects or character animation. The team's subject knowledge
        ensures adaptation to various scenarios, enriching the creative process. <span id="pp_div"></span> Leadership fosters continuous learning,
        keeping the team updated on industry trends and technologies. In summary, the team's technical proficiency,
        adaptability, and subject expertise contribute to the success and quality of visual media projects.
      </p>
    </div>
  </div>


  <div class="row mt-5"  data-aos="flip-up" data-aos-duration="500"> 
    <div class="test_css order-md-2 p-4" data-aos="fade-right" data-aos-duration="800">
      <!-- <div class="container-slider h-100 child_image">
        <div class="image-container">
          <img class="image-before slider-image" src="img/before_g.jpg" alt="color photo" />
          <img class="image-after slider-image" src="img/after_g.jpg" alt="black and white" />
        </div>
        <input type="range" min="0" max="100" value="50" aria-label="Percentage of before photo shown" class="slider" />
        <div class="slider-line" aria-hidden="true"></div>
        <div class="slider-button" aria-hidden="true">
          <i class="bi-arrow-left-right"></i>
        </div>
      </div> -->

      <video muted loop height="100%" width="100%" controls id="FlyVideo">
        <source src="https://www.fireflyvfx.com/img/paint_reel.mp4" type="video/mp4">
      </video>
    </div>
    <div class="test_css order-md-1 p-4" data-aos="fade-right" data-aos-duration="800">

      <h5 class="mb-4">PAINT/PREP - Wire & Rig Removal, Painting markers, Re-creation</h5>
      <p>In the realm of visual media production, the PAINT/PREP department undertakes a range of crucial tasks to
        enhance the seamless integration of elements. This encompasses wire removal, eliminating rigs, meticulously
        painting out markers, and engaging in meticulous re-creation efforts. The PAINT/PREP team's expertise lies in
        the art of refining visual compositions by eradicating distracting or unwanted elements, ensuring a polished and
        professional final product. Whether it's the removal of visible support structures or the meticulous recreation
        of background details, these tasks demand precision and attention to detail. The PAINT/PREP team's contribution
        plays a vital role in achieving a visually compelling and cohesive narrative within the broader context of
        filmmaking and visual storytelling.</p>
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
    document.addEventListener('DOMContentLoaded', function() {
    
    const animatedText = document.getElementsByClassName("animatedText");
      for (i = 0; i <= animatedText.length; i++) {
        try{
        animatedText[i].classList.add("animate");
        }
        catch{
          
        }
      }
    });
  
  </script>