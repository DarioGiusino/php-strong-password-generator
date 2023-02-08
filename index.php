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
            A simple primary alert—check it out!
        </div>

        <!-- form -->
        <form action="#">
            <div class="mb-3 w-50">
                <label for="psw-length" class="form-label">Lunghezza password:</label>
                <input type="number" class="form-control" id="psw-length" min="1" step="1">
            </div>
            <button class="btn btn-primary">Invia</button>
        </form>
    </main>

</body>

</html>