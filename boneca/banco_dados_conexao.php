<?php
// conectar ao banco de dados
        $host='localhost';
        $db = 'boneca';
        $username = 'root';
        $password = '';
        $dbh = new PDO('mysql:host='.$host.';dbname='.$db.'', $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>