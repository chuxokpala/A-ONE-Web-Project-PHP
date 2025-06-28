<?php include('includes/header.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="background-imagex1" id="background-imagex1">
            <div class="background-imagex2" style="background-image: url('assets/web images/Home Page x4.jpg');">
                <h1>Our Services</h1>
                <p>Explore our specialised services</p>
            </div>
        </div>
    </section>
    
    <!-- Welcome Section -->
    <section class="welcome" id="welcome">
        <div class="welcom-mssg">
            <h3>Our Service Offerings</h3>               
            <p>Explore our range of services, all designed to optimize efficiency, sustainability, and performance in the energy sector.</p>
            <p>We welcome private individuals, businesses, NGOs and government bodies looking to execute sustainable initiatives and projects.</p>
        </div>
    </section>
    
    <!-- Our Services -->
    <section id="services">
        <div class="section-heading">
            <h3>Our Services</h3>
            <p>Our range of services are designed to optimize efficiency, sustainability, and performance in the energy sector.</p>
        </div>

         <div class="services-container">

            <!-- Project Delivery -->
            <div class="service-card">
                <img src="./assets\web images\Project Management x.png" alt="Project Development" class="service-image">
                <h3 class="service-title">Project Delivery</h3>
                <p class="service-description">
                    We develop and implement end-to-end energy systems for including solar PV, mini-grids, and conventional electrical infrastructure with a focus on quality, reliability, and speed.
                </p>
                <a href="contact.php" class="read-more">Contact Us</a>
            </div>  
            
             <!-- Energy Advisory -->
            <div class="service-card">
                <img src="./assets\web images\Consulting x.png" alt="Strategic Consulting" class="service-image">
                <h3 class="service-title">Energy Advisory</h3>
                <p class="service-description">We provide strategic guidance on system optimization, regulatory compliance, feasibility studies, and commercial agreements, enabling clients to make informed, efficient energy decisions.</p>
                <a href="contact.php" class="read-more">Contact Us</a>
            </div>

             <!-- Investments -->
            <div class="service-card">
                <img src="./assets\web images\Financial Services.png" alt="Financial Advisory" class="service-image">
                <h3 class="service-title">Investments</h3>
                <p style="margin-bottom: 40px" class="service-description">We invest in and co-develop clean energy projects, bringing both capital and technical expertise to scale viable, bankable and impactful solutions.</p>
                <a  href="contact.php" class="read-more">Contact Us</a>
            </div>

            <!-- Capacity Development -->
            <div class="service-card">
                <img src="./assets\web images\Energy Solutions xa.png" alt="Energy Solutions" class="service-image">
                <h3 class="service-title">Capacity Development</h3>
                <p class="service-description">We offer technical training and broader capacity-building programs to equip individuals and institutions with the skills to operate, manage, and sustain energy systems</p>
                <a href="contact.php" class="read-more">Contact Us</a>
            </div> 
        </div>
    </section> 

    <!-- Achievements -->
    <section class="achievements">
        <h2>Our Achievements</h2>
        <div class="stats">
            <div class="stat">
                <h3>500+</h3>
                <p>Happy Clients</p>
            </div>
            <div class="stat">
                <h3>100+</h3>
                <p>Projects Completed</p>
            </div>
        </div>
    </section>

    <!-- Our Store -->
    <!--<section id="our-estore">-->
<section id="our-estore" class="bg-primary text-white text-center py-4">

        <h2>Visit our Store</h2>
        <p>Explore the range of products we offer to meet your needs</p>
        <!--<a href="shop.php" class="btn">Store</a>-->
        <a href="shop.php" class="btn btn-outline-light">Store</a>

    </section>

    <!-- load your Javascript file here
    <script src="js/services.js"></script> -->

</body>


<?php include('includes/footer.php'); ?>
