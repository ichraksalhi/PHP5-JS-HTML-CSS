<?PHP
include "../core/produitc.php";
$controlproduit =new ProduitC();
if (isset($_POST["id"])){
	$controlproduit->supprimerProduit($_POST["id"]);
	header('Location: produit.php');
}

?>