<?php

$mysqlDsn = 'mysql: host=localhost; dbname=training1';


try {
    $pdo = new PDO($mysqlDsn, $db_password = 'root', $db_user = 'root');

    foreach($pdo -> query ('SELECT * from tableaux') as $user);
    echo $user ['painter'];
}

catch(PDOException $e) {

    echo 'rr';
}