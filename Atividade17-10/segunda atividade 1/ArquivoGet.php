<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="PHP">
        <h1>
            <?php
            $nome=$_GET["nome"] ?? "";
            $senha=$_GET["senha"] ?? "";
            $senha2=$_GET["senha2"] ?? "";
            $telefone=$_GET["telefone"] ?? "";
            $DN=$_GET["data"] ?? "";
            
               // Valida se a data de nascimento é válida
               if (strtotime($DN)) {
            // Calcula a idade
            $idade = date_diff(date_create($DN), date_create('now'))->y;
            
            echo"logado com sucesso <br>";
            // Exibe a idade
            echo "Bom saber que você " . $idade . " anos. :)";
            } else {
            echo "Data de nascimento inválida.";
            }
            
            ?>
        </h1>
    </div>
</body>
</html>