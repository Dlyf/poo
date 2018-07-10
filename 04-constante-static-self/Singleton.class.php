<?php
// Design Pattern : un pattern est une solution en réponse à plusieurs problèmes similaires rencontrés
class Singleton {
  public $numero = 20;
  private static $instance = null;
  private function __construct() {} // la classe n'est pas instanciable car le constructeur est privé !
  private function __clone() {} // l'objet ne sera pas clonable
  public static function getInstance() {
    if(is_null(self::$instance)) // si $instance est null, la 1ère fois c'est null, toutes les autres fois je ne rentre pas dans le if car il y a l'objet dans $instance
      self::$instance = new Singleton; // instanciation une seule fois
    return self::$instance; // dans tous les cas, je retourne un objet $instance
  }
}
// $s = new Singleton; // erreur, normal car le constructeur est privé
$objet1 = Singleton::getInstance();
var_dump($objet1); // objet1 est la référence   #1 qui représente l'objet en RAM
$objet2 = Singleton::getInstance();
var_dump($objet2); // objet2 est la référence   #1 qui représente l'objet en RAM
$objet3 = Singleton::getInstance();
var_dump($objet3); // objet3 est la référence   #1 qui représente l'objet en RAM

echo $objet1->numero . '<hr />'; // Affiche 20
echo $objet2->numero . '<hr />'; // Affiche 20
$objet2->numero = 21; // Affectation
echo $objet2->numero . '<hr />'; // Affiche 21
echo $objet3->numero . '<hr />';// Affiche 21
