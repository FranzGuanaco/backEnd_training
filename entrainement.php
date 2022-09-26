<?php

$mysqlDsn = 'mysql: host=localhost; dbname=githubb';


try {
    $pdo = new PDO($mysqlDsn, $db_password = 'root', $db_user = 'root');

    /*$table = "CREATE TABLE GIoT (
        Id INT NOT NULL AUTO_INCREMENT,
        O VARCHAR (50) NOT NULL,
        MM VARCHAR (50) NOT NULL, 
        DATE INT,
        PRIMARY KEY (Id))"; 

    $pdo -> exec($table); */

    $test = "DELETE FROM GIoT WHERE O = 'BONJOUR'" ;
   
    foreach ( $pdo -> query($test) as $oh)
    print $oh ['O'];


}
  


catch(PDOException $e) {

    echo 'rr';}
