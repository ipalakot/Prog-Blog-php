<ul>
    <?php foreach (App\App::getDb()->query('SELECT * FROM articles', 'App\Table\Article') as $post): ?>



        <h2> <a href="<?= $post->url ?>"> <?= $post->titre; ?> </a> </h2>
        <p><?= $post->extrait; ?></p>



    <?php endforeach; ?>

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