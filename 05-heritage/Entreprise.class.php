<?php
class Plombier {
  public function getSpecialite() {
    return 'tuyaux, robinets, chauffe-eau, compteurs...<hr />';
  }
  public function getHoraires() {
    return '8h/19h';
  }
}
//-----------------------------------------//
class Electricien {
  public function getSpecialite() {
    return 'pose de câbles, disjoncteurs, tableaux ou armoires électriques...<hr />';
  }
  public function getHoraires() {
    return '10h/18h';
  }
}
//-----------------------------------------//
class Entreprise { // la classe Entreprise n'hérite pas d'une autre classe
  public $numero = 0;
  public function appelUnEmploye($employe) {
    $this->numero++;
    $this->{"monEmploye" . $this->numero} = new
    $employe; // 1er appel : je déclare la variable $this->monEmploue1 = new Plombier,
    return $this->{"monEmploye" . $this->numero};
  }
}
//-----------------------------------------//
$entreprise = new entreprise;

$entreprise->appelUnEmploye('Plombier');
echo $entreprise->monEmploye1->getSpecialite();
// Habituellement nous mettons qu'une seule flèche, mais là, $entreprise contient un objet, un autre flèche -> est donc possible
// Que peut-on appeler après la deuxième flèche : les méthodes de l'objet concerné.
$entreprise->appelUnEmploye('Electricien');
echo $entreprise->monEmploye2->getSpecialite();

var_dump($entreprise);
