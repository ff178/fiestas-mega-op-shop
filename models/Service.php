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
class Service extends Model {

    protected static $table = "Service";
    private $idService;
    private $tittle;
    private $price;
    private $descrip;
    private $pic;
    private $dispon;
    
    private $has_many = array(
       'Cars' => array(
           'class' => 'Car',
           'my_key' => 'idService',
           'other_key' => 'idCar',
           'join_other_as' => 'idService',
           'join_self_as' => 'idService',
           'join_table' => 'CarService'
       )
    );

    function __construct($idService, $tittle, $price, $descrip, $pic, $dispon) {
        $this->idService = $idService;
        $this->tittle = $tittle;
        $this->price = $price;
        $this->descrip = $descrip;
        $this->pic = $pic;
        $this->dispon = $dispon;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getIdService() {
        return $this->idService;
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

    function getPic() {
        return $this->pic;
    }

    function getDispon() {
        return $this->dispon;
    }

    function setIdService($idService) {
        $this->idService = $idService;
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

    function setPic($pic) {
        $this->pic = $pic;
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



}
