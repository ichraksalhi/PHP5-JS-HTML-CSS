<?PHP
include "../entities/commande.php";
include "../core/commandec.php";
/// filtre sur saisir ///////////
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['id'])){

 $comdc = new commandec();

if (isset($_POST['Approved'])){


  $comdc->approvedcommande($_POST['id']);
  header('Location: afficher.php');
}

if (isset($_POST['Modifier'])){
  if(!empty($_POST['commnt'])){
   if (strlen($_POST['commnt']) >5 and strlen($_POST['commnt']) <20 ) {  // control saisir
    $comdc->editcomment_commande($_POST['id'],test_input($_POST['commnt']));
    //&lt;script&gt;location.href('http://www.hacked.com')&lt;/script&gt;
   }
    }
  header('Location:  afficher.php');
}



if (isset($_POST['Supprimer'])){

    $comdc->supprimercommande($_POST['id']);
    header('Location:  afficher.php');
}


}
?>
