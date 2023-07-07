<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro prod</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container-forms{
            text-align: center;
        }

        .forms {
            margin: 20px;
            
        }
    
        label {
            display: block;
            margin-bottom: 5px;
        }
    
        input[type="text"],
        input[type="number"] {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
        }
    
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
       }
    
        .back-link-container {
            margin: 20px;
            text-align: center;
        }
    
        .back-link {
            text-decoration: none;
            color: #007bff;
        }
    </style>

</head>
<body>
    <div class="container-forms">
        <div class="forms">
            <form action="../controllers/Controller_main.php?page=pagina_registro" method="post" >
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome"><br>
                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="marca"><br>
                <label for="tamanho">Tamanho:</label>
                <input type="number" name="tamanho" id="tamanho"><br>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>

    <p></p>

    <div class="back-link-container">
        <a href="../pages/logou.php" class="back-link">Voltar</a>
    </div>
</body>
</html>