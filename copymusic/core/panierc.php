<?PHP
// /include "../config.php"; //conncter a base
require_once('../config.php');

/**
 *
 */
class panierc
{

  function ajouterpanier($pan){
  		$sql="insert into panier (id_produit_panier,somme) values (:id_produit_panier, :somme)";
  		$db = config::getConnexion();
  		try{
          $req=$db->prepare($sql);

          $id_produit_panier=$pan->getid_produit_panier();
          $somme=$pan->getsomme();


  		$req->bindValue(':id_produit_panier',$id_produit_panier);
  		$req->bindValue(':somme',$somme);


              $req->execute();

          }
          catch (Exception $e){
              echo 'Erreur: '.$e->getMessage();
          }

  	}



	function afficherpanier(){
		$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


  	function affichersoldepanier($cookies){
  		$sql="SELECT * From panier where id_produit_panier = '$cookies'";
  		$db = config::getConnexion();
  		try{
  		$liste=$db->query($sql);
  		return $liste;
  		}
          catch (Exception $e){
              die('Erreur: '.$e->getMessage());
          }
  	}


  function supprimerpanier($id){
		$sql="DELETE FROM panier where id_produit_panier = '$id'";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



  function modifierpanier($id_produit_panier,$somme){
		$sql="UPDATE panier SET somme = somme + :somme WHERE id_produit_panier=:id_produit_panier";
		$db = config::getConnexion();
try{
        $req=$db->prepare($sql);
    $req->bindValue(':id_produit_panier',$id_produit_panier);
    $req->bindValue(':somme',$somme);
            $s=$req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

}

function modifierpaniermoin($id_produit_panier,$somme){
  $sql="UPDATE panier SET somme = somme - :somme WHERE id_produit_panier=:id_produit_panier";
  $db = config::getConnexion();
try{
      $req=$db->prepare($sql);
  $req->bindValue(':id_produit_panier',$id_produit_panier);
  $req->bindValue(':somme',$somme);
          $s=$req->execute();
      }
      catch (Exception $e){
          echo " Erreur ! ".$e->getMessage();

      }

}



}


?>
