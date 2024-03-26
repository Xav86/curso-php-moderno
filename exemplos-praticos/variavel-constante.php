<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando Variaves e Constantes no Php</title>
</head>
<body>
    <?php 
        $nome = "Gustavo";
        $sobrenome = "Gonçalves";

        const PAIS = "Brasil";

        echo "Olá, muito prazer, $nome $sobrenome! Você mora no " . PAIS;
        
    ?>
</body>
</html>