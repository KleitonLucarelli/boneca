<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    include("banco_dados_conexao.php");
    try {
        $stmt = $dbh->prepare("update boneca set modelo=? where id_boneca = ?");
        $stmt->bindParam( 1, $_POST["modelo"] );
        $stmt->bindParam( 2, $_POST["id_boneca"] );


        if($stmt->execute()) {
            echo "Dado alterado com sucesso!";
        }
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
?>

<br><br>
<a href="lista.php">Voltar</a>
    
</body>
</html>
