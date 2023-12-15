+<!-- DEBUT
CHAINE nom

AFFICHER "Comment tu t'appel ?"
LIRE nom
AFFICHER "Bonjour ",nom
FIN -->

<?php
$name = "";
echo "Comment tu t'appelles ? ";
$name = trim(fgets(STDIN)) ;
echo "Bonjour, " . $name . "\n";
?>