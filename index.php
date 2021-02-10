<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./classes/Frutas.php";

    $banana = new Frutas();
    $banana->setCor("amarelo");
    $banana->setNome("Banana");
    $banana->setPeso("10kg");

    echo "A fruta {$banana->getnome()} e cor {$banana->getCor()} e tem peso de {$banana->getpeso()}"
    ?>
</body>
</html>