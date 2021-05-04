<?php
$faq = [
  [
    "domanda" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
    "risposta" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."
  ],
  [
    "domanda" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
    "risposta" => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno."
  ],
  [
    "domanda" => "Perché il mio account è associato a un paese?",
    "risposta" => "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:"
  ],
];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Google FAQ</title>
  </head>
  <body>
    <div class="container">
      <?php foreach ($faq as $key => $value) { ?>
        <h3><?php echo $value["domanda"]?></h3>
        <p><?php echo $value["risposta"]?></p>
      <?php } ?>
    </div>
  </body>
</html>