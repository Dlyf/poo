<?php
abstract class Joueur {
  public function seConnecter() {
    return $this->etreMajeur();
  }
  abstract public function etreMajeur(); // les méthodes abstraites n'ont pas de contenu (no body / corps)
  abstract public function devise(); // les méthodes abstraites n'ont pas de contenu (no body / corps)
}
//-----------------------------------------//
class JoueurFr extends Joueur {
  public function etreMajeur() { // je suis obligé de redéfinir la méthode de ma classe Mère sinon on obtient une erreur.
    return 18;
  }
  public function devise() {
    return '€';
  }
}
//-----------------------------------------//
class JoueurUs extends Joueur {
  public function etreMajeur() { // je suis obligé de redéfinir la méthode de ma classe Mère sinon on obtient une erreur.
    return 21;
  }
  public function devise() {
    return '$';
  }
}
//-----------------------------------------//
// $joueur = new Joueur; erreur, une classe abstraite n'est pas instanciable !
$joueurFr = new JoueurFr;
echo $joueurFr->seConnecter();
echo '<hr />';
$joueurUs = new JoueurUs;
echo $joueurUs->seConnecter();
