<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>shop online</title>
</head>

<body class="text-center d-flex flex-column gap-3">
    <h1>Shop OnLine</h1>
    <h5>Registrati o Accedi</h5>
    <div>
        <form method="POST" class="gap-3 d-flex flex-column align-items-center" action="Classes/users.php">
            <input type="email" name="email" id="" placeholder="inserisci email">
            <input type="password" name="psw" id="" placeholder="password">
            <label for="cc">Credit Card Expire</label>
            <label for="cc">(required)</label>
            <input type="date" name="ccdate" id="cc" required>
            <button type="submit" class="btn btn-success">Paga</button>
        </form>
    </div>
</body>

</html>