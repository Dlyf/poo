<?php
trait TPanier {
  public $nbProduit = 1 ;
  public function affichageProduits() {
    return 'Affichage des produits !';
  }
}
trait TMembre {
  public function affichageMembres() {
    return 'Affichage des membres !';
  }
}

class Site {
  use TPanier, TMembre; // utilisation des traits
}

$site = new Site;
// Affichage des produits
echo $site->affichageProduits() . '<hr />';
// Affichage des membres
echo $site->affichageMembres() . '<hr />'; // 1


var_dump($site);
var_dump(get_class_methods($site));
echo '<hr />';
/*
- Un trait est un regroupement de méthodes et de propriétés pouvant être importés au sein d'une classe.
- Un trait n'est pas instanciable.
- Une classe ne peut hériter que d'une seule cllasse à la fois.
- Une classe peut importer plusieurs traits à la fois
*/

trait TA {
  public function a() { return 'a'; }
}
trait TB {
  use TA;
  public function b() { return 'b'; }
}
class Test {
  use TB;
}
$objet = new Test;
echo $objet->a() . '<hr />';
echo $objet->b() . '<hr />';
