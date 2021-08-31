<?PHP
//include "include dirname(_FILE_) . '/../entities/reclamationproduit.php";
//include "include_once dirname(_FILE_) . '/../core/ReclamationproduitC.php";
include "../entities/reclamationproduit.php";
include "../core/ReclamationproduitC.php"; 
include "../session/session.php";

if(Session::getUserSession()==null) {
	header('Location: ../session/login.php');
}
$user = Session::getUserSession();
$idUser=$user->getId() ;
$etat=0;
//echo $idUser ;
if ( isset($_POST['typeP'])and isset($_POST['categorieP'])and isset($_POST['numeroP'])and isset($_POST['descriptionP'])and isset($_POST['numerofacture'])){
$reclamationproduit1=new reclamationproduit($idUser,$_POST['typeP'],$_POST['categorieP'],$_POST['numeroP'],$_POST['descriptionP'],$_POST['numerofacture'],$etat);

$reclamationproduit1C=new ReclamationproduitC();
$reclamationproduit1C->ajouterReclamationproduit($reclamationproduit1);
header('Location: afficherReclamationproduit.php');
	
}else{
	echo "vérifier les champs :)";
}


?>