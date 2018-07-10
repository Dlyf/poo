<?php
class Panier {
  public $nbProduit; // propriété
  public function ajouterArticle(){
    // méthode
    return 'L\'article a été ajouté';
  }
  protected function retirerArticle() {
    // méthode
    return 'L\'article a été retiré';
  }
  private function afficherArticle() {
    return 'L\'article a été affiché';
  }
}

//---------------------------------------------------
$panier1 = new Panier; // Instanciation
var_dump($panier1); // type(object), nom de la classe, référence de l'objet
//var_dump(get_class_methods($panier1)); // affiche toutes les méthodes d'un classe
$panier1->nbProduit = 5;
echo 'Panier1> ' . $panier1->nbProduit . ' produits<br>'; // propriété  public ok
echo 'Panier1> ' . $panier1->ajouterArticle() . '<br>'; // méthode public ok
echo 'Panier1> ' . $panier1->retirerArticle() . '<br>'; // méthode protected erreur, l'élément est accessible uniquement dans la classe où il a été déckaré ainsi que dans les classes héritières.
echo 'Panier1> ' . $panier1->afficherArticle() . '<br>'; // méthode public ok

$panier2 = new Panier;
$panier2->nbProduit = 3;
echo 'Panier2> ' . $panier2->nbProduit . ' produits<br>;'
//-------------------------------------------------------
/* Niveaux de visibilité :
public : accessible de partout
protected : accessible uniquement dans la classe où il a été déckaré ainsi que dans les classes héritières.
private : accessible uniquement dans la classe où l'élément a été déclaré. 
