<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lettura Dati da File CSV</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }

        table {
            margin: 20px;
            border: 2px solid #ccc;
            border-collapse: collapse; /* Mantiene i bordi puliti */
        }

        td, th {
            padding: 12px 16px;       /* Distanza identica interna in tutte le celle */
            border: 1px solid #ccc;  /* Bordi delle celle */
            text-align: center;      /* Testo centrato nelle celle */
        }
    </style>

</head>
<body>

    <?php
        $file = fopen("log.csv", "r");
        if(!$file){ // Equivale a $file === false
            die("Errore nell'apertura del file");
            // die($msg) interrompe l'esecuzione dello script 
            // viene stampato a schermo il messaggio $msg
        }
        // Non mi serve avere un ramo else perchè in caso di errore
        // Lo script viene interrotto a riga 4

        echo "<table>";
        // Se il file esiste e viene aperto correttamente:
        while(!feof($file)){ // feof($file) === false
            $row = fgets($file);
            $element = explode("," , $row);

            if($element[0] === "timestamp"){
                echo "<tr><th>" . $element[0] . "</th><th>" . $element[1] . "</th><th>". $element[2] .
                "</th><th>" . $element[3] . "</th><th>" . $element[4] . "</th><th>" . $element[5] .
                "</th><th>" . $element[6] . "</th><th>" . $element[7] . "</th><th>" . $element[8] . "</th></tr>";
            }else{
                echo "<tr><td>" . $element[0] . "</td><td>" . $element[1] . "</td><td>". $element[2] .
                "</td><td>" . $element[3] . "</td><td>" . $element[4] . "</td><td>" . $element[5] .
                "</td><td>" . $element[6] . "</td><td>" . $element[7] . "</td><td>" . $element[8] . "</td></tr>";
            }

            // devo usare explode con "," come separatore
            // e $row come stringa da separare
            // avrò in output un array di stringhe da visualizzare
            // nella <tr></tr>. Ciascun elemento di questo array
            // dev'essere in una cella <td></td>
            //echo $row;
            //echo "<br />";
            // Questo ciclo viene eseguito finchè il file ha dei contenuti da leggere
        }

        echo "</table>";

        fclose($file);

    ?>
    
</body>
</html>