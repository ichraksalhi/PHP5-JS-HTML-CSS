<?PHP
require_once("../config.php");


class ProduitC {

function ajouterproduit($pro){
    
		$sql="insert into produit (nom,marque,prix,image,desct,cat,qtn) values (:nom,:marque,:prix,:image,:desct,:cat,:qtn)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);	
        $nom=$pro->getnom();
        $marque=$pro->getmarque();
        $prix=$pro->getprix();
        $image=$pro->getimage();
        $desc=$pro->getdesc();
        $cat=$pro->getcat();   
        $qtn=$pro->getqtn();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':image',$image);
		$req->bindValue(':desct',$desc);
		$req->bindValue(':cat',$cat);
		$req->bindValue(':qtn',$qtn);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

    
    function afficherProduit()
    {
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	
    }
	function search($nam)
	{
			$sql="SELECT * FROM produit WHERE nom LIKE '%$nam%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
		
	}
	   function afficherProduitcat($id)
    {
		$sql="SELECT * from produit where cat=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	
    }
	    
    function afficherProduit_ord_aes()
    {
		$sql="SElECT * From produit ORDER BY prix ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	
    }
		    
    function afficherProduit_ord_des()
    {
		$sql="SElECT * From produit ORDER BY prix DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	
    }
    
    function supprimerProduit($id){
		$sql="DELETE FROM produit where id= :id";
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
	
	    function supprimerCatProduit($cat){
		$sql="DELETE FROM produit where cat= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$cat);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    
    function modifierproduit($pro,$id){
		$sql="UPDATE produit SET nom=:nom,marque=:marque,prix=:prix,image=:image,desct=:desct,cat=:cat,qtn=:qtn WHERE id=$id";
		$db = config::getConnexion();
       try{		
        $req=$db->prepare($sql);
		   $nom=$pro->getnom();
        $marque=$pro->getmarque();
        $prix=$pro->getprix();
        $image=$pro->getimage();
        $desc=$pro->getdesc();
        $cat=$pro->getcat(); 
		$qtn=$pro->getqtn();
    
        $req->bindValue(':nom',$nom);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':image',$image);
		$req->bindValue(':desct',$desc);
		$req->bindValue(':cat',$cat);
		$req->bindValue(':qtn',$qtn);
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
    }
    
    function recupererproduit($id){
		$sql="SELECT * from produit where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    
 //end class   
}
?>


