<?php
// $db = new PDO('mysql:host=mysql.frc.magrittescow.com;dbname=frcdata;charset=utf8mb4', 'miloszecket', 'pass4robotics');
$db = new PDO('mysql:host=localhost;dbname=frcdata;charset=utf8mb4', 'root', 'mysql');
echo 'connected, uploading ';
echo implode(' ', $_FILES);
echo "\n";
echo implode(',', $_POST);
echo "\n";
//INSERT INTO table_name (column1, column2, column3, ...)
//VALUES (value1, value2, value3, ...);
$keys = array();
$values = array();
$tableString = "`id` INT, ";
foreach(array_slice($_POST, 0, 7, TRUE) as $key=>$value){
  array_push($keys, "`".$key."`");
  array_push($values, "'".$value."'");
  $tableString = "$tableString `$key` TEXT, ";
}
$tableString = "$tableString PRIMARY KEY `id`";
echo $tableString;

$makeTable = $db->prepare("CREATE TABLE IF NOT EXISTS `results` ($tableString)");
$makeTable->execute();
$keysString = implode(',',$keys);
$valuesString = implode(',',$values);
echo $keysString . $valuesString; echo "\n";
////or something like this (this doesn't add anything but I don't know why, btw)?
//$addRow = $db->exec("INSERT INTO results (`id`) VALUES (NULL)");
$addToRow = $db->prepare("INSERT INTO results ($keysString) VALUES ($valuesString)");
$addToRow->execute();
$nRows = $db->query("select max(`id`) from results")->fetchColumn();
// $affectedrows = $db->prepare("UPDATE results SET :name = :value WHERE id =  $nRows");

// echo "NEW ROW NUMBER IS: $nRows";
// foreach(array_slice($_POST, 0, 7, TRUE) as $key=>$value){
//   	echo $key; echo ":"; echo $value; echo "\n";
//     $affectedrows->execute(array(':name'=>$key, ':value'=> $value));
// }

foreach(array_slice($_POST, 7, NULL, TRUE) as $key=>$value){
$addTimes = $db->prepare("INSERT INTO events (`id`, `timer`, `event`) VALUES ('".$nRows."', '".str_replace("_", ".", $key)."', '".$value."')");
  $addTimes->execute();

  echo $key." was the time that ".$value." happened"; echo "\n";
}
?>
