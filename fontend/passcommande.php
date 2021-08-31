<?PHP

include "../entities/panier.php";
include "../core/panierc.php";
include "../entities/commande.php";
include "../core/commandec.php";

$cookie_name = "panier";

if(!isset($_COOKIE[$cookie_name])) {

     echo "aucun panier !! passer";

} else {

$panii=new panierc();
$list_somme =$panii->affichersoldepanier($_COOKIE[$cookie_name]);
foreach($list_somme as $row){
  $somm = $row['somme'];
  $date = $row['date_add'];
}
$id_client = "0001";
$etat = "panding";
$comment = " ";
$com = new commmande($_COOKIE[$cookie_name],$id_client,$somm,$etat,$comment);
$comc = new commandec();
$comc->ajoutercommande($com);

$panii->supprimerpanier($_COOKIE[$cookie_name]);
// supp cookies
$past = time() - 3600;
foreach ( $_COOKIE as $key => $value )
{
    setcookie( $key, $value, $past, '/' );
}
header('Location:  commande.php');

}
?>
