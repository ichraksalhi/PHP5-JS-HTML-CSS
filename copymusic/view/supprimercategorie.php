<?PHP
include "../core/categorieC.php";
$controlcategorie =new CategorieC();
if (isset($_POST["id"])){
	$controlcategorie->supprimercategorie($_POST["id"]);
	header('Location: categorie.php');
}

?>