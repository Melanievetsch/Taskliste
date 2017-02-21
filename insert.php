<?php
require_once "DBtaskloader.php";

$query ="INSERT INTO 
user(id,username, password, name, lastname, created, updated) 
VALUES(NULL,'test@test.ch','test123','Test','User', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";

$num = DB::get()->exec($query);

echo "Erfolgreich $num Benutzer erstellt mit id= " . DB::get()->lastInsertId();



?>