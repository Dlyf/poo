<?php
function recherche($tab, $elem) {
  if (!is_array($tab))
    die('Vous devez envoyer un ARRAY'); //équivalent du throw new exception. On arrete les traitements. On arrête les traitements.

  $position = array_search($elem, $tab); // quoi, ou);
  return $position;
}

//-----------------------------------------//
$liste = array('orange', 'pomme', 'fraise');
echo recherche($liste, 'cerise') . 'ici<hr />';
echo recherche($liste, 'orange') . '<hr />';
echo recherche('fsdf', 'orange') . '<hr />';
echo 'traitements...';
