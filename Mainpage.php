<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// task loader holen
require_once "DBtaskloader.php";
//require_once "tasks.php";
//$tasks = DB::get()->query("SELECT * FROM task");

// tasks aus dem task loader holen
$statement = DB::get()->query("SELECT * FROM task");
$row= $statement->fetchAll();


//$id2= $id->fetchAll();



echo "<h1>Taskliste</h1>";
echo "<table cellpadding='5' cellspacing='5'>";
echo "<tr><th>Title</th><th>Description</th><th>Due Date</th></tr>";

foreach ($row as $task) {
  //  $id= DB::get()->query("SELECT id FROM task");

   //$detail_link = "task-detail.php?taskid=" . $id;
   // $delete = "delete.php?taskid=" . $idn ;

    echo "<tr>";
    echo "<td>" . $task['id'] . "</td>";
    echo "<td>" . $task['description'] . "</td>";
    echo "<td>" . $task['duedate'] . "</td>";
  //  echo "<td><a href=$tasks >Details</td>";
 //   echo "<td><a href='$delete' >Delete</td>";
    echo "</tr>";

}

echo "</table>";

?>

