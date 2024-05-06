<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style-model.css">
    <title>CU maker</title>
</head>

<body>
    <div class="endereco">
        <?= "$rua, $numero" ?>
        <br>
        <?= "$cidade, $cep" ?>
    </div>
    <div class="contato">
        <?= "$telefone" ?>
        <br>
        <?= "$email" ?>
    </div>
    <h1><?= "$nome" ?></h1>
    <hr>
    <div class="competencias">
        <h2>Competências</h2>
        <p><?= "$competencias" ?></p>
        <h2>Idiomas</h2>
        <p><?= "$idioma" ?></p>
        <br>
    </div>
    <div class="formacao">
        <h2>Formação</h2>
        <h3><?= "$formacao" ?></h3>
        <p><?= "$formacaoc" ?></p>
        <br>
    </div>
    <div class="experiencias">
        <h2>Experiências</h2>
        <h3><?= "$experiencias" ?></h3>
        <p><?= "$experienciasc" ?></p>
        <br>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>