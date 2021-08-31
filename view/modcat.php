<?PHP
include "../entities/categorie.php";
include "../core/CategorieC.php";

if (isset($_POST['id']))
{  
                    
$pro =new categorie($_POST['nom']);

$controlcategorie =new CategorieC();
$controlcategorie->modifiercategorie($pro,$_POST['id']);
   header('Location: categorie.php');
} 
  else
    
 {
    echo "<script>alert(\"vérifier les champs\")</script>";

 }
?>

    