<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\exercicio.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização de Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href="index.php" class="roxo2">Voltar para lista</a>
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="roxo1">Ver sem formatação</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
               include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); 
            ?>
        </div>
    </main>
    <footer class="rodape">
        GIRATECH © <?= date('Y'); ?>
    </footer>
</body>

</html>