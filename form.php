<?php

/**
 * Class Form
 * Generer un formulaire simplement
 */

class Form{

    /**
     * @var array
     * donnéess du formulaire
     */
    public $data;

    /**
     * @var string
     * Tag pourentourer le Formulaire
     */
    public $surround ='p';

    /**
     * Form constructor.
     * @param array $data Donnéess du formulaire
     */
    public function __construct($data = array()) {
    $this->data = $data;
    }

    /**
     * @param $html : code Html utilisé
     * @return string
     */
    private function surround($html){
        return"<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param $index / Index de la Valeur à recuperer
     * @return mixed|null
     */
    public function getValue($index){
        return isset($this->data[$index])? $this->data[$index] : null;
    }

    /**
     * @param $name / Index
     * @return string
     */
    public function input($name){
       return $this->surround(
           '<input type="text" name="'.$name. '" value="' .$this->getValue($name). '">'
       );
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround ('<button type="submit" > Envoyer </button>');
    }
}
