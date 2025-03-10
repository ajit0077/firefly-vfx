<?php
session_start();
?>
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
  <title>FireFly | Contact</title>
  <link rel="icon" href="img/FireFly_logo.ico" type="image/x-icon">
  <style>
.message-container {
    position: fixed;
    top: 6rem;
    right: 20px; 
    padding: 15px 20px;
    border-radius: 8px;
    z-index: 1000;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    font-size: 16px; 
    font-weight: bold;
}

.success-message {
    color: #155724;
    background-color: #d4edda;
    border: 2px solid #c3e6cb;
    border-radius : 3px;
    padding : 5px;
    
}

.error-message {
    color: #721c24;
    background-color: #f8d7da;
    border: 2px solid #c3e6cb;
    border-radius : 3px;
    padding : 5px;
}

.hidden {
    display: none;
}

    </style>
</head>

<body>
<?php
  $page = "contact"
?>
<?php 
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Ensure session_start() is called at the beginning


// $servername = "localhost"; 
// $username = "dbuser"; 
// $password = "dbpassword"; 
// $database = "test"; 

// $conn = new mysqli($servername, $username, $password, $database);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $enquiry = $_POST["enquiry"];

//     $sql = "INSERT INTO enquiries (name, email, enquiry) VALUES ('$name', '$email', '$enquiry')";

//     if ($conn->query($sql) === TRUE) {
//         $successMessage = "Enquiry submitted successfully!";
//         $_SESSION["successMessage"] = $successMessage;
//         echo '<script>window.location.replace("contact.php");</script>';
//         exit(); // Ensure no further code execution after redirection
//     } else {
//         $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
//         $_SESSION["errorMessage"] = $errorMessage;
//     }
// }

// // Output buffering

// // Ensure no output before session_start() is called

if (isset($_SESSION["successMessage"])) {
    $successMessage = $_SESSION["successMessage"];
    unset($_SESSION["successMessage"]); 
}

if (isset($_SESSION["errorMessage"])) {
    $errorMessage = $_SESSION["errorMessage"];
    unset($_SESSION["errorMessage"]); 
}

// Output buffer flush
ob_end_flush();
?>

<!-- HTML content goes here -->

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
<div class="container contact-div" style="margin-top: 6rem;">
  <div class="row">
 <!-- Inside your HTML -->
<div id="message-container" class="message-container hidden"></div>

    
    <div class="test_css glossy-container pt-4 pl-5 pr-5 pb-3" style="text-align: center;" data-aos="zoom-in-up">
      <h1>Enquiry</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mt-5 w-100">
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Name" maxlength="256" required="" id="id_Name">
        </div>
        <div class="form-group mt-3">
          <input type="email" name="email" class="form-control" placeholder="Email" maxlength="254" required="" id="id_EmailID">
        </div>
        <div class="form-group mt-3">
          <textarea name="enquiry" cols="40" rows="8" class="form-control" placeholder="Enquiry" style="resize:none" required="" id="id_Enquiry"></textarea>
        </div>
        <div class="form-group mt-5">
          <input class="btn btn-primary" type="submit" value="Submit">
        </div>
        </form>
      </div>

    <div class="test_css pt-0 pb-3 pr-3 pl-3 add_margin" data-aos="zoom-in-up" >
      <h1 style="text-align: center;">Contact</h1>
      <div>

        <div class="mt-4">
          <div class="card">
            <div class="card-body" style="padding: 0;">
              <div class="d-flex align-items-center">
                <i class="m-3 bi-geo-alt custom-icon"></i>
                <div class="px-4 flex custom-card-text">
                  <h4>Our Address</h4>
                  <span>
                    <a href="https://maps.app.goo.gl/jYzqRHz7HSH4J5Gm8" target="_blank">Narayan Chambers Behind HP Petrol Pump</a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>


        
        <div class="mt-4">
          <div class="card">
            <div class="card-body" style="padding: 0;">
              <div class="d-flex align-items-center">
                <i class="m-3 bi-envelope-open custom-icon"></i>
                <div class="px-4 flex custom-card-text">
                  <h4>Email Us</h4>
                  <span>
                    <a class="contatag" href="mailto:business@fireflyvfx.com">business@fireflyvfx.com</a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <div class="mt-4">
          <div class="card">
            <div class="card-body" style="padding: 0;">
              <div class="d-flex align-items-center">
                <i class="m-3 bi-phone-vibrate custom-icon"></i>
                <div class="px-4 flex custom-card-text">
                  <h4>Call Us</h4>
                  <span>
                    <a class="contatag" href="tel:+918999881785">+91 8999881785</a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <div class="mt-4">
          <div class="card">
            <div class="card-body" style="padding: 0;">
              <div class="d-flex align-items-center">
                <i class="m-3 bi-clock custom-icon"></i>
                <div class="px-4 flex custom-card-text">
                  <h4>Opening Hours</h4>
                  <span>Monday - Saturday : 10.00 AM - 7.00 PM</span>
                </div>
              </div>
            </div>
          </div>
        </div>

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

document.addEventListener("DOMContentLoaded", function() {
    var messageContainer = document.getElementById("message-container");

    <?php if (!empty($successMessage)) { ?>
        messageContainer.innerHTML = "<?php echo '<div class=\"success-message\">' . addslashes($successMessage) . '</div>'; ?>";
        messageContainer.classList.remove("hidden");
        setTimeout(function() {
            messageContainer.style.opacity = "1";
        }, 100);
        
        setTimeout(function() {
            messageContainer.style.opacity = "0";
            setTimeout(function() {
                messageContainer.classList.add("hidden");
            }, 500);
        }, 3000); 
    <?php } ?>

    <?php if (!empty($errorMessage)) { ?>
        messageContainer.innerHTML = "<?php echo '<div class=\"error-message\">' . addslashes($errorMessage) . '</div>'; ?>";
        messageContainer.classList.remove("hidden");
        setTimeout(function() {
            messageContainer.style.opacity = "1";
        }, 100);
        
        setTimeout(function() {
            messageContainer.style.opacity = "0";
            setTimeout(function() {
                messageContainer.classList.add("hidden");
            }, 500);
        }, 3000); 
    <?php } ?>
});

  </script>