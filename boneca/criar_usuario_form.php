<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background-color: #e8dcfc;
    }
</style>
</head>
<body>
<form action="cadastrar_usuario_action.php" method="POST">
    Digite o login: <input required type="text" name="login">
    <br>
    Digite a senha: <input required type="text" name="senha">
    <br><br>
    <input type="submit" value="Cadastrar">
</form>
</body>
</html>