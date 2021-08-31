<?PHP
include "../entities/reclamationproduit.php";
include "../core/reclamationproduitC.php";
$reclamationproduit=new Reclamationproduit(757,'BEN Ahmed','Salah',50,'kk','lll',20,'ff',2);
$reclamationproduitC=new ReclamationproduitC();
$reclamationproduitC->afficherReclamationproduit($reclamationproduit);
echo "****************";
echo "<br>";
echo "id:".$reclamationproduit->getId();
echo "<br>";
echo "nomP:".$reclamationproduit->getNomP();
echo "<br>";
echo "prenomP:".$reclamationproduit->getPrenomP();
echo "<br>";
echo "telephoneP:".$reclamationproduit->getTelephoneP();
echo "<br>";
echo "typeP:".$reclamationproduit->getTypeP();
echo "<br>";
echo "categorieP:".$reclamationproduit->getCategorieP();
echo "<br>";
echo "numeroP:".$reclamationproduit->getNumeroP();
echo "<br>";
echo "descriptionP:".$reclamationproduit->getDescriptionP();
echo "<br>";
echo "numerofacture:".$reclamationproduit->getNumerofacture();
echo "<br>";
/*echo "le salaire est : ";
$reclamationproduitC->calculerSalaire($reclamationproduit); 
echo "<br>";*/


?>