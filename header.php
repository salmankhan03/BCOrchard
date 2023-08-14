<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Drivin - Driving School Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.cdnfonts.com/css/georgia?styles=27676" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <nav class="sticky navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="img/logo.png" alt="logo">
        </a>
        <button type="button" class="navbar-toggler me-4 mr-2" style="background: #fff; border: none" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse justify-content-end navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" id="index" class="nav-item nav-link">Home</a>
                <div class="nav-item dropdown">
                    <a href="philosophy.php" id="our_philosophy" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Company</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="philosophy.php" id="philosophy" class="dropdown-item">Philosophy</a>
                        <a href="our_values.php" id="our_values" class="dropdown-item">Our Values</a>
                        <a href="sustainibility.php" id="sustainibility" class="dropdown-item">Sustainability</a>
                        <a href="about_us.php" id="about_us" class="dropdown-item">About Us</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="philosophy.php" id="our_product" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Products</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="product-juice.php" id="product-juice" class="dropdown-item">Juice</a>
                        <a href="product-coco-water.php" id="product_coco" class="dropdown-item">Coconut</a>
                    </div>
                </div>

                <!-- <a href="our_values.php" id="our_values" class="nav-item nav-link">Our Values</a>
                <a href="sustainibility.php" id="sustainibility" class="nav-item nav-link">Sustainability</a> -->
                
                <a href="contact-us.php" id="contact-us" class="nav-item nav-link">Contact</a>
                
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <script>
        const currentPathLink = window.location.pathname.split("/");
        const path = currentPathLink[currentPathLink.length - 1];

        const mediaQuery = window.matchMedia("(min-width: 821px)");

        function handleScreenChange(event) {
            if (event.matches) {
                if(path === "index.php"){
                const element = document.getElementById('index');
                element.style=  `
                    height: 2px;
                    color: #9dca00;
                    border-bottom: 2px solid #9dca00;
                ` ;

                }else if(path === "our_values.php") {
                    const element = document.getElementById('our_values');
                    element.style.color = '#9dca00';
                    const elements = document.getElementById('our_philosophy');
                    elements.style = `
                        height: 2px;
                        color: #9dca00;
                        border-bottom: 2px solid #9dca00;
                    `;
                } else if(path === "philosophy.php") {
                    const element = document.getElementById('philosophy');
                    element.style.color = '#9dca00';
                    const elements = document.getElementById('our_philosophy');
                    elements.style = `
                        height: 2px;
                        color: #9dca00;
                        border-bottom: 2px solid #9dca00;
                    `;
                } else if(path === "sustainibility.php") {
                    const element = document.getElementById('sustainibility');
                    element.style.color = '#9dca00';
                    const elements = document.getElementById('our_philosophy');
                    elements.style = `
                        height: 2px;
                        color: #9dca00;
                        border-bottom: 2px solid #9dca00;
                    `;
                }
                else if(path === "about_us.php") {
                    const element = document.getElementById('about_us');
                    element.style.color = '#9dca00';
                    const elements = document.getElementById('our_philosophy');
                    elements.style = `
                        height: 2px;
                        color: #9dca00;
                        border-bottom: 2px solid #9dca00;
                    `;
                }
                else if(path === "product-coco-water.php") {
                    const element = document.getElementById('product_coco');
                    element.style.color = '#9dca00';
                    const elements = document.getElementById('our_product');
                    elements.style = `
                        height: 2px;
                        color: #9dca00;
                        border-bottom: 2px solid #9dca00;
                    `;
                }
                else if(path === "product-juice.php") {
                    const element = document.getElementById('product-juice');
                    element.style.color = '#9dca00';
                    const elements = document.getElementById('our_product');
                    elements.style = `
                        height: 2px;
                        color: #9dca00;
                        border-bottom: 2px solid #9dca00;
                    `;
                }
                else if(path === "contact-us.php") {
                    const element = document.getElementById('contact-us');
                    element.style = `
                        height: 2px;
                        color: #9dca00;
                        border-bottom: 2px solid #9dca00;
                    `;
                }
            }   
        }

        handleScreenChange(mediaQuery);
        mediaQuery.addListener(handleScreenChange);

        

    </script>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>