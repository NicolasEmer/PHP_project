<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Prod</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: lightblue;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: lightblue;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .delete-link {
            color: red;
        }

        .edit-link {
            color: orange;
        }

        .back-link-container{
            text-align: center;
        }

        .back-link {
            display: inline-block;
            padding: 10px;
            background-color: lightblue;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .back-link:hover {
            background-color: #2196F3;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th></th>
            <th></th>
            <th>Id</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Tamanho</th>
        </tr>

        <?php foreach ($listar->rows as $item) : ?>
            <tr>
                <td><a href="../controllers/Controller_main.php?page=pagina_deletar&id=<?= $item['id'] ?>" class="delete-link">[X]Excluir</a></td>
                <td><a href="../controllers/Controller_main.php?page=pagina_ini_edit&id=<?= $item['id'] ?>" class="edit-link">Editar</a></td>
                <td><?= $item['id'] ?></td>
                <td><?= $item['nome'] ?></td>
                <td><?= $item['marca'] ?></td>
                <td><?= $item['tamanho'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <p></p>
    <div class="back-link-container">
        <a href="../pages/logou.php" class="back-link">Voltar</a>
    </div>
</body>

</html>
