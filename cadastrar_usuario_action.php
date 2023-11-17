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

<?php
    try {
        include("banco_dados_conexao.php");
        
        // preparar comando de INSERT
        $stmt = $dbh->prepare("insert into usuario (login,senha) values (?,?);");
        
        // substituir os ? pelo dados digitados pelo usuário
        $stmt->bindParam(1, $_POST["login"]); // "login" é o nome do campo no FORM
        $stmt->bindParam(2, $_POST["senha"]); // "senha" é o nome do campo no FORM
        		
        // executar comando SQL
        if($stmt->execute()) {
            echo "Cadastro realizado com sucesso!";
        }
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
?>  

<a href="index.php">Voltar</a>
    
</body>
</html>
