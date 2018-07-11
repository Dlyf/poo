<?php
// surcharge / override : une redéfinition + surcharge me permet de prendre en compte le comportement de ma fonction d'origine et d' y ajouter u ntraitement complémentaire.
class A {
  public function calcul() { // imaginons un algo de 1000 lignes
    return 10;
  }
}
//-----------------------------------------//
class B extends A {
  public function calcul() { // redéfinition
    $nb = parent::calcul(); // surcharge "overrude". Je n'utilise pas $this->calcul() sinon elle sera récursive et la méthode s'appelera en boucle
    // parent fonctionne pour appeler une méthode d'une classe parente LORS d'une surcharge (afin d'éviter qu'elle ne s'appelle elle-même, $this->calcul(), car elle est redéfinie...) // Ici, self::calcul()  ne fonctionnerait pas, on essaierait d'appeler quelque chose de la classe courante alors que c'est un héritage) et self c'est pour tout ce qui appartient à la classe et non à lobjet comme ici.
    if($nb <= 100)
      return "$nb est inférieure ou égale à 100";
    else
      return "$nb est strictement supérieur à 100";
    }

  public function autrecalcul() {
  $nb = parent::calcul(); // il est possible d'atteindre une méthode mon parent, même s'il n'y a pas de redéfinition de surcharge.
  // echo $this->calcul(); // nous pouvons également accéder à la méthode calcul de cet objet

  }
}
//-----------------------------------------//
$objetB = new B;
echo $objetB->calcul(); // 10 est inférieur ou égale à 100 - j'ai redéclaré la méthode calcul() dans la classe Fille (B), cela s'appelle une surcharge. Je modifie légèrement le comportemnt de la fonction initiale contenu dans la classe Mère (A) via la Fille
