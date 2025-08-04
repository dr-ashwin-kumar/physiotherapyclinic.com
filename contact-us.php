<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Sri Sai Balaji Physiotherapy Clinic</title>
    <link rel="icon" href="./assets/images/favicon.png" type="x-image/icon">

    <!-- --------------link for the styling index page--------------- -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./contact-us.css">

    <!-- --------------link for the font awesome icons--------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
</head>
<body>

    <!-- --------------start of the topbar--------------- -->
    <?php include './topbar.php' ?>

    <!-- --------------start of the navber--------------- -->
    <?php include './navbar.php' ?>


    <!-- --------------start of the page contact us title section--------------- -->
    <div class="page-contactus-title-section">
        <div class="page-contactus-title">
            <h1>Contact Us</h1>
            <div class="page-contactus-title-nav">
                <a href="./index.php">Home</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="./orthopedic.php">Services</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="./contact-us.php">Contact Us</a>
            </div>
        </div>
    </div>

    
    

    <!-- ---------------start of the page contact form section ------------------ -->
    <div class="page-contact-form-section">
        <div class="contactImage-and-contactForm">
            <div class="contact-form-image">
                <div class="contact-form-img">
                    <div class="open-timings">
                        <div class="open-timings-icon">
                            <span><i class="fa-solid fa-calendar-days"></i></span>
                        </div>
                        <div class="open-timings-info">
                            <h3>Opening days:</h3>
                            <p>Mon-Fri: 10:00am to 6:00pm</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form-image-circle">
                    <a href="#">Schedule an Appointment</a>
                </div>
            </div>
            <div class="contact-form-form">
                <div class="form">
                    <div class="form-title">
                        <h4>Get in touch </h4>
                        <h1>Start Your Wellness Journey Today!</h1>
                        <p>Use the latest research in physical therapy to work better, play better—and spend more time on what matters.</p>
                    </div>
                    <div class="form-icons">
                        <div class="form-icon">
                            <div class="icon">
                                <h2><i class="fa-solid fa-phone-volume"></i></h2>
                            </div>
                            <div class="icon-info">
                                <h4>Call Now</h4>
                                <p>+91 96633 14071</p>
                            </div>
                        </div>
                        <div class="form-icon">
                            <div class="icon">
                                <h2><i class="fa-solid fa-envelope-circle-check"></i></h2>
                            </div>
                            <div class="icon-info">
                                <h4>Send Your Message</h4>
                                <p>srisaibalajiclinic@gmail.com</p>
                            </div>
                        </div>
                        <div class="form-icon">
                            <div class="icon">
                                <h2><i class="fa-solid fa-location-dot"></i></h2>
                            </div>
                            <div class="icon-info">
                                <h4>Visit The Clinic</h4>
                                <p>Thindlu, Vidyaranyapura, Bengaluru 560097</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-inputs">
                        <div class="input-name-and-email">
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="input-phone-and-subject">
                            <input type="phone" placeholder="Phone">
                            <input type="text" placeholder="Subject">
                        </div>
                        <div class="input-textarea-message">
                            <textarea name="" id="" placeholder="Message"></textarea>
                        </div>
                        <div class="input-submit-button">
                            <a href="#">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <!-- --------------start of the footer section----------------- -->
    <?php include './footer.php' ?> 


</body>
</html>