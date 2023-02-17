
<!-- creo una variabile con un paragrafo a mia scelta -->
<?php 
    $paragrafoNostraScelta = 'Primo esercizio PHP!, mi fa un po schifo questo linguaggio';

    $parolaCensored = str_replace($_GET['parolaDaCensurare'], '***', $paragrafoNostraScelta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP primo esercizio</title>
</head>
<body>

    <!-- 1, stampo a schermo il paragrafo e la sua lunghezza --> 
    <p> 
        <?php echo $paragrafoNostraScelta ?> -
        Il paragrafo ha  <?php echo strlen ($paragrafoNostraScelta) ?> parole
    </p>  


    <!-- 2, Una parola da censurare viene passata dall'utente tramite parametro GET. -->
    <form action="" method="GET">

            <input type="text" name="parolaDaCensurare" placeholder="Inserisci la parola da censurare">
            <button>
                Cerca
            </button>
    <p>
        La parola da censurare è : <?php echo $_GET['parolaDaCensurare']; ?>
    </p>     


    <!-- 3, stampo a schermo il paragrafo con gli asterischi al posto della parole censurata -->
    <p>
        <?php echo $parolaCensored ?>
    </p>


    <!-- 4, definisco la lunghezza del paragrafo con gli asterischi al posto della parola censurata -->
    <p>Il paragrafo è lungo:
        <strong><?php echo strlen($parolaCensored) ?></strong>
        parole
    </p>
    </form>
   
</body>
</html>