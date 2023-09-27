<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>ciao</title>

    <nav class="toolbar">
        <ul>
            <li><a><ion-icon name="grid-outline"></ion-icon></a></li>
            <li><a><ion-icon name="grid-outline"></ion-icon></a></li>
            <li><a><ion-icon name="grid-outline"></ion-icon></a></li>
            <li><a><ion-icon name="grid-outline"></ion-icon></a></li>
            <li><a><ion-icon name="grid-outline"></ion-icon></a></li>
        </ul>
    </nav>
</head>
<body>

    <div id='contenitore'>
        <h1 class="scritte"> Accedi </h1>
        <form action="esempio.php" method="post">
            <input type="hidden" name="action" value="login">
            <label for="username" class="scritte"> Nome </label>
            <input type="text" name="username" id="username" placeholder="inserisci l'username">
            <label for="password" class="scritte"> password </label>
            <input type="text" name="password" id="password" placeholder="inserisci la password">
            <input type="submit" name="invia" id="invia">
        </form>
        <a class="scritte" href="registrati.php">non sei iscritto? registrati</a> 
    </div>   
    <div class="ciao">

    </div>
        

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>   
</body>
</html>