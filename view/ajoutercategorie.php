<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";

if (isset($_POST['nom']))
{
         
            
$pro =new categorie($_POST['nom']);

$controlcategorie =new CategorieC();
$controlcategorie->ajoutercategorie($pro);
header('Location: categorie.php');
        
 } 
else{
	echo "vérifier les champs";
   }
//*/

?>
