<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php 
    require 'Caneta.php';

    $c1 = new Caneta("Bic", "azul", 0.5);

    print_r($c1);
   //$c1->modelo = "Bic cristal";
  // $c1->setModelo("Bic");
   //$c1->setPonta(0.5);

   // echo "O modelo da minha caneca é " .$c1->getModelo(). " com a ponta " . $c1->getPonta();
    ?>
    </pre>
</body>
</html>