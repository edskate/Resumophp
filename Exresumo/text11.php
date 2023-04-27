<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintax Heredoc</title>
</head>

<body>
    <h1>Sintaxe Heredoc.</h1>
    <?php
$canal = "Curso em Video";
$ano = date('Y');
echo <<< TESTE
Olá galera do $canal!
Tudo bem com Vocês?
Como está sendo ano de $ano?
Abraços! \u{1F596}
TESTE;
?>

</html>