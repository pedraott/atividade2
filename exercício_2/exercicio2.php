<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <h1>Digite um nome de cidade</h1>
    <form action="exercicio2_index.php" method="GET">
        <input type="text" name="campo_cidade"> <br />
        <input type="submit">
    </form>
    <br>
    <br>
    <a href="exercicio2_index.php?campo_cidade=foz+do+iguacu">
        <button> Verificar clima em Foz do Iguaçu</button>
    </a>
    <br>
    <br>
    <a href="exercicio2_index.php?campo_cidade=araquari">
        <button> Verificar o clima em Araquari</button>
    </a>
</body>
</html>