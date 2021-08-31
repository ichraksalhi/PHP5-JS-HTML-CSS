<?PHP
include "../core/panier_produitc.php";
include "../entities/panier.php";
include "../core/panierc.php";

if (isset($_POST["id"])){

	$cookie_name = "panier";
  $panC=new panier_produitc();
  $panC-> supprimerpanier_produit($_COOKIE[$cookie_name],$_POST["id"]);

	$panierrc = new panierc();
	$panierrc->modifierpaniermoin($_COOKIE[$cookie_name],300); //prix 300Dt ?? forom table produit
header('Location:  cart.php');
}

?>
