<header class="header" >
    <!-- Topbar -->
    <!-- <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    <ul class="top-link">
                        <li><a href="#">About</a></li> 
                        <li><a href="#">Doctors</a></li>
                       <li><a href="#">Contact</a></li>
                         <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-7 col-12">
                    <ul class="top-contact">
                        <li><i class="fa fa-phone"></i>+1 1234 56789</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@cognicloudnexus.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="img/logo-with-c.png" width="80" alt="#"></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-9 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu navbar-nav-menu">
                                    <?php
                                    $page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
                                    ?>
                                    <li class="<?= $page == 'index.php' ? 'active':''; ?>"><a href="index.php">Home</a></li>
                                    <li class="<?= $page == 'cognitive_ai.php' ? 'active':''; ?>"><a href="cognitive_ai.php" >Cognitive AI</a></li>
                                    <li class="<?= $page == 'cloud.php' ? 'active':''; ?>"><a href="cloud.php">Cloud solutions</a></li>
                                    <li class="<?= $page == 'network_services.php' ? 'active':''; ?>"><a href="network_services.php">Network Services</a></li>
                                    <li class="<?= $page == 'platform.php' ? 'active':''; ?>"><a href="platform.php">Platforms</a></li>
                                    <!-- <li><a href="#">Pages <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blogs <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-single.html">Blog Details</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li><a href="contact.html">Contact Us</a></li> -->
                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                    <!-- <div class="col-lg-2 col-12">
                        <div class="get-quote">
                            <a href="appointment.html" class="btn">Book Appointment</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>