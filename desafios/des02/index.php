<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Número Aleatório</h1>
        <?php 
            $min = 0;
            $max = 1000;

            $num = mt_rand($min, $max);

            echo "<p>Gerando um número entre $min e $max <br> O valor $num</p>";
        ?>
         <button onclick="javascript:document.location.reload()">&#x1F504;Gerar outro número</button>
    </main>
</body>
</html>