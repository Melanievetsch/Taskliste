<?php
echo "<h2>Taskliste</h2>";

function dump($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";

}

require_once ('DBtaskloader.php');


$statement = DB::get()->query("SELECT * FROM task LIMIT 100");  // HIER: LIMIT 100
$all = $statement->fetchAll();

//dump($all);

//foreach ($all as $row) {
 //  var_dump($row);
//}

