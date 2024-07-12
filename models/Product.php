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
class Product extends Model {

    protected static $table = "Product";
    private $idProduct;
    private $tittle;
    private $price;
    private $descrip;
    private $quanty;
    private $idCategory;
    private $dispon;
    
    private $has_many = array(
        'Cars' => array(
            'class' => 'Car',
            'my_key' => 'idProduct',
            'other_key' => 'idCar',
            'join_other_as' => 'idProduct',
            'join_self_as' => 'idProduct',
            'join_table' => 'CarProduct'
        ),
        'Pics' => array(
            'class' => 'Pics',
            'my_key' => 'idProduct',
            'other_key' => 'idPic',
            'join_other_as' => 'idProduct',
            'join_self_as' => 'idProduct',
            'join_table' => 'Pics'
        )
    );
    
    private $has_one = array(
        'Category' => array(
            'class' => 'Category',
            'join_as' => 'idCategory',
            'join_with' => 'idCategory',
            'join_table' => 'Product'
        )
    );

    function __construct($idProduct, $tittle, $price, $descrip, $quanty, $idCategory, $dispon) {
        $this->idProduct = $idProduct;
        $this->tittle = $tittle;
        $this->price = $price;
        $this->descrip = $descrip;
        $this->quanty = $quanty;
        $this->idCategory = $idCategory;
        $this->dispon = $dispon;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getIdProduct() {
        return $this->idProduct;
    }

    function getTittle() {
        return $this->tittle;
    }

    function getPrice() {
        return $this->price;
    }

    function getDescrip() {
        return $this->descrip;
    }

    function getQuanty() {
        return $this->quanty;
    }

    function getIdCategory() {
        return $this->idCategory;
    }

    function getDispon() {
        return $this->dispon;
    }

    function setIdProduct($idProduct) {
        $this->idProduct = $idProduct;
    }

    function setTittle($tittle) {
        $this->tittle = $tittle;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setDescrip($descrip) {
        $this->descrip = $descrip;
    }

    function setQuanty($quanty) {
        $this->quanty = $quanty;
    }

    function setIdCategory($idCategory) {
        $this->idCategory = $idCategory;
    }

    function setDispon($dispon) {
        $this->dispon = $dispon;
    }

    function getHas_many() {
        return $this->has_many;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }


}
