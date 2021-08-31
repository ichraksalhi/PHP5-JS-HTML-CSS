<?PHP
//include "include_once dirname(_FILE_) . '/../config.php";
include "../config.php";
class ReclamationproduitC {
function afficherReclamationproduit ($reclamationproduit){
	    echo "IdClt: ".$reclamationproduit->getIdClt()."<br>";
		echo "TypeP: ".$reclamationproduit->getTypeP()."<br>";
		echo "CategorieP: ".$reclamationproduit->getCategorieP()."<br>";
		echo "NumeroP: ".$reclamationproduit->getNumeroP()."<br>";
		echo "DescriptionP: ".$reclamationproduit->getDescriptionP()."<br>";
		echo "numerofacture: ".$reclamationproduit->getNumerofacture()."<br>"; 
	}
	/*function calculerSalaire($reclamationproduit){
		echo $reclamtionproduit->getNbHeures() * $reclamationproduit->getTarifHoraire();
	}*/
	function ajouterReclamationproduit($reclamationproduit){
		$sql="insert into reclamationproduit (id,idClt,typeP,categorieP,numeroP,descriptionP,numerofacture) values (:id,:idClt,:typeP,:categorieP,:numeroP,:descriptionP,:numerofacture)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql); 
		
		$id=$reclamationproduit->getId();
		$idClt=$reclamationproduit->getIdClt(); 
        $typeP=$reclamationproduit->getTypeP();
        $categorieP=$reclamationproduit->getCategorieP();
        $numeroP=$reclamationproduit->getNumeroP();
        $descriptionP=$reclamationproduit->getDescriptionP();
        $numerofacture=$reclamationproduit->getNumerofacture();
		$req->bindValue(':id',$id);
		$req->bindValue(':idClt',$idClt);
		$req->bindValue(':typeP',$typeP);
		$req->bindValue(':categorieP',$categorieP);
		$req->bindValue(':numeroP',$numeroP);
		$req->bindValue(':descriptionP',$descriptionP);
		$req->bindValue(':numerofacture',$numerofacture);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamationproduits(){
		//$sql="SElECT * From Reclamationproduit e inner join formationphp.reclamationproduit a on e.cin= a.cin";
		$sql="SElECT * From reclamationproduit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamationproduit($id){
		$sql="DELETE FROM reclamationproduit where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	} 
	function modifierReclamationproduit($Reclamationproduit,$id){
		$sql="UPDATE reclamationproduit SET id=:idd,idClt=:idClt,typeP=:typeP,categorieP=:categorieP,numeroP=:numeroP ,descriptionP=:descriptionP ,numerofacture=:numerofacture WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);    
		$idd=$Reclamationproduit->getId(); 
		$idClt=$Reclamationproduit->getIdClt();
        $typeP=$Reclamationproduit->getTypeP();
        $categorieP=$Reclamationproduit->getCategorieP();
        $numeroP=$Reclamationproduit->getNumeroP();
        $descriptionP=$Reclamationproduit->getDescriptionP();
        $numerofacture=$Reclamationproduit->getNumerofacture();
		$datas = array(':idd'=>$idd, ':id'=>$id,':idClt'=>$idClt,':typeP'=>$typeP,':categorieP'=>$categorieP,':numeroP'=>$numeroP,':descriptionP'=>$descriptionP,':numerofacture'=>$numerofacture);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':idClt',$idClt);
		$req->bindValue(':typeP',$typeP);
		$req->bindValue(':categorieP',$categorieP);
		$req->bindValue(':numeroP',$numeroP);
		$req->bindValue(':descriptionP',$descriptionP); 
		$req->bindValue(':numerofacture',$numerofacture);		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
		
	}
	function recupererReclamationproduit($id){
		$sql="SELECT * from reclamationproduit where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	/*
	function rechercherListeReclamationproduits($tarif){
		$sql="SELECT * from reclamationproduit where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
	function rechercher($s)
    {
         $query = "select * from reclamationproduit where id LIKE ?";
		 	$db = config::getConnexion();
         $result = $db->prepare($query);
         $result->bindValue(1, "%$s%", PDO::PARAM_STR);
         $result->execute();
           return $result->fetchAll();
    }
    function trierReclamationproduit($s)
    {
         	
		if ($s == "numerofacture") $sql = "SELECT * from reclamationproduit order by numerofacture desc";
     /* else if ($s == "nomP") $sql = "SELECT * from reclamationproduit order by nomP desc";
      else if ($s== "prenomP") $sql = "SELECT * from reclamationproduit order by prenomP desc"; */
	  
	  $db = config::getConnexion();
	         // $req=$db->prepare($sql);
		/*try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	*/
		
		 /*$result = $db->prepare($sql);
         $result->execute();
           return $result->fetchAll();*/
		    $result = $db->prepare($sql);
         $result->bindValue(1, "%$s%", PDO::PARAM_STR);
         $result->execute();
           return $result->fetchAll();
        
		    
	}
	function afficherReclamationproduitsByID($idUser) {

		$sql="SElECT * from reclamationproduit where idClt=$idUser";
			$db = config::getConnexion();
			try
			{
			$liste=$db->query($sql);
			return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
	
	
	}
	function traiterReclamation($id)
 {
 	$sql = "UPDATE reclamationproduit SET etat=1  where id=".$id;
		$db = Config::getConnexion();
		$req=$db->prepare($sql);
		try {
			$req->execute();
			return true;
		}
		catch (Exception $e){
			return $e->getMessage();
		}
	}
}

?>   