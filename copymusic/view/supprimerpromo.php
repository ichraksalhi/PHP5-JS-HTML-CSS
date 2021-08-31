<?PHP
include "../core/promoc.php";
$controlpromo =new PromoC();
if (isset($_POST["id"])){
	$controlpromo->supprimerPromo($_POST["id"]);
	header('Location: promo.php');
}

?>