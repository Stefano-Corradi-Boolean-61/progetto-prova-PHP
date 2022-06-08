<?php
/*
stampo un testo in mase a dei parametri che arrivano in GET.
Se il parametro contiene la parola "Boolean" stampo in verde, altrimenti stampo in rosso
*/

if(empty($_GET['parola'])){
  $parola_passata = 'NESSUNA PAROLA';
}else{
  $parola_passata = $_GET['parola'];
  if($parola_passata === 'Boolean'){
    $class = 'green';
  }else{
    $class = 'red';
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP css</title>
  <style>
    .red{
      color: red;
    }
    .green{
      color:green
    }
  </style>
</head>
<body>
  <h1 > La parola che hai passato è: 
    <!-- passo dinamicamnete la classe che stampo -->
    <span class="<?php echo $class ?>"> 
      <?php echo $parola_passata ?>
    </span>
  </h1>
</body>
</html>