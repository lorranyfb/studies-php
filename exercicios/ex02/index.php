<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        //0X = hexadecimal 0b = binário 0 = Octal
        $num =010;
        echo "O valor é $num";

        $v = 45;
        var_dump($v); //função que mostra informações da variavel

        $num2 = 3e2; //3x10(2)
        echo "O valor é $num2";

        $num1 = (float) "950"; //coerção - força o tipo
        var_dump($num1)

        
        ?>
</body>
</html>