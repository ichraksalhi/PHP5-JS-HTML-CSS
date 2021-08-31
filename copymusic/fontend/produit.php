<!DOCTYPE html>
<?php
include "../core/produitc.php";
$controlpromo =new PromoC();    
if (isset($_GET['id'])){
$listepromo=$controlpromo->recupererpromo($_GET['id']);
        foreach($listepromo as $row){
		$prix_initial=$row['prix_initial'];
		$prix_final=$row['prix_final'];
		$pourcentage=$row['pourcentage'];
		$desct=$row['desct'];
        $image = $row['image'];
    }
        
}
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Gaboudia-music</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="img/core-img/compact-disc.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="musica-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="musicaNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                  <div class="classynav">
                                <ul>
                                    <li><a href="http://localhost/copymusic/fontend/index.php">acceuil</a></li>
                                    <li><a href="ajoutReclamationproduit.html">contactez-nous</a></li>
                                    <li><a href="#">panier</a>
                                        <ul class="dropdown">
                                            <li><a href="http://localhost/copymusic/fontend/index.php">acceuil</a></li>
                                            <li><a href="about-us.html"> </a></li>
                                            <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="elements.html">produits</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">produits</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="produit.php?id=8">Produit1</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="concert-tours.html">Concert &amp; Tours</a></li>
                                                <li><a href="blog.html">News</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                   
                                </ul>
                                <!-- Social Button -->
                                <div class="top-social-info">
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb5.jpg);">
        <div class="bradcumbContent">
            <h2>Elements</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area mt-30 section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- ========== Buttons ========== -->
                <div class="row">
                    <!-- About Thumbnail -->
                    <div class="col-12 col-lg-6">
                        <div class="about-thumbnail mb-100">
                            <img src="./../view/uploads/<?php echo $image; ?>" alt="" style="width:600;height:600px;">
                        </div>
                    </div>
                    <!-- About Content -->
                    <div class="col-12 col-lg-6">
                        <div class="about--content mb-100">
                            <!-- <h4><?php echo $nom; ?> </h4> --> 
                            <p><?php echo $desct; ?> </p>
                            <!-- Key Notes -->
                            <ul class="key-notes">
                                <li><div class="check"><img src="img/core-img/check.png" alt=""></div>PRIX_INITIAL : <?PHP echo $prix_initial; ?></li>
                                <li><div class="check"><img src="img/core-img/check.png" alt=""></div>PRIX_FINAL: <?PHP echo $prix_final; ?></li>
                                <li><div class="check"><img src="img/core-img/check.png" alt=""></div> POURCENTAGE : <?PHP echo $pourcentage; ?></li>
                                

                                <li><form method="get" action="ajoutertopanier.php" >

                                    <input type="submit" class="btn musica-btn btn-2 m-2"  name="ajouter" value="AjouterPanier">
                                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                    </form>
                                    </li>
                                    
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- ========== Progress Bars & Accordions ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        <h2>Plus Info</h2>
                    </div>
                </div>


                <!-- ##### Tabs ##### -->
                <div class="col-12">
                    <div class="musica-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Mauris diam</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Ttristique sed posuere</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Lobortis eget metus</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">
                            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="musica-tab-content">
                                    <!-- Tab Text -->
                                    <div class="musica-tab-text">
                                        <p><span>1.</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia natus ut nemo rerum commodi facere culpa nisi temporibus magnam explicabo. Amet enim iure quo dignissimos, optio molestias officia asperiores voluptas possimus ullam sed est atque nulla ab fugit commodi cumque tempora et labore maiores doloremque voluptatibus quam, fugiat, assumenda. Eaque.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="musica-tab-content">
                                    <!-- Tab Text -->
                                    <div class="musica-tab-text">
                                        <p><span>2.</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed maxime ab voluptatem magnam numquam quidem totam architecto, voluptatum optio debitis laborum nisi, fugiat obcaecati quaerat explicabo molestias rem dolor? Doloribus rerum, aliquid, aliquam cupiditate repellat ipsum suscipit ipsam vitae eos quo, eligendi sapiente quisquam placeat aperiam inventore tenetur accusantium, debitis!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="musica-tab-content">
                                    <!-- Tab Text -->
                                    <div class="musica-tab-text">
                                        <p><span>3.</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga rerum error, inventore, debitis cum repellendus excepturi autem animi iste deleniti labore iure voluptatum eligendi, temporibus aperiam, accusantium? Asperiores iusto quia minus, laborum delectus voluptatem nemo iste in. Suscipit minus voluptatem sint quod, deserunt saepe nihil consequatur assumenda modi incidunt similique, qui soluta corporis dolores. Aliquid!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- ========== Milestones ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        <h2>Milestone</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="musica-cool-facts-area">
                        <div class="row">

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact d-flex align-items-end mb-100">
                                    <div class="scf-icon">
                                        <img src="img/core-img/microphone.png" alt="">
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">149</span></h2>
                                        <p>Concerts/Year</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact d-flex align-items-end mb-100">
                                    <div class="scf-icon">
                                        <img src="img/core-img/compact-disc.png" alt="">
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">439</span>k</h2>
                                        <p>Cd’s Sold</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact d-flex align-items-end mb-100">
                                    <div class="scf-icon">
                                        <img src="img/core-img/controls.png" alt="">
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">245</span></h2>
                                        <p>Amazing Ideas</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact d-flex align-items-end mb-100">
                                    <div class="scf-icon">
                                        <img src="img/core-img/calendar.png" alt="">
                                    </div>
                                    <div class="scf-text">
                                        <h2><span class="counter">128</span></h2>
                                        <p>Calendar Events</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ========== Icon Boxes ========== -->
                <div class="col-12">
                    <div class="elements-title mb-50">
                        <h2>Icon Boxes</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">

                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-service-area mb-100">
                                <div class="course-title d-flex align-items-end">
                                    <span>01</span>
                                    <h4>Great Services</h4>
                                </div>
                                <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-service-area mb-100">
                                <div class="course-title d-flex align-items-end">
                                    <span>02</span>
                                    <h4>Amazing Music</h4>
                                </div>
                                <p>Posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-service-area mb-100">
                                <div class="course-title d-flex align-items-end">
                                    <span>03</span>
                                    <h4>Great Services</h4>
                                </div>
                                <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Elements Area End ***** -->

    <!-- ##### CTA Area Start ##### -->
    <div class="musica-cta-area section-padding-100 bg-img bg-overlay2" style="background-image: url(img/blog-img/4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex justify-content-between align-items-center">
                        <div class="cta-text">
                            <h4>Contact us now</h4>
                            <h2>Do you have a question?</h2>
                            <h6>Morbi quis venenatis augue, a tincidunt libero. Sed id porttitor elit, eu ultricies mauris.</h6>
                        </div>
                        <div class="cta-btn">
                            <a href="#" class="btn musica-btn">elements</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>About</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">The team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Links</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">The team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Social</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Snapchat</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Subscribe</h4>
                        </div>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
