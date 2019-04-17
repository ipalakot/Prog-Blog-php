<?php


class BootstrapForm extends form{


    /**
     * @param $html : code Html utilisé
     * @return string
     */


    protected function surround($html){
        return"<div class=\"form-group\">{$html}</div>";
    }



    /**
     * @param $name / Index
     * @return string
     */
    public function input($name){
        return $this->surround(
            '<label> .$name.</label>' .
            '<input type="text" name="'.$name. '" value="' .$this->getValue($name). '" class="form-control">'
        );
    }

}