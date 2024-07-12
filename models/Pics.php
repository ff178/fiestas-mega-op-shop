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
class Pics extends Model {

    protected static $table = "Pics";
    private $idPic;
    private $tittle;
    private $idProduct;
    
    private $has_one = array(
        'Product' => array(
            'class' => 'Product',
            'join_as' => 'idProduct',
            'join_with' => 'idProduct',
            'join_table' => 'Pics'
        )
    );

    function __construct($idPic, $tittle, $idProduct) {
        $this->idPic = $idPic;
        $this->tittle = $tittle;
        $this->idProduct = $idProduct;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getIdPic() {
        return $this->idPic;
    }

    function getTittle() {
        return $this->tittle;
    }

    function getIdProduct() {
        return $this->idProduct;
    }

    function setIdPic($idPic) {
        $this->idPic = $idPic;
    }

    function setTittle($tittle) {
        $this->tittle = $tittle;
    }

    function setIdProduct($idProduct) {
        $this->idProduct = $idProduct;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }


}
