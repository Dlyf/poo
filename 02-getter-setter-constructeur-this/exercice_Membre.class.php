<?php
/******************************************************************
Exercice : Au vue de la classe Membre, vous allez essayer de renseigner les attibuts : pseudo et mdp (vous devez écrire les getters et les setters
class Membre
{
	private $pseudo;
	private $mdp;
}
*****************************************************************/
// Solution :
class Membre
{
	private $pseudo;
	private $mdp;
	public function setPseudo($arg) {
		if(is_string($arg))
			if(strlen($arg) < 15 && strlen($arg) > 0)
				$this->pseudo = $arg;
	}
	public function getPseudo() {
		return $this->pseudo;
	}
	public function setMdp($arg) {
		$this->mdp = $arg;
	}
	public function getMdp() {
		return $this->mdp;
	}
}
//---------------------------------------------------------------
$membre1 = new Membre;
$membre1->setPseudo('Patrick');
$membre1->setMdp('secret');
echo 'Pseudo : ' . $membre1->getPseudo() . '<br>';
echo 'Mdp : ' . $membre1->getMdp() . '<br>';









