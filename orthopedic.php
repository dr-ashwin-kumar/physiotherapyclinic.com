<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orthopedic | Sri Sai Balaji Physiotherapy Clinic</title>
    <link rel="icon" href="./assets/images/favicon.png" type="x-image/icon">
    
    <!-- --------------link for the styling service page--------------- -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./orthopedic.css">
    <link rel="stylesheet" href="./services-sidebar.css">


    <!-- --------------link for the font awesome icons--------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
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
            <h3>SERVICE</h3>
            <h1>Orthopedic</h1>
            <div class="page-title-nav">
                <a href="./index.php">Home</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Services</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Orthopedic</a>
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

        </div>
    </div>




    <!-- --------------start of the footer section----------------- -->
    <?php include './footer.php' ?> 

</body>
</html>