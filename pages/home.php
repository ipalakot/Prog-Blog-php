<ul>
    <?php

        foreach ($db->query('SELECT * FROM articles') as $post): ?>

    <li>
        <a href="index.php?p=post$id=<? $post-id; ?>"> <?= $post->titre; ?> </a>
    </li>

    <?php
        endforeach;
    ?>

</ul>




<?php
/*
$db = new \App\Database('blog');
$datas =$db->query('SELECT * FROM articles');
var_dump($datas[0]->titre);


//$pdo = new PDO('mysql:dbname=blog;host=localhost', 'root','');
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
//$count= $pdo->exec('INSERT INTO  articles SET titre ="Mon Titre", date="' .date('Y-m-d H:i:s'). '"');
*/
?>