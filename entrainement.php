<?php

$mysqlDsn = 'mysql: host=localhost; dbname=training1';


try {
    $pdo = new PDO($mysqlDsn, $db_password = 'root', $db_user = 'root');

    echo 'ee';
}

catch(PDOException $e) {

    echo 'rr';
}