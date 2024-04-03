<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
    <h1>Resultado Final</h1>
    <p>
    <?php 
    $num = $_REQUEST["numero"] ?? 0;

    $antecessor = $num - 1;
    $sucessor = $num +1;

    echo "O número escolhido foi $num";
    echo "<br>O antecessor de $num é $antecessor";
    echo "<br>O sucessor de $num é $sucessor";
    ?>
    </p>
    <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>
</html>