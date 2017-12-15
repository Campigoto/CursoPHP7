<?php

$conn = new PDO("sqlsrv:Database=AutoCenter;server=CAMPIGOTO-AVELL\ECSQLEXPRESS;ConnectionPooling=0","campigoto","036239");


$stmt = $conn->prepare("SELECT * FROM dbo.Cliente ORDER BY CLI_NOME");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {

  foreach ($row as $key => $value) {

    echo "<strong>".$key. ":</strong>".$value."<br/>";
  }
  echo "---------------------------------------------</br>";
}

//var_dump($results);

 ?>
