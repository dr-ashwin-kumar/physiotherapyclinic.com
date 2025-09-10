<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog1 | Sri Sai Balaji Physiotherapy Clinic</title>
    <link rel="icon" href="./assets/images/favicon.png" type="x-image/icon">

    <!-- --------------link for the styling service page--------------- -->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./blog1.css">
    <link rel="stylesheet" href="./blog-sidebar.css">


    <!-- --------------link for the font awesome icons--------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=download" />

</head>
<body>
    <!-- --------------start of the topbar--------------- -->
    <?php include './topbar.php' ?>

    <!-- --------------start of the navber--------------- -->
    <?php include './navbar.php' ?>

    <!-- --------------start of the page title section--------------- -->

    <div class="page-title-section">
        <div class="page-title">
            <h2>Blog</h2>
            <div class="page-title-nav">
                <a href="./index.php">Home</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="#">Services</a>
                <span><i class="fa-solid fa-angle-right"></i></span>
                <a href="./blog1.php">Blog1</a>
            </div>
        </div>
    </div>

    <!-- ----------------start of the blog content section---------------- -->
    <div class="page-content-sidebar-section">
        <div class="page-content-section">

        </div>
        <div class="page-blog-sidebar">
            <?php include './blog-sidebar.php' ?>
        </div>
    </div>


    <!-- --------------start of the footer section----------------- -->
    <?php include './footer.php' ?>

    <!-- -----------script link for the navbar and sidebar-------------- -->
    <script src="./navbar-sidebar.js"></script>
</body>
</html>