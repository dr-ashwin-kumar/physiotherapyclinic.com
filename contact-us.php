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
    <div class="page-title-section">
        <div class="page-title">
            <h2>Contact Us</h2>
            <div class="page-title-nav">
                <a href="./index.php">Home</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Services</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Contact Us</a>
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
                        <h2>Start Your Wellness Journey Today!</h2>
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
                    <form class="form-inputs" id="contactForm">
                        <div class="input-name-and-email">
                            <input type="text" placeholder="Name" name="name">
                            <input type="email" placeholder="Email" name="email">
                        </div>
                        <div class="input-phone-and-subject">
                            <input type="phone" placeholder="Phone" name="phone">
                            <input type="text" placeholder="Subject" name="subject">
                        </div>
                        <div class="input-textarea-message">
                            <textarea name="message" id="" placeholder="Message"></textarea>
                        </div>
                        <div class="input-submit-button">
                            <a href="#" id="submitBtn">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- --------------start of the page contact us google map------------------ -->
    
    <div class="page-contactus-map-section">
        <div class="page-contactus-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.4957978454386!2d77.56361027489685!3d13.06773381276367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae192620bac1f9%3A0x943d7105c31d87b!2sSri%20Sai%20Balaji%20Physiotherapy%20Clinic-%20Advanced%20Physiotherapy%20center!5e0!3m2!1sen!2sin!4v1753694330808!5m2!1sen!2sin" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>






    <!-- --------------start of the footer section----------------- -->
    <?php include './footer.php' ?> 


    <!-- --------------script for calling the submit form php-------------- -->
    <script>
        document.getElementById("submitBtn").onclick = function(e) {
            e.preventDefault();

            var form = document.getElementById("contactForm");
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "submit_form.php", true);
            xhr.onload = function() {
                alert(xhr.responseText);
                if (xhr.status == 200) {
                    form.reset();
                }
            };
            xhr.send(formData);
        };
    </script>

    <!-- -----------script link for the navbar and sidebar-------------- -->
    <script src="./navbar-sidebar.js"></script>
</body>
</html>