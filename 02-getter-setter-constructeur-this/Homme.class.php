<?php
class Homme {
	private $prenom;
	private $nom;
	public function setPrenom($prenom) {
		if(is_string($prenom))
			$this->prenom = $prenom;
	}
	public function getPrenom() {
		return $this->prenom;
	}
	public function setNom($nom) {
		if(is_string($nom))
			$this->nom = $nom;
	}
	public function getNom() {
		return $this->nom;
	}
}
//---------------------------------------------------------------
$homme = new Homme();
$homme->setPrenom("Toto"); // je modifie l'élément (dans l'objet) via un setter (mutateurs) car il est private.
echo $homme->getPrenom() . "<br>"; // j'accède à l'élément (dans l'objet) via un getter (accesseur) car il est private.

$homme->setNom("L'haricot"); // je modifie l'élément (dans l'objet) via un setter (mutateurs) car il est private.
echo $homme->getNom() . "<br>"; // j'accède à l'élément (dans l'objet) via un getter (accesseur) car il est private.
// var_dump($homme);
echo '<hr>';
//------------------------------------------------------
$homme2 = new Homme();
echo $homme2->getNom() . '<br>'; // cette ligne ne donne aucun prénom car on a réinstancié l'objet dans la variable $homme2. Preuve qu'au-dessus, on modifiait bien l'objet et non la classe
echo $homme2->getPrenom() . '<br>'; // cette ligne ne donne aucun prénom car on a réinstancié l'objet dans la variable $homme2. Preuve qu'au-dessus, on modifiait bien l'objet et non la classe
// var_dump($homme2);
echo '<hr>';
//------------------------------------------------------
