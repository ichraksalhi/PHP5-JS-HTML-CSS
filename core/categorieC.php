<?PHP
require_once("../config.php");


class CategorieC {

function ajoutercategorie($pro){
    
		$sql="insert into categories (nom) values (:nom)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$pro->getnom();
        
            
		$req->bindValue(':nom',$nom);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

    
    function affichercategorie()
    {
		$sql="SElECT * From categories";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	
    }
        function affichername($id)
    {
		$sql="SElECT * From categories where id=".$id;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
            foreach ($liste as $row)
            {
                $name = $row['nom'];
            }
            
            		return $name;

		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	
    }
    
    function supprimercategorie($id){
		$sql="DELETE FROM categories where id= :id";
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
    
    function modifiercategorie($pro,$id){
		$sql="UPDATE categories SET nom=:nom WHERE id=$id";
		$db = config::getConnexion();
       try{		
        $req=$db->prepare($sql);
        $nom=$pro->getnom();
        
    
        $req->bindValue(':nom',$nom);
		
		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
    }
    
    function recuperercategorie($id){
		$sql="SELECT * from categories where id=$id";
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
