<?PHP
require_once("../config.php");
require_once("../view/rating.php");



class PromoC {

function ajouterpromo($pro){
    
		$sql="insert into promo (id,prix_initial,prix_final,pourcentage,image,desct) values (:id,:prix_initial,:prix_final,:pourcentage,:image,:desct)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$pro->getid();
        $prix_initial=$pro->getprix_initial();
        $prix_final=$pro->getprix_final();
        $pourcentage=$pro->getpourcentage();
        $image=$pro->getimage();
        $desc=$pro->getdesc(); 
        $req->bindValue(':id',$id);    
		$req->bindValue(':prix_initial',$prix_initial);
		$req->bindValue(':prix_final',$prix_final);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':image',$image);
		$req->bindValue(':desct',$desc);
	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

    
    function afficherPromo()
    {
		$sql="SElECT * From promo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	
    }
    
    function supprimerPromo($id){
		$sql="DELETE FROM promo where id= :id";
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
    
    function modifierpromo($pro,$id){
		$sql="UPDATE promo SET prix_initial=:prix_initial,prix_final=:prix_final,pourcentage=:pourcentage,image=:image,desct=:desct WHERE id=$id";
		$db = config::getConnexion();
       try{		
        $req=$db->prepare($sql);
		   $nom=$pro->getprix_initial();
        $marque=$pro->getprix_final();
        $prix=$pro->getpourcentage();
        $image=$pro->getimage();
        $desc=$pro->getdesc();
    
    
        $req->bindValue(':prix_initial',$prix_initial);
		$req->bindValue(':prix_final',$prix_final);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':image',$image);
		$req->bindValue(':desct',$desc);
		
		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
    }
    
    function recupererpromo($id){
		$sql="SELECT * from promo where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    
    function cc(){
       // $sql="SELECT * from promo where id=$id";
        //$strQuery= "SELECT  nomProd, COUNT(id) as nbr FROM lignecommande GROUP BY nomProd ORDER BY COUNT(id) DESC limit 5"  ;
        $strQuery= "SELECT  product_id, AVG(vote) as nbr FROM rating GROUP BY product_id ORDER BY AVG(vote) DESC limit 5" ; 
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } 
    
    
     function toppromo($id,$inf,$sup){
        try{
            $c =new Config();
            $driver = $c->getConnexion();
            $stmt = $driver->prepare('SELECT COUNT(vote) as count FROM rating WHERE product_id=:id and ( vote<=:sup and vote>:inf)');
            $stmt->bindparam(":id",$id);
                $stmt->bindparam(":inf",$inf);
                    $stmt->bindparam(":sup",$sup);
            $stmt->execute();
             $l=$stmt->fetchAll(PDO::FETCH_ASSOC);
             return $l;
        }catch(PDOException $ex){
            echo "Erreur: ".$ex->getMessage();

    }}
     
 //end class   
}
?>


