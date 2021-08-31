<?php


class panier{
	private $id;
	private $id_produit_panier;
	private $somme;

	function __construct($id_produit_panier,$somme){
		$this->id_produit_panier=$id_produit_panier;
		$this->somme=$somme;
	}

	function getid_produit_panier(){
		return $this->id_produit_panier;
	}
	function getsomme(){
		return $this->somme;
	}

}

 ?>
