<?php
$date = date("d M Y");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home page</title>
</head>

<body>
    <header>
        <h2>Title of the page</h2>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="container py-3">
        <section>

            <h3>Main section</h3>
            <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum</p>
            <p>Bonjour, nous somme le <?= $date ?></p>

            <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum</p>
            <p>Bonjour, nous somme <?= $date ?></p>
            <h3>Formulaire</h3>
            <form class="d-flex flex-column w-50" action="" method="POST">
                <label for="login">identifiant</label>
                <input type="text" id="login" name="login">
                <label for="password">mot de passe</label>
                <input type="password" id="password" name="password">
                <button type="submit" name="submit">Enregistrer</button>
            </form>
        </section>
        <section>
            <h3>Secondary section</h3>
        </section>
        <section>
            <h3>Secondary section</h3>
        </section>
    </main>
    <footer>
        <h3>Footer of the page</h3>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>