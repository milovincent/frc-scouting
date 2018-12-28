<?php
$db = new PDO('mysql:host=your-server;dbname=your-db;charset=utf8mb4', 'user', 'pass');
echo 'connected, uploading ';
echo implode($_FILES);
echo "\n";
echo implode($_POST);

//INSERT INTO table_name (column1, column2, column3, ...)
//VALUES (value1, value2, value3, ...);
$keys = array();
$values = array();
$tableString = "`id` INT, ";
foreach($_POST as $key=>$value){
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
$nRows = $db->query("select max(id) from results")->fetchColumn(); 
//$affectedrows = $db->prepare("UPDATE results SET :name = :value WHERE id =  $nRows");

echo $nRows . "\n";
//foreach($_POST as $key=>$value){
  //	echo $key; echo ":"; echo $value; echo "\n"; 
    //$affectedrows->execute(array(':name'=>$key, ':value'=> $value));
//}


?>
