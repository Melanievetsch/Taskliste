<?php

require_once('pdo.php');

echo "<h1>Taskliste</h1>";
echo "<table cellpadding='5' cellspacing='5'>";
echo "<tr><th>Title</th><th>Due Date</th></tr>";

foreach ($all as $task) {

    $detail_link = "task-detail.php?taskid=" . $task->getId();

    echo "<tr>";
    echo "<td>" . $task->getTitle() . "</td>";
    echo "<td>" . $task->getDuedate() . "</td>";
    echo "<td><a href='$detail_link' >Details</td>";
    echo "</tr>";

}

echo "</table>";



?>