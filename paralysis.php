<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paralysis | Sri Sai Balaji Physiotherapy Clinic</title>
    <link rel="icon" href="./assets/images/favicon.png" type="x-image/icon">

    <!-- --------------link for the styling service page--------------- -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./paralysis.css">
    <link rel="stylesheet" href="./services-sidebar.css">


    <!-- --------------link for the font awesome icons--------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=download" />

    <!-- ---------------link for the swiper js for the carousel---------------- -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


</head>

<body>

    <!-- --------------start of the topbar--------------- -->
    <?php include './topbar.php' ?>

    <!-- --------------start of the navber--------------- -->
    <?php include './navbar.php' ?>


    <!-- --------------start of the page title section--------------- -->

    <div class="page-title-section">
        <div class="page-title">
            <h4>SERVICE</h4>
            <h2>Paralysis</h2>
            <div class="page-title-nav">
                <a href="./index.php">Home</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Services</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Paralysis</a>
            </div>
        </div>
    </div>



    <!-- ---------------start of the page content section------------------ -->

    <div class="page-content-section">
        <div class="page-content-sidebar">
            <div class="sidebar-content-first-section">
                <?php include './services-sidebar.php' ?>
            </div>
        </div>
        <div class="page-content-info">
            <div class="page-content-info-hero-image">

            </div>
            <div class="page-content-info-title">
                <h1>Emcompasses various treatment</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nobis repellendus numquam. Ad sed amet aspernatur earum sequi qui mollitia. Suscipit quo mollitia ipsa sapiente numquam quaerat neque vel harum?
                    Voluptatem, facilis reiciendis tenetur velit nemo obcaecati id amet molestiae et, cupiditate quasi ad? Saepe nostrum alias iste doloribus harum voluptas unde necessitatibus quasi tenetur neque perferendis, aperiam quod ex!</p>
                <p>A physiotherapist will ask you about your current level of activity and any particular problems you’re having. They will also examine your joints to assess your muscle strength and the range of movement in your joints. Exercises and activities to meet your individual needs. </p>
            </div>
            <div class="page-content-info-images">
                <div class="page-content-info-image page-content-info-image1">

                </div>
                <div class="page-content-info-image page-content-info-image2">

                </div>
            </div>
            <div class="page-content-info-points">
                <ul>
                    <li><span><i class="fa-solid fa-circle-check"></i></span>
                        <p>Neck and back pain caused by problems in the muscles and skeleton</p>
                    </li>
                    <li><span><i class="fa-solid fa-circle-check"></i></span>
                        <p>Pelvic issues, such as bladder and bowel problems related to childbirth</p>
                    </li>
                    <li><span><i class="fa-solid fa-circle-check"></i></span>
                        <p>Loss of mobility because of trauma to the brain or spine, or due to diseases such as</p>
                    </li>
                    <li><span><i class="fa-solid fa-circle-check"></i></span>
                        <p>Fatigue, pain, swelling, stiffness and loss of muscle strength, for example during cancer</p>
                    </li>
                </ul>
            </div>
            <div class="page-content-info-faq">
                <h1>Frequently Asked Questions</h1>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <div class="faq-section">
                    <div class="faq-item">
                        <button class="faq-question">What should I expect during my first physiotherapy session?</button>
                        <div class="faq-answer">
                            <p>You’ll discuss your symptoms, physical activity, and undergo an assessment of movement and strength. A personalized treatment plan will follow.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Do I need a referral to see a physiotherapist?</button>
                        <div class="faq-answer">
                            <p>No, most physiotherapists accept direct bookings without a doctor’s referral. Check with your insurance if needed.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">How long does a session last?</button>
                        <div class="faq-answer">
                            <p>Sessions typically last 30 to 60 minutes, depending on your treatment plan and needs.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">Cost of sat before and wow so that including due?</button>
                        <div class="faq-answer">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque repellendus natus perspiciatis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- --------------start of the footer section----------------- -->
    <?php include './footer.php' ?>



    <!-- ---------------script for the Faq section---------------- -->
    <script>
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const currentItem = button.closest('.faq-item');
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== currentItem) {
                        item.classList.remove('active');
                    }
                });
                currentItem.classList.toggle('active');
            });
        });
    </script>


    <!-- -----------script link for the navbar and sidebar-------------- -->
    <script src="./navbar-sidebar.js"></script>
</body>

</html>