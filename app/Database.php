<?php

namespace  App;

use \PDO;

class  Database{

    private $db_name;
    private $db_host;
    private $db_user;
    private $db_pass;
    private $pdo;

    public function __construct($db_name, $db_user='root', $db_pass='', $db_host='localhost'  ){
            $this-> db_name = $db_name;
            $this-> db_host = $db_host;
            $this->db_user =$db_user;
    }

    private function getPDO(){
        if ($this->pdo===null){
         $pdo = new PDO('mysql:dbname=blog;host=localhost', 'root','');
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
         $this->pdo = $pdo;
        }
        return$this->pdo;

}
    public function query($statment, $class_name){
    $req = $this ->getPDO()->query($statment);
    $datas =$req->fetchALL(PDO::FETCH_CLASS, $class_name);

    return $datas;
}

    public function prepare($statement, $attributes, $class_name){
        $req = $this-> getPDO()->prepare($statement);
        $req->execute($attributes);
        $req->fetchAll(PDO::FETCH_CLASS,$class_name);
        return $date;

    }

}