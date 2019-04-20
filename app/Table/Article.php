<?php

namespace App\Table;


 class Article{

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