<?php
class Etudiant {
	private $prenom;
	public function __construct($arg) { // __construct : méthode appellé automatiquement lors du 'new'. On ne peut pas déclarer 2 constructeurs en PHP.
		echo "Instanciation, nous avons reçu l'information suivante : $arg<br>";
		$this->setPrenom($arg); // il est préférable de passer par le setter, comme ça, on passe dans les contrôles.
	}
	public function getPrenom() {
		return $this->prenom;
	}
	public function setPrenom($arg) {
		$this->prenom = $arg;
	}
}
//----------------------------------------------------------------
$etudiant = new Etudiant('Fabrice'); // __construct est appellée automatiquement. Nous mettons un argument après le nom de la class qui atterit directement dans le constructeur.
echo 'Prénom : ' . $etudiant->getPrenom() . '<br>';
var_dump($etudiant);
echo '<hr>';