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
	public function total_prix() {
		return $this->_qte*$this->_prix;
	}
	
	public function approvisionner($qte) {
		$this->_qte += $qte;
	}
	
	public function vendre($qte) {
		if ($qte <= $this->_qte) {
			$this->_qte -= $qte;
			$message = "<p>La vente a eu lieu</p>";
		} else {
			$message = "<p>La vente n'a pas eu lieu</p>";
		}
	}
}
?>