<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verifica</title>
</head>
<body>
    <!-- inicio do PHP -->
    <?php 
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cidade= $_POST["cidade"];
    $estado= $_POST["estado"];
    $comentarios= $_POST["comentarios"];
    $erro= 0;
// fala cusão 
    // verifica se o campo não está em branco
    if (empty($nome) or strstr ($nome, ' ') ==FALSE)
    {echo "Favor digitar seu nome corretamente. <br>"; $erro=1; }
    if (empty($email)<8 || strstr ($email, '@') ==FALSE)
    {echo "Favor digitar seu email corretamente. <br>"; $erro=1; }
    if (empty($cidade))
    {echo "Favor digitar seu sua cidade corretamente. <br>"; $erro=1; }
    if (empty($estado) or strstr ($nome, ' ') ==FALSE)
    {echo "Favor digitar seu nome corretamente. <br>"; $erro=1; }
    if (empty($comentarios) or strstr ($nome, ' ') ==FALSE)
    {echo "Favor digitar seu nome corretamente. <br>"; $erro=1; }
  

    ?>
    <!-- fim do PHP -->
</body>
</html>