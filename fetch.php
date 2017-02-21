<?php
function dump($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";

}

require_once "DBtaskloader.php";
require_once "pdo.php";

echo "<h1>Fetch Modes</h1>";

//prepared Statement
$statement = DB::get()->prepare("SELECT * FROM task WHERE id BETWEEN :start AND :end");

//ausführen mit PDO::FETCH_NUM
$statement->execute(array(':start' => 0, ':end' => 3));
$data = $statement->fetchAll(PDO::FETCH_NUM);
echo '<h2>PDO::FETCH_NUM</h2>';
//dump($data);
?>