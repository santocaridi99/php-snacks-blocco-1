<?php
// get name
// passare all' url ?name=(inserire un nome)
$name = $_GET['name'];
// get name
// passare all' url &mail=(inserire una mail)
$mail = $_GET['mail'];
// get age
// passare all'url &age=(inserire età)
// è un intero
$age = (int) $_GET["age"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controllo Accesso</title>
</head>

<body>
    <!-- se la lunghezza della stringa di name è > 3 -->
    <!-- e(&&) se email contiene . e @ allora avrò accesso riuscito -->
    <!-- altrimenti accesso negato -->
    <!-- per vedere se una stringa ha una specifica parola  uso  funzione strpos -->
    <!-- quindi in ingresso avrò la mail e la parola da cercare  -->
    <?php if (strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@")) {
        echo '<h1>Accesso Riuscito</h1>';
    } else {
        echo '<h1>Accesso Negato</h1>';
    }
    ?>
</body>

</html>