<?php 
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60
*/

$matches = [
  [
      'team1' => 'Acqua S.Bernardo Cantù',
      'team2' => 'Oriora Pistoia',
      'point_team_1' => 70,
      'point_team_2' => 45
  ],
  [
      'team1' => 'Fortitudo Pompea Bologna',
      'team2' => 'Dolomiti Energia Trentino',
      'point_team_1' => 82,
      'point_team_2' => 83
  ],
  [
      'team1' => 'Pallacanestro Trieste',
      'team2' => 'Virtus Roma',
      'point_team_1' => 72,
      'point_team_2' => 33
  ],
  [
      'team1' => 'Openjobmetis Varese',
      'team2' => 'Germani Basket Brescia',
      'point_team_1' => 101,
      'point_team_2' => 99
  ],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>snack 1</title>
</head>
<body>

<ul>
  <?php foreach($matches as $match): ?>
    <li>
      <?php echo $match['team1'] ?> -
      <?php echo $match['team2'] ?> |
      <?php echo $match['point_team_1'] ?> -
      <?php echo $match['point_team_2'] ?> 
    </li>
  <?php endforeach; ?>
</ul>
  
</body>
</html>