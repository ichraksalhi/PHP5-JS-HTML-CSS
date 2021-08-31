<?php

class panier_produit{

	private $id;
	private $id_produit;

	function __construct($id,$id_produit){
		$this->id=$id;
		$this->id_produit=$id_produit;
	}

	function getid(){
		return $this->id;
	}
	function getid_produit(){
		return $this->id_produit;
	}

}

 ?>
