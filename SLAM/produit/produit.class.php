<?php

class produit {
	
	private $_ref, $_qte, $_prix, $_designation;
			
			
	public function __construct($ref, $qte, $prix, $des) {
		$this->_ref = $ref;
		$this->_qte = $qte;
		$this->_prix = $prix;
		$this->_designation = $des;
	}
	
	public function afficher() {
		$aff = "";
		$aff .= "Référence : ".$this->_ref."</br>";
		$aff .= "Quantité en stock: ".$this->_qte."</br>";
		return $aff;
	}
	public function qte() {
		return $this->_qte;
	}
	public function prix() {
		return $this->_prix;
	}
	public function designation() {
		return $this->_designation;
	}
}
?>