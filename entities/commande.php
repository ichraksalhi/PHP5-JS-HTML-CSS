<?php


class commmande{

	private $id_produit_panier;
  private $id_client;
	private $prix;
  private $etat;
  private $comment;



	function __construct($id_produit_panier,$id_client,$prix,$etat,$comment){
		$this->id_produit_panier=$id_produit_panier;
		$this->id_client=$id_client;
    $this->prix=$prix;
    $this->etat=$etat;
    $this->comment=$comment;
	}

	function getid_produit_panier(){
		return $this->id_produit_panier;
	}
	function getid_client(){
		return $this->id_client;
	}

  function getprix(){
    return $this->prix;
  }

  function getetat(){
		return $this->etat;
	}

  function getcomment(){
		return $this->comment;
	}


}

 ?>
