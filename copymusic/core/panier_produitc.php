<?PHP
require_once('../config.php');

/**
 *
 */
class panier_produitc
{

  function ajouterpanier_produit($pan){
  		$sql="insert into panier_produit (id,id_produit) values (:id, :id_produit)";
  		$db = config::getConnexion();
  		try{
          $req=$db->prepare($sql);


          $id=$pan->getid();
          $id_produit=$pan->getid_produit();


  		$req->bindValue(':id',$id);
  		$req->bindValue(':id_produit',$id_produit);


              $req->execute();

          }
          catch (Exception $e){
              echo 'Erreur: '.$e->getMessage();
          }

  	}


	function afficherpanier_produit($panid){

		$sql="SELECT * From panier_produit WHERE id ='$panid'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

  function supprimerpanier_produit($id_panier,$id_produit){
		$sql="DELETE FROM panier_produit where id_produit= :id_produit and  id = :id LIMIT 1";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':id',$id_panier);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

  function modifierpanier_produit($pan,$id){
		$sql="UPDATE produit SET id=:id,id_produit=:id_produit  WHERE id=:id";
		$db = config::getConnexion();
try{
        $req=$db->prepare($sql);

        $id=$pan->getid();
        $id_produit=$pan->getid_produit();


    $req->bindValue(':id',$id);
    $req->bindValue(':id_produit',$id_produit);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }



}


}


?>
