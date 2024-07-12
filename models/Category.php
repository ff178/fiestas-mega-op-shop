<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author ff
 */
class Category extends Model {

    protected static $table = "Category";
    private $idCategory;
    private $tittle;
    private $descrip;
    
    private $has_many = array(
       'Products' => array(
           'class' => 'Product',
           'my_key' => 'idCategory',
           'other_key' => 'idProduct',
           'join_other_as' => 'idCategory',
           'join_self_as' => 'idCategory',
           'join_table' => 'Product'
       )
    );

    function __construct($idCategory, $tittle, $descrip) {
        $this->idCategory = $idCategory;
        $this->tittle = $tittle;
        $this->descrip = $descrip;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }
    
    function getIdCategory() {
        return $this->idCategory;
    }

    function getTittle() {
        return $this->tittle;
    }

    function getDescrip() {
        return $this->descrip;
    }

    function setIdCategory($idCategory) {
        $this->idCategory = $idCategory;
    }

    function setTittle($tittle) {
        $this->tittle = $tittle;
    }

    function setDescrip($descrip) {
        $this->descrip = $descrip;
    }

    function getHas_many() {
        return $this->has_many;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }




}
