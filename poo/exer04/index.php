<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UEC</title>
</head>
<body>
    <?php
    require_once './Lutador.php';
    require_once './Luta.php';
    
    $l = array();
    $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75,68.9,"Leve", 11,2,1);
    $l[1] = new Lutador("PutScript", "Brasil", 29, 1.68, 57.8, "Leve", 14, 2, 3);
    $l[2] = new Lutador("Dead Code", "Austrália", 30, 1.90, "Médio", 2, 2, 0);
    $l[3] = new Lutador("Paul", "EUA", 30, 1.70, "Médio", 2, 1, 1);
    
    $UEC01 = new Luta();
    $UEC01->marcarLuta($l[0],$l[3]);
    $UEC01->lutar();

    
    ?>
</body>
</html>