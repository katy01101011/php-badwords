<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>

<body>
    <?php
    // Creo la variabile con il testo
    $my_text = "Ci son due coccodrilli ed un orango tango. Due piccoli serpenti, un'aquila reale, un gatto, un topo e l'elefante: non manca più nessuno solo non si vedono i due leocorni";
    // Determino la lunghezza del testo originale
    $my_text_length = strlen($my_text);
    // Prelevo la parola da censurare dalla barra degli indirizzi
    $bad_word = $_GET["word"];
    // Sostituisco la parola da censurare con *** (replace)
    $censored_text = str_replace($bad_word, "***", $my_text);
    // Determino la lunghezza del testo censurato
    $censored_text_length = strlen($censored_text);
    ?>

    <main>
        <!-- Stampo il testo -->
        <p>
            <?php
            echo $my_text;
            ?>
        </p>
        <h3>
            La stringa originale è lunga <?php
            echo $my_text_length;
            ?> caratteri
        </h3>
        <h2>
            La parola da censurare è: <?php echo $bad_word; ?>
        </h2>
        <p>
            <?php
            echo $censored_text;
            ?>
        </p>
        <h3>
            La stringa censurata è lunga <?php
            echo $censored_text_length;
            ?> caratteri
        </h3>
    </main>
</body>

</html>

<!--
[*] Creare una variabile con un paragrafo di testo a vostra scelta.
[*] Stampare a schermo il paragrafo e la sua lunghezza.
[*] Una parola da censurare viene passata dall'utente tramite parametro GET.
[*] Dopo aver sostituito con tre asterischi (***)
[ ] tutte le occorrenze della parola da censurare,
[ ] stampare di nuovo il paragrafo e la sua lunghezza.
-->