<?php


$saluto = 'Ciao ';

$nome = $_GET['nome'] ?? 'Utente sconosciuto';

var_dump($nome);

$saluto .= $nome;

$colori = ['giallo', 'rosso', 'blu'];

$colori[] = 'verde';
var_dump($colori);

if(in_array('arancione', $colori)){
  echo '<br>Aranzione esiste';
}else{
  echo '<br>Aranzione NON esiste<br>';
}

// con die si interrompe la compilazione del codice
//die;

$user = [
  'name' => 'Ugo',
  'lastname' => 'De Ughi'
];
$user['age'] = 40; 

echo $user['name'];

var_dump($user);

// ottengo le chiavi di $user
// array_keys prende le chiavi e restituisce un array con tutte le chiavi
var_dump(array_keys($user));



// verifico se in $user esiste la chiave 'lastame'

echo 'Risultato ricerca chiave lastname in $user: ' . array_key_exists('lastname',$user);
echo '<br>Risultato ricerca chiave xxxx in $user: ' . array_key_exists('xxxx',$user);




$users = [
  [
    'name' => 'Ugo',
    'lastname' => 'De Ughi',
    'age' => 50
  ],
  [
    'name' => 'Giusppe',
    'lastname' => 'Verdi',
    'age' => 80
  ]
];

var_dump($users);
echo $users[1]['lastname'];


$maschi = ['gino','pino', 'tino'];
$femmine = ['marta', 'berta','filippa'];
$gatti = ['minu','nerina'];

$tutti = array_merge($maschi, $femmine, $gatti );

var_dump($tutti);

// cerco berta in $tutti
echo array_search('berta',$tutti);

$numero_random = rand(1,100);

echo "<br>Il numero estratto è: $numero_random";

for($i = 0; $i < 10; $i++){
  echo "<br>$i";
}

function getUniqueRandom($min, $max, $nItems){

  // creo un array vuoto
  $newArray = [];

  // verifico che min sia inferiore a max e nel caso lo correggo
  if($max < $min){
    $tmp = $max;
    $max = $min;
    $min = $tmp;
  }

  // verifico che non ci siano più items di quelli che si possono estrarre
  if($nItems > ($max - $min)){
    $nItems = $max - $min + 1;
  }

  // creo il ciclo per la creazione dei numeri random
  // finché non ho raggiunto il numero di items li escraggo e li pusho nell'array da restituire
  // con count() ottendo la lunghezza dell'array
  while(count($newArray) < $nItems ){
    // genero un numero random
    $number = rand($min, $max);
    // verifico che non sia presente. In questo caso lo pusho nell'array
    if(!in_array($number, $newArray)){
      // in JS sarebbe newArray.push(number)
      $newArray[] = $number;
    }
  }

  // restituisco l'array creato
  return $newArray;

}

$randArr = getUniqueRandom(5,1,10);

var_dump($randArr);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index PHP</title>
</head>
<body>
  <h1> <?php echo $saluto; ?> </h1>

  <ul>
    <?php for($i = 0; $i < 10; $i++){ ?>
      <!-- il codice HTML verrà ciclato -->
      <li><?php echo $i ?></li>

    <?php } ?>
  </ul>

  <ul>
    <?php for($i = 0; $i < 10; $i++): ?>
      <!-- il codice HTML verrà ciclato -->
      <li><?php echo $i ?></li>
      
    <?php endfor; ?>
  </ul>

  <ul>
    <?php 
    for($i = 0; $i < 10; $i++){ 
     
       echo "<li>$i</li>";

    }
    ?>
  </ul>


</body>
</html>