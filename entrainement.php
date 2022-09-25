<?php

$mysqlDsn = 'mysql: host=localhost; dbname=training1';


$table ="games";

try {
    $pdo = new PDO($mysqlDsn, $db_password = 'root', $db_user = 'root');

    $search = 'Super%';
    
    $sql = 'SELECT games.name, games.description from games where name like ?';

   $pdoStatement = $pdo -> prepare($sql);
   $pdoStatement -> bindParam(1, $search, PDO::PARAM_STR);

   if ($pdoStatement -> execute()){

   
   while ($user = $pdoStatement -> fetch(PDO::FETCH_OBJ)){ // fetch object permet de preciser la classe qu'on utilise

        echo $user -> name;
       // echo '<pre>';
       // print_r ($user);
       // echo '<pre>';
    };  
   }

   else{
    var_dump($pdoStatement -> errorInfo());
   }

    foreach($pdo -> query ($sql)as $test){
        echo $test ['name'];
    }
  
}
    //$pdoStatement = $pdo -> prepare ($sql);
  //  $pdoStatement -> bindValue(':search', $search, PDO::PARAM_STR) ;

  /* if ($pdo -> exec()){
   echo 'ca marche';
   }

   else{
    echo 'nop';

   }} */

catch(PDOException $e) {

    echo 'rr';
}

echo memory_get_peak_usage();