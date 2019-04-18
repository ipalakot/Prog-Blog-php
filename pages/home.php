<?php

$pdo = new PDO('mysql:dbname=blog;host=localhost', 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$count= $pdo->exec('INSERT INTO  articles SET titre ="Mon Titre", date="' .date('Y-m-d H:i:s'). '"');


?>