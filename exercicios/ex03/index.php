<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAnipulação String</title>
</head>
<body>
    <h1>Manipulação de Strings</h1>
    <?php 
        $nome = "Gustavo";
        $sobrenome = "Guanabara";

        echo "Olá, $nome $sobrenome \u{1F596}";
        echo "olá, $nome";

        const ESTADO = "Pará";
        echo "Moro no " . ESTADO;

        const CURSO = "Curso em Vídeo \u{1F499}";
        echo "Adoro o " . CURSO;

    ?>
</body>
</html>