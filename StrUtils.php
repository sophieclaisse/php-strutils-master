<?php
/**
 * Created by PhpStorm.
 * User: sophc
 * Date: 28/01/2019
 * Time: 15:36
 */

class StrUtils
{

    private $str;

    public function __construct(){

        $this->str= "Ma chaine de caractères à traiter";

    }

    public function getStr()
    {
        return $this->str;

    }

     public function getBold(){
        return "<b>$this->str</b>";
    }

    public function getItalic(){
        return "<i>$this->str</i>";
    }
    public function getUnderline(){
        return "<u>$this->str</u>";
    }

    public function getCapitalize(){
        return strtoupper($this->str);
    }

    public function getUglify(){
        return "<b><i><u>$this->str</u></i></b>";
    }
}


