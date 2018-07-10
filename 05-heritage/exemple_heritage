<?php
class Membre {
  public $id = 15;
  public $pseudo;
  public $mdp;
  public function __construct() {
    echo 'Internaute!<hr />';
  }
  public function inscription() {
    // traitement PHP
    return 'je m\'inscris<hr />';
  }
  public function seConnecter() {
    // traitement PHP, session, etc...
    return 'je me connecte<hr />';
  }
}
//-----------------------------------------//
class Admin extends Membre { // extends = hérotage, cpùùe i, o,cmide; cpùùe so je faisais un copié/collé du code contenu dans la classe mère (Membre)
  public function accesBackOffice() {
    return 'Accés BackOffice OK';
  }
}
//-----------------------------------------//
$admin = new Admin; // affiche "Internaute!", je crée une instance de Admin, qui hérite de la classe Membre (y compris le constructeur qui s'exécute).
echo $admin->inscription();
echo $admin->seConnecter();
echo $admin->accesBackOffice();
echo $admin->id; // Affiche 15, j'accède ç la variable $id par l'objet Admin
