<?PHP
//include "../entities/commande.php";
include "../core/ReclamationproduitC.php";


 $reclamationproduitC=new ReclamationproduitC();
if (isset($_GET['id'])){
$reclamationproduitC->traiterReclamation($_GET["id"]);
  header('Location: table.php');
}
?>