<?PHP
include "../core/produitc.php";
include "../core/categorieC.php";


$controlproduit =new ProduitC();
$controlcate = new CategorieC(); 
$listecat=$controlcate->affichercategorie();

if(isset($_GET['order'])) {
   $ord = $_GET['order'];
}else{
	$ord = 0;
}



if ( $ord == 1){
	$listeproduit=$controlproduit->afficherProduit_ord_aes();
}else if($ord == 2)
{
		$listeproduit=$controlproduit->afficherProduit_ord_des();
}
else{
		$listeproduit=$controlproduit->afficherProduit();

}
if(isset($_GET['cat'])) {
   $listeproduit=$controlproduit->afficherProduitcat($_GET['cat']);
}


if(isset($_GET['ser'])){
	   $listeproduit=$controlproduit->search($_GET['ser']);
}




?>

<!Doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Produit</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="prod/css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="prod/css/owl.carousel.min.css">
    <link rel="stylesheet" href="prod/css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="prod/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="prod/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="prod/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="prod/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="prod/css/custom.css">


    <!-- Modernizr JS -->
    <script src="prod/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->

        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="prod/images/product-2/sm-smg/1.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="prod/images/product-2/sm-smg/2.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.html">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <!-- End Bradcaump area -->
        <!-- Start Product Grid -->
        <section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                        <div class="htc__product__rightidebar">
                            <div class="htc__grid__top">
                                <div class="htc__select__option">
                                    
                                    <select class="ht__select" onchange="location = this.value;">
                                        <option>Show by</option>
                                        <option value="shop.php?order=1 " >Sort by Order asc</option>
                                        <option value="shop.php?order=2" >Sort by Order desc</option>
                                   
                                    </select>
                                </div>
                                <div class="ht__pro__qun">
                             
                                </div>
                                <!-- Start List And Grid View -->
                                <ul class="view__mode" role="tablist">
                                    <li role="presentation" class="grid-view active"><a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                </ul>
                                <!-- End List And Grid View -->
                            </div>
                            <!-- Start Product View -->
                            <div class="row">
                                <div class="shop__grid__view__wrap">
                                    <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                        <!-- Start Single Product -->
										                                 <?PHP
												foreach($listeproduit as $rowp){
											?>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                            <div class="category" style="width:293px; height:500px;">
                                                <div class="ht__cat__thumb">
                                                    <a  href="produit.php?id=<?PHP echo $rowp['id']; ?>">
                                                        <img src="./../view/uploads/<?PHP echo $rowp['image']; ?>"" alt="product images" >
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                      
	
                                                        <li><a href="produit.php?id=<?PHP echo $rowp['id']; ?>"><i class="icon-handbag icons"></i></a></li>
														

                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="produit.php?id=<?PHP echo $rowp['id']; ?>"><?PHP echo $rowp['nom']; ?></a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <li><?PHP echo $rowp['prix']; ?> dt</li>
                                                    </ul>
                                                </div>
                                            </div>
											
                                        </div>
										<?PHP
}
?>
										
					
											
                                  
										
                                        <!-- End Single Product -->
             
         
                                    </div>
                    
                                </div>
                            </div>
                            <!-- End Product View -->
                        </div>
                        <!-- Start Pagenation -->
                 
                        <!-- End Pagenation -->
                    </div>
                    <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
                        <div class="htc__product__leftsidebar">
                            <!-- Start Prize Range -->
                            <div class="htc-grid-range">
                                <h4 class="title__line--4">Produit</h4>
                                <div class="content-shopby">
                                    <div class="price_filter s-filter clear">
                                        <form action="" method="GET">
                                         
                                            <div class="slider__range--output">
                                                <div class="price__output--wrap">
                                                    <div class="price--output">
                                                        <input name="ser" type="text" placeholder = " Mot clé ...">
                                                    </div>
                                               
														<input type="submit" value ="Rechercher" class="price--filter">
											
                                            
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Prize Range -->
                            <!-- Start Category Area -->
                            <div class="htc__category">
                                <h4 class="title__line--4">categories</h4>
                                <ul class="ht__cat__list">
							   <?PHP
                                        foreach($listecat as $row){
								?>
                                    <li><a href="shop.php?cat=<?php echo $row['id'] ; ?>"> <?php echo $row['nom'] ; ?></a></li>
                            
                                     <?php 
                                                                            
                                    }
									?>
                                </ul>
                            </div>
        
   
                            <!-- End Best Sell Area -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Grid -->
       


        <!-- End Footer Style -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="prod/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="prod/js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="prod/js/plugins.js"></script>
    <script src="prod/js/slick.min.js"></script>
    <script src="prod/js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="prod/js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="prod/js/main.js"></script>

</body>

</html>