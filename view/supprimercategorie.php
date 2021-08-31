<?PHP
include "../core/categorieC.php";
include "../core/produitC.php";
$controlcategorie =new CategorieC();
$controlprod =new produitC();
if (isset($_POST["id"])){
	$controlcategorie->supprimercategorie($_POST["id"]);
	$controlprod->supprimerCatProduit($_POST["id"]);
	header('Location: categorie.php');
}

?>