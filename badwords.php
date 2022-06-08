<?php
/*
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

*/

$paragrafo = "
<p>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt rerum minima quis porro sequi dolore pariatur fugit officiis possimus, eveniet dolorem laudantium voluptas molestias repudiandae corrupti sed necessitatibus et voluptatem ducimus maiores? Quisquam assumenda provident natus magni voluptate. 
</p>
<p>
In, dicta voluptatem. Ut expedita laborum, eius quo inventore culpa quis quibusdam numquam nemo corporis modi tempore est laboriosam dolorem tenetur asperiores! Ipsa, accusamus tempore minus dolor maiores minima dolore quas quod ipsum dignissimos aut explicabo, itaque quasi rem eum? Esse corrupti a voluptate. Nobis adipisci minus recusandae qui fuga sed commodi, repudiandae voluptatum maxime. Illum dolorem sunt quo incidunt inventore magni perspiciatis? Obcaecati animi optio voluptatem. Facilis in, eos doloremque et unde eaque vitae laboriosam labore voluptates suscipit, sunt, vel officiis ea ratione aliquam id tenetur similique mollitia aut excepturi itaque obcaecati? Dignissimos natus consequatur fugit ex tempora voluptatum eum, obcaecati libero architecto modi atque quaerat voluptas at aperiam id rem animi necessitatibus neque tempore quo. 
</p>
<p>
Dolorem alias adipisci amet quasi aspernatur fuga repellat eaque fugit. Asperiores, sequi? Inventore dignissimos maiores soluta repellat optio velit, corrupti dolore deleniti sint ad, fugiat distinctio necessitatibus libero culpa esse? Earum et doloremque beatae temporibus soluta, culpa neque fuga officia doloribus praesentium, quasi incidunt possimus excepturi distinctio consectetur? Dolor deserunt eum animi incidunt accusamus quo minus nesciunt eveniet, aut, error eligendi doloribus fugit impedit, fuga corrupti nihil expedita dicta modi. 
</p>
<p>
Consequatur, quas? Iure quod fugit fugiat? Culpa reprehenderit laborum doloremque optio sequi sint blanditiis! Possimus dolores est eius modi soluta quam aperiam incidunt molestiae tenetur. Beatae repellendus eaque iste deleniti labore odit, repellat quam totam aspernatur cupiditate sapiente aliquid accusantium corporis minima culpa ratione! Eos voluptate rerum saepe fugit rem cupiditate nesciunt libero sequi doloribus aliquam perferendis ratione est excepturi maiores consequatur quod a, assumenda vitae exercitationem! Iste culpa ducimus vitae et consequatur. Repellendus, perspiciatis!</p>";

$bedword = $_GET['bw'];

$paragrafo_corretto = str_replace($bedword, '...', $paragrafo);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h2>Il paragrafo è il seguente:</h2>
<p><?php echo $paragrafo  ?></p>
<h3>Il paragrafo è lungo <?php echo strlen($paragrafo) ?> caratteri</h3>
<hr>
<h2>Il paragrafo corretto è il seguente:</h2>
<p><?php echo $paragrafo_corretto  ?></p>
<h3>Il paragrafo corretto è lungo <?php echo strlen($paragrafo_corretto) ?> caratteri</h3>
  
</body>
</html>