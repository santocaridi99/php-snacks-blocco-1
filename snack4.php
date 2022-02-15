<?php
// dichiaro array vuoto dove inserirò numeri casuali
$nrandom=[];
// finche l'array non sarà minore di 15 
// aggiungerà n numero random all'array
while(count($nrandom)<15){
    $n=rand(1,100);
    // aggiunge il numero con un semplice  =
    // lo fa solo se condizione è verificata
    // ovvero se non è presente già nell'array
    if(!in_array($n,$nrandom)){
        $nrandom[]=$n;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15 random numbers</title>
</head>
<body>
    <!-- per stampare faccio un semplice for da 1 a lunghezza del array -->
    <!-- e stampo il valore tramite la posizione -->
    <?php for($i=0;$i<count($nrandom);$i++){
        echo '<div>'.$nrandom[$i].'</div>';
    } ?>
</body>
</html>