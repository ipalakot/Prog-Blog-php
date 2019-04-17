<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" >
</head>


<body>
    <?php
        require'form.php';
        require 'BootstrapForm.php';
        $form = new BootstrapForm($_POST);
    ?>

  <form action="#"  method="post">

    <?php
        echo $form -> input('username');
        echo $form -> input('password');
        echo $form -> submit();
    ?>
  </form>
</body>
