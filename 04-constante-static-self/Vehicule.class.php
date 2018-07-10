<?php
class Vehicule {
  private static $marque = 'BMW';
  private $couleur = 'noire';
  public function getMarque() {
    // il s'agit d'une méthode appartenant à l'objet qui retourne une propriété appartenant à la classe
      return self::$marque; // propriété static
  }
  public function getCouleur() {
      return $this->couleur; // propriété
  }
  public function setMarque($marque) {
      self::$marque = $marque; //propriété static
  }
  public function setCouleur($couleur) {
      $this->couleur = $couleur; //propriété
  }
}
//-----------------------------------------//
$vehicule1 = new Vehicule;
echo 'Véhicule 1 de marque ' . $vehicule1->getMarque() . ' et de couleur ' . $vehicule1->getCouleur() . '<hr />'; // BMW Noire

$vehicule2 = new Vehicule;
echo 'Véhicule 2 de marque ' . $vehicule2->getMarque() . ' et de couleur ' . $vehicule2->getCouleur() . '<hr />'; // BMW Noire

$vehicule3 = new Vehicule;
$vehicule3->setCouleur('rouge'); // modifie un objet
echo 'Véhicule 3 de marque ' . $vehicule3->getMarque() . ' et de couleur ' . $vehicule3->getCouleur() . '<hr />'; // BMW Rouge

$vehicule4 = new Vehicule;
echo 'Véhicule 4 de marque ' . $vehicule4->getMarque() . ' et de couleur ' . $vehicule4->getCouleur() . '<hr />'; // BMW Noire

$vehicule5 = new Vehicule;
$vehicule5->setMarque('Renault'); // modifie la classe et tous les futurs objets émanants de cette classe
echo 'Véhicule 5 de marque ' . $vehicule5->getMarque() . ' et de couleur ' . $vehicule5->getCouleur() . '<hr />'; // Renault Noire

$vehicule6 = new Vehicule;
echo 'Véhicule 6 de marque ' . $vehicule6->getMarque() . ' et de couleur ' . $vehicule6->getCouleur() . '<hr />'; // Renault Noire
