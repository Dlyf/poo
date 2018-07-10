<?php
class Vehicule {
	private $litresEssence;
	public function setLitresEssence($litres) {
		if(is_int($litres))
			$this->litresEssence = $litres;
	}
	public function getLitresEssence() {
		return $this->litresEssence;
	}
}
//---------------------------------------
class Pompe {
	private $litresEssence;
	public function setLitresEssence($litres) {
		if(is_int($litres))
			$this->litresEssence = $litres;
	}
	public function getLitresEssence() {
		return $this->litresEssence;
	}
	public function donnerEssence(Vehicule $v) { // on exige un argument de type Vehicule
		$this->setLitresEssence($this->getLitresEssence() - (50 - $v->getLitresEssence())); // $v représente le Vehicule reçu, $this représente le Vehicule à partir duquel la méthode est appellée
		// 800 - (50 - 5) ... 800 - 45 = 755
		$v->setLitresEssence($v->getLitresEssence() + (50 - $v->getLitresEssence())); // 50L de + pour le Vehicule $v
	}
}
//------------------------------------------------------
$Vehicule1 = new Vehicule;
$Vehicule1->setLitresEssence(5);
echo 'Le Véhicule1 possède : ' . $Vehicule1->getLitresEssence() . ' litres d\'essence.<hr>';

$pompe = new Pompe;
$pompe->setLitresEssence(10);
echo 'La pompe possède : ' . $pompe->getLitresEssence() . ' litres en stock d\'essence.<hr>';
echo 'Avant ravaitaillement, la pompe possède : ' . $pompe->getLitresEssence() . '<hr>';
echo 'Avant ravaitaillement, le véhicule possède : ' . $Vehicule1->getLitresEssence() . ' litres d\'essence '. '<hr>';
$pompe->donnerEssence($Vehicule1);

echo 'Après ravaitaillement, le Véhicule 2 possède : ' . $Vehicule1->getLitresEssence() . ' litres d\'essence.<hr>';

echo 'Après ravaitaillement, la pompe possède : ' . $pompe->getLitresEssence() . ' litres d\'essence.<hr>';

$Vehicule2 = new Vehicule;
$Vehicule2->setLitresEssence(30);
echo 'Le Véhicule2 possède : ' . $Vehicule2->getLitresEssence() . ' litres d\'essence<hr>';

$pompe->donnerEssence($Vehicule2);
echo 'Après ravaitaillement, le Véhicule 2 possède : ' . $Vehicule1->getLitresEssence() . ' litres d\'essence.<hr>';

echo 'Après ravaitaillement, la pompe possède : ' . $pompe->getLitresEssence() . ' litres d\'essence.<hr>';
