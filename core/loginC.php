<?PHP
//include "../config.php";
include "C:/wamp64/www/projet2/config.php" ;
class LoginC {
function  authentifier ($id,$mdp){
	
	
	
	$sql = "SELECT count(*) from utilisateurs where id='".$id."' ";
	

		$db = config::getConnexion();
        try{
		$liste=$db->query($sql);
		if ($sql== 0) 
		{ echo " yes" ; 
		}
		else 
			echo "non";
		
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	
		

}
}

?>