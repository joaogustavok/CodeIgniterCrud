<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edicao</title>
</head>
<body>
<div class="container mt-5">
    <?php echo form_open('people/store') ?>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" value="<?php echo isset($people['nome']) ? $people['nome'] : '' ?>" name="nome" id="nome"
               class="form-control">
    </div>
    <div class="form-group">
        <label for="idade">Idade:</label>
        <input type="number" value="<?php echo isset($people['idade']) ? $people['idade'] : '' ?>" name="idade"
               id="idade" class="form-control">
    </div>
    <div class="form-group">
        <label for="sexo">Sexo:</label>
        <input type="text" value="<?php echo isset($people['sexo']) ? $people['sexo'] : '' ?>" name="sexo" id="sexo"
               class="form-control">
    </div>
    <input type="submit" value="Salvar" class="btn btn-primary mt-3">
    <input type="hidden" name="id" value="<?php echo isset($people['id']) ? $people['id'] : '' ?>">
    <?php echo form_close() ?>
</div>
</body>
</html>