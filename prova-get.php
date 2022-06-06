
<?php

// var_dump si urilizza in fase di sviluppo/debug ber leggere i contenuti degli array
echo "<pre>";
var_dump($_GET);
echo "</pre>";

// con $_GET ottendo tutti i dati presenti nella query string

// gestisco i dati con tutta la logica (chgiamate DB ecc)
$nome = $_GET['nome'];
$cognome = $_GET['cognome'];

// sitassi concatenata
//$nome_cognome = $nome .' '. $cognome;

// sintassi in stringa (tipo template literal) -> ci devono essere i doppi apici
$nome_cognome = "$nome $cognome";

$saluto = "Ciao $nome_cognome";

$colori = ['giallo','rosso','blu'];


echo "<pre>";
print_r($colori);
echo "</pre>";

echo "<pre>";
var_dump($colori);
echo "</pre>";

$stringa = "Oggi stiamo imparando il PHP";

$stringa_esplosa = explode(' ',$stringa);
echo "<pre>";
print_r($stringa_esplosa);
echo "</pre>";

$stringa2 = " Oggi stiamo imparando il PHP ";
$stringa3 = trim($stringa2);
echo "->$stringa2<-<br>";
echo "->$stringa3<-<br>"; // stampo la stringa senza spazi

$stringa4 = str_replace('PHP','lignuaggio lato server',$stringa3);
echo "$stringa4<br>";

echo 'La stringa 4 è lunga ' . strlen($stringa4);

echo 'La parola PHP dentro stringa 2 è in posizione ' . strpos($stringa2, 'PHP');

$salutiamo = "Ciao ";

$salutiamo .= $nome_cognome;


// dopo genero l'utput HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET PHP</title>
</head>
<body>
  <h1>Prova GET</h1>
  <h2><?php echo $saluto; ?> </h2>
  <h3>Il mio colore preferito è il <?php echo $colori[0]; ?></h3>
  <h4><?php echo $salutiamo; ?></h4>
</body>
</html>