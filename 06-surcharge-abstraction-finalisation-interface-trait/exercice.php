<?php

abstract class Vehicule {
  final public function demarrer() {
    return 'je démarre';
  }
  abstract public function carburant();
  public function nombreDeTestObligatoire() {
    return 100;
  }
}
//-----------------------------------------//

class Peugeot extends Vehicule {
  public function carburant() {
    return 'essence';
  }
  public function nombreDeTestObligatoire() {
    return parent::nombreDeTestObligatoire() + 70;
  }
}

//-----------------------------------------//

class Renault extends Vehicule {
  public function carburant() {
    return 'diesel';
  }
  public function nombreDeTestObligatoire() {
    return parent::nombreDeTestObligatoire()
    + 30;
  }
}

$peugeot = new Peugeot;
echo 'Peugeot> ' . $peugeot->demarrer() . '<br />';
echo 'Peugeot> ' . $peugeot->carburant() . '<br />';
echo 'Peugeot> ' . $peugeot->nombreDeTestObligatoire() . '<br />';
echo '<hr />';
$renault = new Renault;

echo 'Renault> ' . $renault->demarrer() . '<br />';
echo 'Renault> ' . $renault->carburant() . '<br />';
echo 'Renault> ' . $renault->nombreDeTestObligatoire() . '<br />';
