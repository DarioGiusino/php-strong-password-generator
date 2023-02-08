<?php
$length = (int)isset($_GET['psw-length']) ?? null;

$permit = array();

function random_psw($length, $args = array())
{

    $length = (int)$_GET['psw-length'];

    $permit = array(); //contiene i gruppi di caratteri permessi

    //se non è stato passato alcun argomento, rendo tutti i gruppi disponibili
    //altrimenti rendo disponibili solo i gruppi abilitati in $args
    if (empty($args)) {
        $permit[] = 'alfa_upper';
        $permit[] = 'alfa_lower';
        $permit[] = 'number';
        $permit[] = 'simbol';
    } else {
        $permit = $args;
    }

    $characters = '';

    if (in_array('alfa_upper', $permit)) {
        $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }

    if (in_array('alfa_lower', $permit)) {
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
    }

    if (in_array('number', $permit)) {
        $characters .= '1234567890';
    }

    if (in_array('simbol', $permit)) {
        $characters .= '!"£$%&/()=?\'^@#[]*';
    }

    // controllo di sicurezza: se è stato passato un valore errato a $length, prendo 32 come default
    if (!is_numeric($length)) {
        $length = 32;
    }

    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= substr($characters, rand(0, strlen($characters) - 1), 1);
    }
    return $password;
}

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Password generator</title>
</head>

<body>
    <!-- header -->
    <header class="text-center">
        <h1>Strong Password Generator</h1>
        <h4>Genera una password sicura</h4>
    </header>

    <!-- main -->
    <main class="container">
        <!-- alert -->
        <div class="alert alert-primary my-4" role="alert">
            <?= $length ? random_psw($length, $permit) : 'Inserisci la lunghezza desiderata' ?>
        </div>

        <!-- form -->
        <form action="#" method="GET">
            <div class="mb-3 w-50">
                <label for="psw-length" class="form-label">Lunghezza password:</label>
                <input type="number" class="form-control" id="psw-length" min="1" max="32" step="1" name="psw-length">
            </div>
            <button class="btn btn-primary">Invia</button>
        </form>
    </main>

</body>

</html>