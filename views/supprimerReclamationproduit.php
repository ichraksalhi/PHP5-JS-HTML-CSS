<?PHP
include "../core/reclamationproduitC.php";
$reclamationproduitC=new ReclamationproduitC();
if (isset($_POST["id"])){
	$reclamationproduitC->supprimerReclamationproduit($_POST["id"]);
	header('Location: afficherReclamationproduit.php');
}

?>