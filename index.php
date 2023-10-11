<!-- 
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
-->


<?php


$length = $_GET['length'];
//var_dump($length);

$repetitions = $_GET['repetitions'];
//var_dump($repetitions);

$no_repetitions = $_GET['no_repetitions'];
//var_dump($no_repetitions);

$letters = $_GET['letters'];
//var_dump($letters);

$numbers = $_GET['numbers'];
//var_dump($numbers);

$symbols = $_GET['symbols'];
//var_dump($symbols);


?>




<!doctype html>
<html lang="en">

<head>
    <title>password</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--bootstrap-css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body style="background-color: #011633;">

    <main class="container py-5 text-center text-white">
        <h1 class="text-secondary">Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>

        <div style="border-radius: 5px;" class="bg-primary-subtle p-3 text-secondary text-start mb-3">Nessun paramentro inserito</div>

        <form style="border-radius: 5px; padding-right: 20%" action="" method="get" class="py-5 ps-5 bg-light text-black text-start">
            <div class="d-flex justify-content-between mb-5">
                <span>Lunghezza password:</span>
                <input style="border-radius: 5px; border-color:grey" type="number" name="length" id="length" placeholder="inserisci la lunghezza..." class="py-2">
            </div>

            <div class="d-flex justify-content-between mb-3">
                <span>Consenti ripetizioni di più caratteri:</span>
                <div style="margin-right: 7rem;" class="d-flex flex-column">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="repetitions" id="repetitions">
                        <label class="form-check-label" for="repetitions">
                            Sì
                        </label>
                    </div>
                    <div class="form-check mb-5">
                        <input class="form-check-input" type="radio" name="no_repetitions" id="repetitions">
                        <label class="form-check-label" for="repetitions">
                            No
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="letters" name="letters" checked>
                        <label class="form-check-label" for="letters">
                            Lettere
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="numbers" name="numbers">
                        <label class="form-check-label" for="numbers">
                            Numeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="symbols" name="symbols">
                        <label class="form-check-label" for="symbols">
                            Simboli
                        </label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>
        </form>
    </main>

</body>

</html>