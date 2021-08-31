<?PHP
// /include "../config.php"; //conncter a base
require_once('../config.php');

/**
 *
 */
class commandec
{

    function ajoutercommande($cmd){
    		$sql="insert into commande (id_produit_panier,id_client,prix,etat,comment) values (:id_produit_panier, :id_client,:prix,:etat,:comment)";
    		$db = config::getConnexion();
    		try{
            $req=$db->prepare($sql);

            $id_produit_panier=$cmd->getid_produit_panier();
            $id_client=$cmd->getid_client();
            $prix=$cmd->getprix();
            $etat=$cmd->getetat();
            $comment=$cmd->getcomment();



    		$req->bindValue(':id_produit_panier',$id_produit_panier);
    		$req->bindValue(':id_client',$id_client);
	       $req->bindValue(':prix',$prix);
        $req->bindValue(':etat',$etat);
          $req->bindValue(':comment',$comment);
            $req->execute();

            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }

    	}




	function affichercommande(){
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



  function supprimercommande($id){
		$sql="DELETE FROM commande where id= :id";
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


    function approvedcommande($id){
  		$sql="UPDATE commande SET etat='succ' WHERE id=:id";
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


        function editcomment_commande($id,$comment){
      		$sql="UPDATE commande SET comment=:comt WHERE id=:id";
      		$db = config::getConnexion();
          $req=$db->prepare($sql);

      		$req->bindValue(':id',$id);
      		$req->bindValue(':comt',$comment);
      		try{
                  $req->execute();
              }
              catch (Exception $e){
                  die('Erreur: '.$e->getMessage());
              }
      	}


function affichermycommande($id){
    $sql="SElECT * From commande where id_client = ".$id;
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
  function stat1()
{
	    $sql="SElECT count(*) from commande ";
     $db = config::getConnexion();
    try{
    $liste=$db->prepare($sql);
	$liste->execute();
	$liste=$liste->fetchall();
	
    return $liste[0][0];
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}

function stat2()
{
	    $sql="SElECT count(*) FROM commande WHERE datecmd < CURRENT_DATE";
     $db = config::getConnexion();
    try{
    $liste=$db->prepare($sql);
	$liste->execute();
	$liste=$liste->fetchall();
	
    return $liste[0][0];
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}


function stat3()
{
	    $sql="SElECT SUM(prix) prix from commande";
     $db = config::getConnexion();
    try{
    $liste=$db->prepare($sql);
	$liste->execute();
	$liste=$liste->fetchall();
	
    return $liste[0][0];
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}


function stat4()
{
	    $sql="SElECT SUM(prix) prix from commande where datecmd < CURRENT_DATE";
     $db = config::getConnexion();
    try{
    $liste=$db->prepare($sql);
	$liste->execute();
	$liste=$liste->fetchall();
	
    return $liste[0][0];
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}


  

}


?>
