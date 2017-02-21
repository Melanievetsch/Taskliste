<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//dieser if code ist wichtig, um eine gewisse Sicherheit gegenüber SQL-Angriffen zu gewähren
//wenn keine taskid mitgegeben wird, stelle ich die taskliste wieder dar
if (empty($_GET['taskid']) || !is_numeric($_GET['taskid'])) {
    require "taskliste.php";

    //stoppe die ausgabe hier
    exit();
}

require_once "DB.php";

$id = $_GET['taskid'];
$query ="DELETE FROM task WHERE id =$id;";
$num = DB::get()->exec($query);

if($num >0) {
    echo "Erfolgreich Benutzer mit id = $id gelöscht";
} else {
    echo "Benutzer mit id = $id nicht gefunden";
}

?>