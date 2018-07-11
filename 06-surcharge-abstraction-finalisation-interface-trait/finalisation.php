<?php
final class Application { // final indique que la classe Application ne pourra pas être héritée.
  public function lancementApplication() {
    return 'L\'appli se lance comme ceci !';
  }

}

// class Extension extends Application {} // erreur, on ne peut pas hériter d'une class final !
//-----------------------------------------//
$app = new Application; // la classe est instanciable.
echo $app->lancementApplication();
echo '<hr>';
//-----------------------------------------//
class Application2 {
  final public function lancementApplication() {
      return 'L\'appli se lance comme cela !';
  }
}
class Extension2 extends Application2 {
  //public function lancementApplication() {} // erreur, je ne peux pas surcharger ou redéfinir la méthode lancementApplication() car elle est final dans la class Mère Application2 !
}
//-----------------------------------------//
$ext2 = new Extension2;
echo $ext2->lancementApplication();
