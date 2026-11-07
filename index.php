<?php
    $file = fopen("log.csv", "r");
    if(!$file){ // Equivale a $file === false
        die("Errore nell'apertura del file");
        // die($msg) interrompe l'esecuzione dello script 
        // viene stampato a schermo il messaggio $msg
    }
    // Non mi serve avere un ramo else perchè in caso di errore
    // Lo script viene interrotto a riga 4

    // Se il file esiste e viene aperto correttamente:
    while(!feof($file)){ // feof($file) === false
        $row = fgets($file);
        $element = explode("," , $row);

        echo "<table><tr><td>" . $element[0] . "</td><td>" . $element[1] . "</td><td>". $element[2] .
        "</td><td>" . $element[3] . "</td><td>" . $element[4] . "</td><td>" . $element[5] . "</td><td>" . 
        "</td><td>" . $element[6] . "</td><td>" . $element[7] . "</td><td>" . $element[8] . "</td></tr></table>";

        // devo usare explode con "," come separatore
        // e $row come stringa da separare
        // avrò in output un array di stringhe da visualizzare
        // nella <tr></tr>. Ciascun elemento di questo array
        // dev'essere in una cella <td></td>
        //echo $row;
        //echo "<br />";
        // Questo ciclo viene eseguito finchè il file ha dei contenuti da leggere
    }

    fclose($file);



?>