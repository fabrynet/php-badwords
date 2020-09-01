<?php 
$parag = "Ciao Fabrizio, come stai? Il tuo nome è Fabrizio";
$badword = $_GET["badword"];
$parag_bad = str_replace($badword, "***", $parag);
$parag_len = strlen($parag_bad);
echo $parag_bad;
echo "<br>";
echo "Lunghezza: ". $parag_len. " caratteri.";
?>
