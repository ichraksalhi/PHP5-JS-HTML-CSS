<?PHP
class Reclamationproduit{ 
	private $id; 
	private $idClt; 
	private $typeP; 
	private $categorieP;  
	private $numeroP;
	private $descriptionP;
	private $numerofacture;
	private $etat;

	function __construct($idClt,$typeP,$categorieP,$numeroP,$descriptionP,$numerofacture,$etat){ 
	//	$this->id=$id;
	    $this->idClt=$idClt;    
		$this->typeP=$typeP;
		$this->categorieP=$categorieP;
		$this->numeroP=$numeroP;
		$this->descriptionP=$descriptionP;
		$this->numerofacture=$numerofacture;
		$this->etat=$etat;
	
	}
	
	function getId(){
		return $this->id;
	}
	function getIdClt(){
		return $this->idClt;
	}
	function getTypeP(){
		return $this->typeP;
	}
	function getCategorieP(){
		return $this->categorieP;
	}
	function getNumeroP(){
		return $this->numeroP;
	}
	function getDescriptionP(){
		return $this->descriptionP;
	}
	function getNumerofacture(){
		return $this->numerofacture;
	}
	function getEtat(){
		return $this->etat;
	}


	function setId($id){
		$this->id=$id;
	}
	function setIdClt($idClt){
		$this->idClt=$idClt;
	}
	function setTypeP($typeP){
		$this->typeP=$typeP;
	}
	function setCategorieP($categorieP){
		$this->categorieP=$categorieP;
	}
	function setNumeroP($numeroP){
		$this->numeroP=$numeroP;
	}
	function setDescriptionP($descriptionP){
		$this->descriptionP=$descriptionP;
	}
	function setNumerofacture($numerofacture){
		$this->numerofacture=$numerofacture;
	}
	function setEtat($etat){
		$this->etat=$etat;
	}
	
	
}

?>