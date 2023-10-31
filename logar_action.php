<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
session_start();
	
	include("banco_dados_conexao.php");

	try {

		$stmt = $dbh->prepare("select * from usuario where login=? and senha=?");
        $stmt->bindParam(1, $_POST["login"]);
        $stmt->bindParam(2, $_POST["senha"]);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($result)){
            $_SESSION["login"] = $result[0]["login"];
            header("Location: pagina_inicial.php");
        } else {
            echo "Erro! Você não possui uma conta no site, junste se a nós, ";
        }
		
		$dbh = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
		die();
	}

?>
<a href="criar_usuario_form.php">crie uma conta</a>
</body>
</html>