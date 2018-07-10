<?php
class Compteur {
  public static $nbInstanceClass = 0; // attribut appartenant à la classe
  public $nbInstanceObjet = 0; // attribut appartenant à l'objet
  public function __construct() {
    ++self::$nbInstanceClass; // = self::$nbInstanceClass + 1
    ++$this->nbInstanceObjet; // = $this->nbInstanceObjet + 1
  }
}
//-----------------------------------------//
$c1 = new Compteur; // $nbInstanceClass à 1 - $nbInstanceObjet à 1
$c2 = new Compteur; // $nbInstanceClass à 2 - $nbInstanceObjet à 1
$c3 = new Compteur; // $nbInstanceClass à 3 - $nbInstanceObjet à 1
$c4 = new Compteur; // $nbInstanceClass à 4 - $nbInstanceObjet à 1
$c5 = new Compteur; // $nbInstanceClass à 5 - $nbInstanceObjet à 1
//-----------------------------------------//
echo 'Nombre de fois où la classe est instanciée : ' . Compteur::$nbInstanceClass . '<hr />'; // je peux accéder à une méthode de ma classe via ma classe // affiche 5
echo 'Nombre de fois où l\'objet est instancié : ' . $c5->nbInstanceObjet . '<hr />'; // je peux accéder à une méthode de mon objet via mon objet // affiche 1
