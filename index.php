<?php
$length = isset($_GET['psw-length']);
$permit = array();


if (isset($_GET['letters'])) {
    $permit = array('alfa_upper', 'alfa_lower');
};

if (isset($_GET['numbers'])) {
    $permit = array('number');
};

if (isset($_GET['numbers']) && isset($_GET['letters'])) {
    $permit = array('number', 'alfa_upper', 'alfa_lower');
};

include 'includes/functions.php';

if ($length) {
    session_start();

    $_SESSION['password'] = random_psw($length, $permit);

    header('Location: result.php');
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

        <!-- form -->
        <form action="#" method="GET">
            <!-- password length -->
            <div class="mb-3 w-50">
                <label for="psw-length" class="form-label">Lunghezza password:</label>
                <input type="number" class="form-control" id="psw-length" min="1" max="32" step="1" name="psw-length">
            </div>

            <!-- letter check -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="letters" name="letters">
                <label class="form-check-label" for="letters">
                    Lettere
                </label>
            </div>
            <!-- number check -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="numbers" name="numbers">
                <label class="form-check-label" for="numbers">
                    Numeri
                </label>
            </div>

            <button class="btn btn-primary">Invia</button>
        </form>
    </main>

</body>

</html>