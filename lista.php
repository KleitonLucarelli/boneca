<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bonecas</h1>

    <table>
        <tr>
        <th>id_boneca</th>
        <th>modelo</th>
        <th>id_inst</th>
        </tr>

    <?php
          include("banco_dados_conexao.php");
          try {
            $sth = $dbh->prepare('SELECT * from boneca');
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($result)) {
              foreach($result as $row) {
                echo "<tr>";
                echo "<td>". $row["id_boneca"] ."</td>";
                echo "<td>". $row["modelo"] ."</td>";
                echo "<td>". $row["id_inst"] ."</td>";
                echo "<td><a href='excluir.php?id=".$row["id_boneca"]."'>Excluir</a></td>";
                echo "<td><a href='alterar_form.php?id=".$row["id_boneca"]."'>Alterar</a></td>";
                echo "</tr>";
              }
            } 
            $dbh = null;
          } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
          }
        ?>

</table>

    <br><br>
<a href="index.php">Voltar</a>
    
</body>
</html>