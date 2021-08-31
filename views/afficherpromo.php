<?php
/*
* Author: Rohit Kumar
* Website: iamrohit.in
* Date: 09-03-2016
* App Name: Star rating system
* Description: Star rating demo using Jquery, PHP and Mysql
*/
include_once('rating.php')
?>

<?php
include "../core/promoc.php";
//include "rating.php";
//include_once('rating.php');



$controlpromo =new PromoC();

$listepromo=$controlpromo->afficherPromo();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
<link href="css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
    <script src="js/star-rating.min.js" type="text/javascript"></script>
    

    <!-- Title -->
    <title>Gaboudia-music</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

</head>

<body>
   

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="musica-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="musicaNav">

                        <!-- Nav brand -->
                       <p> <strong> Gaboudia-music </strong>  </p>

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
                                <ul>
                                    <li><a href="index.php">acceuil</a></li>
                                    <li><a href="../views/ajoutReclamationproduit.html">reclamation produit</a></li>
                                    <li><a href="bloge.php">vesiter notre blog</a></li>
                                   
                                    <li><a href="#">panier</a>
                                        
                                    </li>
                                    <li><a href="#">produits</a> 
                                        <div class="megamenu"> 
                                            
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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Gaboudia music<span>Gaboudia music</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">instruments</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Gaboudia music</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-2.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">pianos<span>pianos</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">tout les catégories</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Pianos</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-3.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Guitares <span>Guitares</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">tout les catégories</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Guitares</h2>
            </div>

        </div>
        <!-- bg gradients -->
        <div class="bg-gradients"></div>

        <!-- Slide Down -->
        <div class="slide-down" id="scrollDown">
            <h6>Slide Down</h6>
            <div class="line"></div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-4.jpg);" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2> bienvenue</h2>
                        <h6> on a tous les categories des instruments musicaux </h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>
<div class="fb-video" data-href="https://www.facebook.com/facebook/videos/10153231379946729/" data-width="500" data-show-text="false"><blockquote cite="https://developers.facebook.com/facebook/videos/10153231379946729/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/facebook/videos/10153231379946729/">How to Share With Just Friends</a><p>How to share with just friends.</p>Publiée par <a href="https://www.facebook.com/facebook/">Facebook</a> sur Vendredi 5 décembre 2014</blockquote></div>
                    
                        
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-lg-6">
                    <div class="about-content mb-100">
                        <h4> représentant de fender dans la tunisie </h4>
                        <p> Fender Musical Instruments Corporation, nommé initialement Fender's Radio Service puis Fender Electric Instrument Manufacturing Company, est une société créée par Leo Fender aux États-Unis dans les années 1940.
                        Gaboudia music a signé une parteneriat avec fender en 2014</p>
                        <img src="img/core-img/signature.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Upcoming Shows Area Start ##### -->
    <div class="upcoming-shows-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Nos promotions </h2>
                        <h6> </h6>
                    </div>
                </div>
            </div>
            <div id="fb-root"></div>


            <div class="row">
                <div class="col-12">
                    <!-- Upcoming Shows Content -->
                    <div class="upcoming-shows-content">

                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2> <span></span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    
                                  <!-- <img src="img/bg-img/s1.jpg" alt=""> -->
                                </div>
                                <div class="shows-name">
                              
                                    
                                    
                                 <?PHP
foreach($listepromo as $row){
	?>
	<tr>
	<div> <p> <td><?PHP echo $row['prix_initial']; ?></td> </p> </div> 
    <div> <p> <td><?PHP echo $row['prix_final']; ?></td> </p>  </div>
    <div class="content" > <td><img src="./uploads/<?PHP echo $row['image']; ?>" style="width:150px;height:150px;"></td> </div> 
    
	<div>  <h4> <?PHP echo $row['pourcentage']; ?></td> </h4> </div> 
	<div> <p> <td><?PHP echo $row['desct']; ?></td> </p> </div> 
    <input value="<?= getRatingByProductId(connect(), $row['id']); ?>" type="number" class="rating" min=0 max=5 
    step=0.1 data-size="md" data-stars="5" productId=<?php echo $row['id']; ?>>

    <!-- ******* partage fcb -->

     <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script> 
<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

    <!-- ##### Footer Area Start ##### -->
   <!-- <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a></div>
-->
    <style>




.content {
  display: flex;
  flex-direction: column;
  align-items: center;
  align-content: center;
  background: #2b113f;
}

.image1 {
  margin: 10px;
  clip-path: polygon(
    0% 0%,
    100% 0%,
    100% 75%,
    75% 75%,
    75% 100%,
    50% 75%,
    0% 75%
  );
  animation: clipOut 4s infinite;
}

</style>
   


	<?PHP
}
?> 

 <script type="text/javascript">
        $(function(){
               $('.rating').on('rating.change', function(event, value, caption) {
                productId = $(this).attr('productId');
                $.ajax({
                  url: "rating.php",
                  dataType: "json",
                  data: {vote:value, productId:productId, type:'save'}, 
                  success: function( data ) {
                     alert("rating saved");
                  },
              error: function(e) {
                // Handle error here
                console.log(e);
              },
              timeout: 30000  
            });
              });

           


        });
    </script>
 

 

   


                                   <!--  <h6>Guitares</h6>
                                    <p>fender,yamaha,ibanez</p> -->
                                </div>
                            </div>
                            <div class="shows-location">
                             
                            </div>
                            <div class="shows-time">
                             
                            </div>
                            <div class="buy-tickets">
                                <!-- <a href="#" class="btn musica-btn">voir</a> farouk --> 
                            </div>
                        </div>

                        

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Upcoming Shows Area End ##### -->

    <!-- ##### Music Player Area Start ##### -->
    <div class="music-player-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="music-player-slides owl-carousel">

                        <!-- Single Music Player -->
                        

                        <!-- Single Music Player -->
                       

                        <!-- Single Music Player -->
                       

                        <!-- Single Music Player -->
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Music Player Area End ##### -->

    <!-- ##### Featured Album Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Thumbnail -->
                        <div class="album-thumbnail h-100 bg-img" style="background-image: url(img/bg-img/bg-4.jpg);"></div>

                        <!-- Album Songs -->
                        <div class="album-songs h-100">

                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                                
                                <div class="album-buy-now">
                                    
                                </div>
                            </div>

                            <div class="album-all-songs">

                                <!-- Music Playlist -->
                                <div class="music-playlist">
                                    <!-- Single Song -->
                                    <div class="single-music active">
                                        <h6> </h6>
                                        
                                    </div>

                                    <!-- Single Song -->
                                    <div class="single-music">
                                        
                                        <h6> Qui se cache dernière Gamoudia? </br>
                                        	Découvrez pourquoi les musiciens ont fait de gaboudiamusic.tn, le numéro 1 tunisien de la vente d'instruments de musique. </br></br>
                                        	gaboudiamusic.tn s'engage!</br>
                                        	90% des commandes passés sur musicplus.tn sont livrées en 24h.</br></br>
                                        	Comparer pourquoi faire?</br>
                                            Convaincu de vous proposer les meilleurs prix. gaboudiamusic.tn vous rembource la différence si vous trouvez moin cher ailleur.</br></br>
                                            Financer à votre rythme!</br>
                                            Avec gaboudiamusic.tn, votre rêve est à portée de main, notamment en 3, 6, 12 et jusqu'à 36 mois.</br></br>



                                        </h6>
                                        

                                        
                                    </div>

                                    <!-- Single Song -->
                                    
                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Album Area End ##### -->

    <!-- ##### Music Artists Area Start ##### -->
    <div class="musica-music-artists-area d-flex flex-wrap clearfix">
        <!-- Music Search -->
        <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/bg-9.jpg);">
            <!-- Content -->
            <div class="music-search-content">
                <h2>Qualité</h2>
                <h4>chercher le meilleur son chez nous !</h4>
            </div>
        </div>

        <!-- Artists Search -->
        <div class="artists-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="600ms" style="background-image: url(img/bg-img/bg-1.jpg);">
            <!-- Content -->
            <div class="music-search-content">
                <h2>Musique</h2>
                <h4>cherchez votre instrument chez nous !</h4>
            </div>
        </div>
    </div>
    <!-- ##### Music Artists Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        
                        

</p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Link</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="index.html">Acceuil</a></li>
                                <li><a href="contact.html">contactez-nous</a></li>
                                <li><a href="#">panier</a></li> <!-- page firas -->
                                <li><a href="#">produits</a></li><!-- page farouk -->
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                          
                        </div>
                        
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
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>
<div class="fb-video" data-href="https://www.facebook.com/facebook/videos/10153231379946729/" data-width="500" data-show-text="false"><blockquote cite="https://developers.facebook.com/facebook/videos/10153231379946729/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/facebook/videos/10153231379946729/">How to Share With Just Friends</a><p>How to share with just friends.</p>Publiée par <a href="https://www.facebook.com/facebook/">Facebook</a> sur Vendredi 5 décembre 2014</blockquote></div>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script> 
<div class="fb-post" data-href="https://www.facebook.com/20531316728/posts/10154009990506729/" data-width="500" data-show-text="true"><blockquote cite="https://developers.facebook.com/20531316728/posts/10154009990506729/" class="fb-xfbml-parse-ignore">Publiée par <a href="https://www.facebook.com/facebook/">Facebook</a> sur&nbsp;<a href="https://developers.facebook.com/20531316728/posts/10154009990506729/">Jeudi 27 août 2015</a></blockquote></div>
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
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