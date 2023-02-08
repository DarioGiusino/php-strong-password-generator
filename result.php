<?php
session_start();
if (empty($_SESSION['password'])) header('Location: index.php');

$password = $_SESSION['password'];

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
        <h1>La tua password</h1>
    </header>

    <!-- main -->
    <main class="container">
        <!-- alert -->
        <div class="alert alert-primary my-4" role="alert">
            <?= $password ?>
        </div>
    </main>

</body>

</html>