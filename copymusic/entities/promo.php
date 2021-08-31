<?PHP
class promo{
	private $id;
	private $prix_initial;
	private $prix_final;
	private $pourcentage;
	private $desc;
    private $image;
 
   
    
	function __construct($prix_initial,$prix_final,$pourcentage,$desc,$image){
		
		$this->prix_initial=$prix_initial;
        $this->prix_final=$prix_final;
		$this->pourcentage=$pourcentage;
		$this->desc=$desc;
		$this->image=$image;
 	
	}

	function getid(){
		return $this->id;
	}
	function getprix_initial(){
		return $this->prix_initial;
	}
	function getprix_final(){
		return $this->prix_final;
	}
	function getpourcentage(){
		return $this->pourcentage;
	}
	function getdesc(){
		return $this->desc;
	}
    	function getimage(){
		return $this->image;
	}
        
}
    
    ?>