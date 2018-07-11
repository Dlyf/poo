<?php

// Les méthodes magiques s'executent automatiquement
class Societe {
  public $adresse;
  public $ville;
  public $cp;
  public function __construct() {}
  public function __set($nom, $valeur) { // se déclencher uniquement en cas de tentative d'affectation sur propriété qui n'existe pas.
    echo "La propriété $nom n'existe pas, la valeur $valeur n'a donc pas pu être affectée! <hr />";
  }
  public function __get($nom) { // se déclencher uniquement en cas de tentative d'affichage sur une propriété qui n'existe pas.
    echo "La propriété $nom n'existe pas, on ne peut donc pas l'afficher! <hr />";
  }
  public function __call($nom, $argument) { // se déclencher uniquement en cas de tentative d'execution sur une propriété qui n'existe pas.
      echo "Tentative d'executer la methode $nom mais elle n'existe PAS.<br /> Les arguments éataient : " . implode("-", $argument) . '<hr />';
  }
  /* Pour informations, d'aures méthodes magiques existent :
  __ callStatic($nom, $argument) : pour les méthodes static
  __isset($nom) : se lance lorsqu'une conditon isset/empty sur une propriété
  __destruct() : se lance à la fin de l'execution du script. Pratique pour fermer  la connexion à la base de données ou fermer un fichier en écriture
  __toString() : se lance lorsqu'un objet tente d'être afficher par un 'echo'
  Il y a aussi : __wakeup(), __sleep(), __invoke(), __clone() ...
 */
}

//-----------------------------------------//

$societe1 = new Societe;
//$societe1->villes = 'Paris'; // Tentative d'affectation d'une valeur à une propriété inexistante, cela fonctionne et ajoute la propriété ainsi que la valeur à l'objet (anormal)
//echo $societe1->titre; // Tentative d'affichage sur une propriété, cela fonctionne et ajoute la propriété (anormal)
// $societe1->maMethode(); // Tentative d'execution sir ine méthode qui n'existe pas
$societe1->pays = 'France'; // Déclenchement de la méthode __set au lieu de la création d'une nouvelle propriété
$societe1->ville = 'Paris'; // La propriété existe, aucun déclenchement, tout va bien.
// echo $societe1->ville;
echo $societe1->titre; // déclenchement de __get() au lieu d'une erreur unedefined.
echo $societe1->mdlfsqd(1, 2, 3);

print '<pre>'; print_r($societe1); print '</pre>';
/*
Tentative d'affecter une valeur à une propriété qui n'existe pas
PHP d'origine : ça marche (pas normal), la propriété est créée, la valeur est affectée (et c'est l'un des seuls langages qui laisse passer cela, PHP est trop permissif, variables non typées, etc...).
Avec __set() : pas d'affectation si la propriété n'existe pas, et possibilité d'adresser un message d'erreurtraité en français (c'est une sorte de pansement pour une cohérence)

Tentative d'affichage d'une propriété qui n'existe pas
PHP d'origine : unedefined (normal)
Avec __get() : pas d'erreur sale, et possibilité d'adresser un message traité en français.

Tentative d'executer une méthode qui n'existe pas
PHP d'origine : Fatal error (normal)
Avec __call() : pas d'erreur sale, et possibilité d'adresser un message d'erreur traité en français 








...
