<?php
// conectar ao banco de dados
        $host='localhost';
        $db = 'id21509263_root';
        //$username = 'id21509263_root';
      //  $password = '#Magia123';
      $username = 'root';
      $password = '';
        $dbh = new PDO('mysql:host='.$host.';dbname='.$db.'', $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
