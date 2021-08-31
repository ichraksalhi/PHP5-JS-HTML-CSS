<!DOCTYPE html>
<?PHP
include "../core/reclamationproduitC.php";
include('check.php');
//include "../session/session.php";



//$user = Session::getUserSession();
//$idUser=$user->getId() ;

//$panier1C=new PanierC();
//$listePaniers=$panier1C->afficherPaniersByID($id);


$reclamationproduit1C=new ReclamationproduitC(); 
$listeReclamationproduits=$reclamationproduit1C->afficherReclamationproduitsByID($idUser);
$total = 0;

//var_dump($listeEmployes->fetchAll());
?>
<html lang="en">
<head>
	<title>Table V05</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../Table/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Table/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Table/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Table/css/main.css">
<!--===============================================================================================-->
 <!-- Favicon -->
    <link rel="icon" href="../musica2/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../musica2/style.css">
</head>
<body>
	<!-- ##### CTA Area Start ##### -->
    <div class="musica-cta-area section-padding-100 bg-img bg-overlay2" style="background-image: url(../musica2/img/blog-img/4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex justify-content-between align-items-center">
                        <div class="cta-text">
                            <h4></h4>
                            <h2>           vos reclamations  </h2>
                            <h6> </h6>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1">
					<div class="table100-firstcol">
						<table>
							<thead>
								
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
					<form  method="POST" >
					 <input type="text" placeholder="id" name="choix" />
									  <input type="submit" name="rechercher" value="rechercher"> 
								
                               </form>
							   <?php
							    if (isset($_POST["rechercher"]) && isset($_POST["choix"]) ){
						
							   $listeReclamationproduits=$reclamationproduit1C->rechercher($_POST["choix"]);
								}
								                                                    
							   ?>
							   <form  method="POST" class="subscribe-form" >
					 

									    <input type="text" placeholder="id" name="ct" />
									  <input type="submit" name="trier" value="trier"> 
									  <select name="f" value="" placeholder="Street address" id="billing_address_1"  class="input-text ">
                                       <option value="1">traité</option>
                                       <option value="0">non traité</option>
                                 </select>
                    <input type="submit" name="filtrer" value="filtrer"> 

								
							   </form>
							   
							   
							   <?php

if (isset($_POST["filtrer"])){
            
	$listeReclamationproduits=$reclamationproduit1C->filtrerReclamationproduit($_POST['f']);
   
	 }
							   
								if (isset($_POST["trier"])) {   
									$listeReclamationproduits=$reclamationproduit1C->trierReclamationproduit($_POST["ct"]);
							            	}                                                    
							   ?>
					
					<div class="wrap-table100-nextcols js-pscroll">
						<div class="table100-nextcols">
							<table>
								<thead>
									<tr class="row100 head">
									
										<th class="cell100 column6">TypeP</th>
										<th class="cell100 column7">CategorieP</th>
										<th class="cell100 column8">NumeroP</th>
										<th class="cell100 column8">DescriptionP</th> 
										<th class="cell100 column8">numerofacture</th>
										<th class="cell100 column8">etat</th>
									</tr>
								</thead>
								<tbody>
									<?PHP
                                 foreach($listeReclamationproduits as $row){
									if( $row['etat']==1)
                                    $color = "#0B3B0B";
                                else if($row['etat']==0)
                                    $color = "#8A0808";
                                     ?>
	                                 
									<tr class="row100 body" style="background: <?php echo $color?>">
										
										<td class="cell100 column6"><?PHP echo $row['typeP']; ?></td>  
										<td class="cell100 column7"><?PHP echo $row['categorieP']; ?></td>
										<td class="cell100 column8"><?PHP echo $row['numeroP']; ?></td>
										<td class="cell100 column8"><?PHP echo $row['descriptionP']; ?></td>
										<td class="cell100 column8"><?PHP echo $row['numerofacture']; ?></td>
										<td class="cell100 column8"><?PHP echo $row['etat']; ?></td>
											
										</td>
									</tr>






								
									<td><form method="POST" action="supprimerReclamationproduit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierReclamationproduit.php?id=<?PHP echo $row['id']; ?>"> 
	Modifier</a></td>
	</tr>
	<?PHP
}
?>



							   
				                  </form>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	  <!-- ##### CTA Area Start ##### -->
    <div class="musica-cta-area section-padding-100 bg-img bg-overlay2" style="background-image: url(../musica2/img/blog-img/4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex justify-content-between align-items-center">
                        <div class="cta-text">
                            <h4></h4>
                            <h2>vous n'avez pas trouver ta reclamation ? </h2>
                            <h6> entrer id ici </h6>
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
                

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        
                        
                    </div>
                </div>

                <!-- Footer Widget Area -->
                

                <!-- Footer Widget Area -->
                
                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>recherche</h4>
                        </div>
                   <!--     <form action="#" method="POST" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail">
                            <button type="submit">recherche</button>
                        </form>-->
                        <form  method="POST" class="subscribe-form" >
					 <input type="text" placeholder="entrer l'id" name="choix" id="subscribeemail"/>
						 <button type="submit" name="rechercher" value="rechercher">chrecher</button> 


									   
                               </form>
							   <?php
							    if (isset($_POST["rechercher"]) && isset($_POST["choix"]) ){
						
							   $listeReclamationproduits=$reclamationproduit1C->rechercher($_POST["choix"]);
								}
								                                                   
							   ?>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});

		
		
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>