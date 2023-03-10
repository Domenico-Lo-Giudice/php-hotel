<?php

/**
 * Descrizione
 * Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
 * Stampare tutti i nostri hotel con tutti i dati disponibili
 * 
 * Inziate in modo gradueale.
 * Prima stampate in pagina i dati, senza preoccuparvi dello stile.
 * Dopo aggiuntee Bootstrap e mostrate le informazioni con una tabella.
 * 
 */

 
 $hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

    foreach($hotels as $informations) {
        // var_dump($informations);
    foreach($informations as $info) {
        // var_dump($info);
    }
}


   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($hotels as $key => $info) : ?>
      <tr>
        <th scope="row"> <?php echo $key ?> </th>
        <td> <?php echo $info['name'] ?> </td>
        <td> <?php echo $info['description'] ?> </td>
        <td> <?php echo $info['parking'] ?> </td>
        <td> <?php echo $info['vote'] ?> </td>
        <td> <?php echo $info['distance_to_center'] ?> </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
</body>
</html>