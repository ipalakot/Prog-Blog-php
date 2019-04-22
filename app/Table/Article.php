<?php

namespace App\Table;

use  App\App;


 class Article{

     public static function getLast(){
         return App::getDb()->query('SELECT * FROM articles', __CLASS__);
     }

     public function __get($key){

         $method= 'get' .ucfirst($key);
         return $this->$method();
 }

     public function getURL(){
         return 'index.php?p=article$id=' . $this->id;
     }

     public function getExtrait(){

         $html= '<p>' . substr($this->contenu, 50). '...</p>';

         $html .= '<p> <a href="'.$this->getURL().'"> Voir la Suite </a></p>';
         return $html;
 }



}


?>