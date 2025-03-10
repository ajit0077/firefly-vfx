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
  <title>FireFly | Pipeline</title>
  <link rel="icon" href="img/FireFly_logo.ico" type="image/x-icon">
</head>

<body>
  <?php
    $page = "workflow"
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
              <a class="nav-link <?php if($page == 'workflow') echo 'active'; ?>" href="workflow.php">Pipeline</a>
            </li>
          </ul>
        </div>
      </div>
      
    </div>
    </nav>


        <video autoplay muted loop id="covervideo_workflow" class="video-fluid">
            <source src="https://www.fireflyvfx.com/img/covervideo.mp4" type="video/mp4">
        </video>
<!-- <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <video src="{% static '/img/covervideo.png' %}" class="mt-5 img-fluid" alt="" height="100">
        </div>
    </div>
</div> -->
<!-- <h1 class="covervideo_title" data-aos="fade-right" data-aos-duration="2000">
    FireFly World Wide Network
</h1> -->
<div class="container workflow-container">
    <div class="col-md-1 col-sm-1 left-column">
        <div class="wf-line"></div>
        <div class="icon" data-aos="flip-left" data-aos-duration="1000"><img src="img/firewall.png"
                alt=""></div>
        <div class="wf-line2"></div>
    </div>
    <div class="right-column">
        <div class="content" data-aos="flip-up" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <p>
                <span style="font-size: 2rem; font-weight: bold;">F</span>irewall functions as a vital defender against
                potential <strong style="color: red;">cyber threats and
                    unauthorized access</strong>. By meticulously inspecting incoming and outgoing network traffic, the
                firewall acts
                as a vigilant gatekeeper, implementing predefined security rules to filter data packets. This crucial
                security measure prevents malicious entities from infiltrating the studio's network, ensuring the
                integrity and confidentiality of digital assets. Furthermore, firewalls enable network segmentation,
                dividing the infrastructure into distinct zones to contain and manage potential security breaches. With
                the ability to monitor and log network activities, firewalls empower studio administrators to track and
                analyze potential security incidents, enhancing overall situational awareness. They play a pivotal role
                in safeguarding against malware and offer customizable security policies to adapt to the dynamic nature
                of cyber threats. In summary, the firewall stands as an indispensable shield, fortifying the studio's
                digital environment and contributing to a resilient cybersecurity posture.
            </p>
        </div>
    </div>
</div>
<div class="container workflow-container workflow-container-bottom" style="margin-top: 5rem;">
    <div class="col-md-1 col-sm-1 left-column ">
        <div class="wf-line2"></div>
        <div class="icon" data-aos="flip-left" data-aos-duration="1000"><img src="img/pipeline.png"
                alt=""></div>
        <div class="wf-line3"></div>
    </div>
    <div class="right-column">
        <div class="content" data-aos="flip-up" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <p>
                <span style="font-size: 2rem; font-weight: bold;">S</span>ecure Pipeline at FireFly VFX stands out
                with its <strong style="color: rgb(7, 255, 7);">cutting-edge integrated pipeline</strong> designed to
                deliver both security and efficiency. Our in-house secure pipeline serves as the backbone
                of our operations, ensuring a streamlined workflow for the timely and secure completion of projects.
                With a focus on data protection, our pipeline incorporates advanced encryption measures, safeguarding
                your creative assets at every stage. This commitment to security extends from the initial concept phase
                through to the final delivery, providing clients with peace of mind regarding the confidentiality of
                their intellectual property. The seamless integration of technology and security measures in our
                pipeline not only facilitates a smooth workflow for our talented team but also underscores our
                dedication to meeting project deadlines without compromising on safety. SriSai Studios' secure pipeline
                is a testament to our commitment to excellence, providing a foundation for creativity to flourish within
                a protected and efficient environment. As we continuously refine and update our pipeline to meet
                evolving industry standards, clients can trust in our ability to deliver secure, high-quality results on
                time, every time.
            </p>
        </div>
    </div>
</div>

<div class="container workflow-container workflow-container-bottom" style="margin-top: 5rem;">
    <div class="col-md-1 col-sm-1 left-column ">
        <div class="wf-line2"></div>
        <div class="icon" data-aos="flip-left" data-aos-duration="1000"><img src="img/checked.png"
            alt=""></div>
        <div class="wf-line3"></div>
    </div>
    <div class="right-column">
        <div class="content" data-aos="flip-up" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <p>
                <span style="font-size: 2rem; font-weight: bold;">W</span>e have an experienced QC team as well as a
                proficient project management team in the VFX industry. The QC team meticulously ensures that visual
                elements meet high standards, while Project Managers streamline communication, allocate resources, and
                adapt to project needs, optimizing efficiency.
                The synergy between QC and Project Management is pivotal. QC feedback informs resource allocation and
                adjustments, while Project Managers ensure QC processes integrate seamlessly, balancing quality
                assurance and deadlines. This collaboration fosters continuous improvement and innovation, delivering
                exceptional visual experiences and staying ahead in the competitive entertainment industry landscape.
                This commitment to quality within the established timeframes not only enhances project outcomes but also
                fosters trust and confidence among stakeholders. It reinforces the VFX studio's reputation for
                excellence and reliability in delivering exceptional visual experiences while staying competitive in the
                dynamic entertainment industry landscape.
            </p>
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