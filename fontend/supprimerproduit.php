<?PHP
include "../core/panier_produitc.php";
include "../entities/panier.php";
include "../core/panierc.php";
include "../core/produitc.php";

if (isset($_POST["id"])){

	$cookie_name = "panier";
  $panC=new panier_produitc();
  $panC-> supprimerpanier_produit($_COOKIE[$cookie_name],$_POST["id"]);

	$panierrc = new panierc();
	$controlproduit =new ProduitC();

	$listeproduit=$controlproduit->recupererproduit($_POST["id"]);
        foreach($listeproduit as $row){
		$prix=$row['prix'];
    }
	
	$panierrc->modifierpaniermoin($_COOKIE[$cookie_name],$prix); 
header('Location:  cart.php');
}

?>
