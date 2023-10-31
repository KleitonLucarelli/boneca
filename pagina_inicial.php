<?php session_start();?>
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    Olá, <?php echo  $_SESSION["login"];?>!
    <br><br>
    <a href="cadastrar_boneca_form.php">Cadastrar Boneca</a>
    <br><br>
    <a href="lista.php">BONECAS CADASTRADAS</a>
</body>
</html>