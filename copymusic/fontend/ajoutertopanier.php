<?PHP
include "../entities/panier_produit.php";
include "../core/panier_produitc.php";
include "../entities/panier.php";
include "../core/panierc.php";

if (isset($_GET['id'])){

	$cookie_name = "panier";


//Partie3
if(!isset($_COOKIE[$cookie_name])) {

	$panierrc = new panierc();

    $token = random_bytes(8);
	//$token1 = bin2hex($token);
	$pan = new panier_produit($token,$_GET['id']);
	setcookie($cookie_name, $token, time() + (86400 * 30), "/"); // 86400 = 1 day
	$panC=new panier_produitc();
	$panC->ajouterpanier_produit($pan); // list produit

	$panierr  = new panier($token,125); //create panier  ajouter le prix de prduit (id )
	$panierrc->ajouterpanier($panierr);

	// create panier

} else {

	$pan = new panier_produit($_COOKIE[$cookie_name],$_GET['id']);
	$panierrc = new panierc();
	$panC=new panier_produitc();
	$panC->ajouterpanier_produit($pan); // list produit
	//get produit prix

	$panierrc->modifierpanier($_COOKIE[$cookie_name],300); // modifier le total avec prix de produit (id)
	// modifier panier
}

header('Location:  cart.php');

}else{
	echo "vérifier le produit";
}
//*/

?>
