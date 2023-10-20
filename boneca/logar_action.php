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
            echo "Erro!";
        }
		
		$dbh = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/><br><a href='index.php'>voltar</a>";
		die();
	}

?>