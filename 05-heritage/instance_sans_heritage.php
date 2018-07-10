<?php
// Nous avons un objet dans un aure objet, il n'y a pas d'héritage.
class A {
  public function direBonjour() {
    return 'Bonjour';
  }
}
//-----------------------------------------//
class B { // la classe B n'hérite pas de A
  public $mavariable;
  public function __construct() {
    $this->mavariable = new A; // *je crée un objet A que je place dans l'attribut $mavariable de mon objet B
  }
  public function uneMethode() {
    return $this->mavariable->direBonjour(); // dans mon objet B ($this), je peux appeler des méthodes sur l'objet B ($this), je peux appeler des méthodes de l'objet A ($this->mavariable)
  }
}
$b = new B;
echo $b->mavariable->direBonjour();
echo '<br>';
var_dump($b);
echo '<br>';
echo $b->uneMethode();
