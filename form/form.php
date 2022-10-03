<?php

if (isset($_POST['valier'])) {  //check du bouton de validation

    if (isset($_POST['fname'])){

        if (!empty($_POST['fname'])){
        
        }
    }

} 
$mysqlDsn = 'mysql: host=localhost; dbname=FORMULAIRE';


try{

    $pdo = new PDO ($mysqlDsn, $db_password ='root', $db_user='root');

   // $form = "CREATE DATABASE FORMULAIRE";

  /* $formTable = "CREATE TABLE FORMNAME (
    Id int not null auto_increment,
    name varchar (50) not null,
    primary key (Id))"; */

    $inser = "INSERT INTO FORMULAIRE (name) values (?)";

    $pdo ->exec($inser);
    echo 'teskt';
}

catch(PDOException $e) {

        echo 'o';
}

