<?php
class Maison {
  public static $nbPiece = 7; // appartient à la classe
  public static $espaceTerrain = '500m²'; // appartient à la classe
  public $couleur = 'blanche'; // appartient à l'objet
  const HAUTEUR = '10m'; // appartient à l'objet
  private $nbPorte = 10; // appartient à l'objet
  //-----------------------------------------//
  public static function getNbPiece() {
    return self::$nbPiece;
  }
  public function getNbPorte() {
    return $this->nbPorte;
  }
}
//-----------------------------------------//
echo 'Nombre de pièces : ' . Maison::getNbPiece() .
'<hr>'; // ok - j'appelle un attribut de ma classe par ma classe

echo 'Superficie : ' . Maison::$espaceTerrain . ' <hr>'; // ok - j'appelle un attribut de ma classe par ma classe

$maison1 = new Maison;
echo 'Superficie : ' . Maison::$espaceTerrain . '<hr>'; // ok j'appelle un attribut de ma classe par ma classe
echo 'Hauteur : ' . Maison::HAUTEUR . '<hr />';

$objet = new Maison;
echo 'Couleur : ' . $objet->couleur . '<hr>'; // ok j'appelle un attribut de mon objet par mon objet
echo 'Nombre de portes : ' . $objet->getNbPorte() . '<hr>';
// ok j'appelle un attribut de mon objet par mon objet
$objet::$espaceTerrain = '700m²';
// var_dump(get_class_methods(get_class($objet))); // affiche les méthodes (fonctions) de la classe.
// var_dump(get_class_vars(get_class($objet))); // affiche les attributs (oropriétés) de la classe.
// echo $objet::$esoaceTerrain; // erreur, je ne dois pas appeler une propriété static avec mon objet
// echo Maison::$couleur; // erreur, je nedois pas appeler une propriété public avec ma classe
// echo Maison::getNbPorte(); // erreur, je ne dois pas appeler une méthode static avec ma classe
// echo $objet->getNbPiece(); // devrait donner une erreur, car la méthode est static, il faudrait l'appeller avec la classe
// echo $objet::$espaceTerrain; // devrait donner une erreur
