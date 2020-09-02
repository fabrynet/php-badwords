<?php

// Creare una variabile con un paragrafo di testo.
// Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *.

$parag = "Ciao Fabrizio, come stai? Il tuo nome è Fabrizio";

$badword = $_GET["badword"];
$goodword = "***";

$parag_good = str_replace($badword, $goodword, $parag);
$parag_len = strlen($parag_bad);

echo $parag_good;
echo "<br>";
echo "Lunghezza: ". $parag_len. " caratteri.";

?>
