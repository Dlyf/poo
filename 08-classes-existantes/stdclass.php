<?php
// Exemple StdClass :
$tab = array('orange', 'pomme', 'fraise');
$objet = (object) $tab; // Cast : Transformation
var_dump($objet);
echo '<hr />';
$objet2 = new StdClass();
$objet2->titre = 'POEC'; // inférence tous cpùùe les tableaux array avec $tab[]

echo $objet2->titre;

/* Un objet fait parti de la StdClass (classe standard de PHP) lorsque celui-ci est orphelin et n'a pas été instancié par un "new".
Sur l'exemple ci-dessus, l'objet est issu d'aucune classe en particulier.
*/
