<?php
interface Mouvement {
  public function deplacement();
}
//-----------------------------------------//
// class Bateau extends Mouvement {} // ne fonctionne pas
class Bateau implements Mouvement {
  public function deplacement() {} // obligation de recréer les méthodes de l'interface qu'on implémente pour éviter les erreurs
}

class Voiture implements Mouvement {
  public function deplacement() {}
}

class Avion implements Mouvement {
  public function deplacement() {}
}
// $mouv = new Mouvement; // erreur, une interface n'est pas instanciable    
