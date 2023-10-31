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
    include("banco_dados_conexao.php");
    try {
    $id = $_GET['id'];
      $stmt = $dbh->prepare("SELECT * FROM boneca WHERE id_boneca = ?");
      $stmt->bindParam( 1, $id );
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
  }
?>


    <h1>Alterar Boneca</h1>
    <form action="alterar_action.php" method="POST">
    id: <input type="text" name="id_boneca" value="<?php echo $result[0]["id_boneca"];?>" readonly>
    <br><br>
    modelo: <input type="text" name="modelo" value="<?php echo $result[0]["modelo"];?>">
    <br>

    <input type="submit" value="Ok">
    </form>

    <br><br>
<a href="index.php">Voltar</a>
</body>
</html>