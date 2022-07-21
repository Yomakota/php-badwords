<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>

<body>
    <?php
    //salvo il paragrafo in un variabile php
    $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, quisquam nostrum. Consequuntur dicta, sint qui dolore quisquam, perspiciatis eaque illo incidunt aliquam harum facere ducimus dolorem aliquid ad officia quae.";

    // Una parola da censurare viene passata dall’utente tramite parametro GET
    $censured = $_GET["censured"];

    //sostituisco la parola censurata nel paragrafo
    $paragraph_censured = str_ireplace($censured, "***", $paragraph);
    ?>
    <h1>Badwords</h1>

    <h2>Paragrafo senza censura:</h2>
    <p>"<?php echo $paragraph; ?>"</p>

    <h3>Lunghezza stringa: <?php echo strlen($paragraph); ?></h3>

    <h4>Aggiungi all'URL la seguente stringa ?censured="parola" dove la parola è quello che vuoi censurare.</h4>

    <h2>Paragrafo censurato:</h2>
    <p>"<?php echo $paragraph_censured; ?>"</p>

    <h3>Lunghezza stringa: <?php echo strlen($paragraph_censured); ?></h3>
</body>

</html>