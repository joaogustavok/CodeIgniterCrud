<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People</title>
</head>
<body>
<div class="container mt-5">
    <?php echo anchor(base_url('people/create'), 'Nova Pessoa',['class'=>'btn btn-success mb-2']) ?>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Sexo</th>
            <th>Acoes</th>
        </tr>
        <?php foreach ($peoples as $people): ?>
            <tr>
                <td><?php echo $people['id'] ?></td>
                <td><?php echo $people['nome'] ?></td>
                <td><?php echo $people['idade'] ?></td>
                <td><?php echo $people['sexo'] ?></td>
                <td>
                    <?php echo anchor('people/edit/' . $people['id'], 'Editar') ?>
                    -
                    <?php echo anchor('people/delete/' . $people['id'], 'Excluir') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>