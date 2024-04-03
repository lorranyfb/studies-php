<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco</title>
</head>
<body>
    <pre>
    <?php 
        require_once "./ContaBanco.php";

        $p1 = new ContaBanco();
        $p2 = new ContaBanco();

        $p1->abrirConta("CC");
        $p1->setNumConta(11111111);
        $p1->setDono("Laura");
        $p2->abrirConta("CP");
        $p2->setNumConta(2222222);
        $p2->setDono("José");

        $p2->sacar(150);

        $p1->fecharConta();
        $p2->fecharConta();

        print_r($p1);
        print_r($p2);

    ?>
    </pre>
</body>
</html>