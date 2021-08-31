<?PHP
class categorie
{
	private $id;
	private $nom;
	
   
    
	function __construct($nom){
		$this->nom=$nom;
        
	}
    
	function getnom(){
		return $this->nom;
	}
	
}
    
    ?>