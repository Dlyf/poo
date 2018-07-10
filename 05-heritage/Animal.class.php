<?php
class Animal {
  protected function deplacement() {
    return 'je me déplace';
  }
  public function manger() {
    return 'je mange chaque jour';
  }
}

//-----------------------------------------//
class Elephant extends Animal {
  public function quiSuisJe() {
    return 'je suis un éléphant et ' .
    $this->deplacement(); // j'utilise la fonction deplacement() qui est protected dont j'hérite  'exécutable uniquement dans la classe Mère ou dans la classe Fille), je n'utilise pas MaClass::. Seulement dans le cas où je l'aurais redéfinie, la question ne serait posée, est-ce que j'aurais voulu accéder  à deplacement() de Elephant ou deplacement() de Animal ?
  }
}
//-----------------------------------------//
class Chat extends Animal {
  public function quiSuisJe() {
    return 'Je suis un chat';
  }
  public function manger() { // redéfinition de méthode }
    return 'je mange comme 1 chat';
  }
}
//-----------------------------------------//
// Aucun est un Animal, par contre il existe des éléphants, des chats, des chiens, etc.
$eleph = new Elephant;
echo 'Elephant> ' . $eleph->manger() . '<hr />'; //affiche Elephant> je mange chaque jour
echo 'Elephant> ' . $eleph->quiSuisJe() . '<hr />'; // affiche Elephant> je suis un éléphant et je me déplace
// echo $eleph->deplacement(; // erreur ! ' j'hérite bien de la méthode protected mais je ne peux l'invoquer en dehors de sa classe .

$chat = new Chat;
echo 'Chat> ' . $chat->manger() . '<hr />'; // affiche Chat> je mange comme 1 chat - et non pas "je mange chaque jour." car la méthode a été redéfinie dans la classe Chat ! L'interpréteur cherche d'abord dans la classe Chat, et sesi e t seulement si la méthode n'avait pas été trouvée, il aurait cherché dans la classe dont j'hérite (classe Mère)
echo 'Chat> ' . $chat->quiSuisJe() . '<hr />'; // affiche Chat> Je suis un chat

/*  lorsqu'on appelle une méthode sur un objet, l'interpréteur PHP chercher d'abord dans la classe dont l'objet est issu avant d'aller voir dans sa classe Mère (en cas d'héritage) */


















//
