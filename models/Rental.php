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
class Rental extends Model {

    protected static $table = "Rental";
    private $idRental;
    private $tittle;
    private $priceDay;
    private $descrip;
    private $quanty;
    private $pic;
    private $dispon;
    private $daysR;
    
    private $has_many = array(
       'Cars' => array(
           'class' => 'Car',
           'my_key' => 'idRental',
           'other_key' => 'idCar',
           'join_other_as' => 'idRental',
           'join_self_as' => 'idRental',
           'join_table' => 'CarRental'
       )
    );

    function __construct($idRental, $tittle, $priceDay, $descrip, $quanty, $pic, $dispon, $daysR) {
        $this->idRental = $idRental;
        $this->tittle = $tittle;
        $this->priceDay = $priceDay;
        $this->descrip = $descrip;
        $this->quanty = $quanty;
        $this->pic = $pic;
        $this->dispon = $dispon;
        $this->daysR = $daysR;
    }

    

    public function getMyVars() {
        return get_object_vars($this);
    }
    
    function getIdRental() {
        return $this->idRental;
    }

    function getTittle() {
        return $this->tittle;
    }

    function getPriceDay() {
        return $this->priceDay;
    }

    function getDescrip() {
        return $this->descrip;
    }

    function getQuanty() {
        return $this->quanty;
    }

    function getPic() {
        return $this->pic;
    }

    function getDispon() {
        return $this->dispon;
    }

    function getDaysR() {
        return $this->daysR;
    }

    function setIdRental($idRental) {
        $this->idRental = $idRental;
    }

    function setTittle($tittle) {
        $this->tittle = $tittle;
    }

    function setPriceDay($priceDay) {
        $this->priceDay = $priceDay;
    }

    function setDescrip($descrip) {
        $this->descrip = $descrip;
    }

    function setQuanty($quanty) {
        $this->quanty = $quanty;
    }

    function setPic($pic) {
        $this->pic = $pic;
    }

    function setDispon($dispon) {
        $this->dispon = $dispon;
    }

    function setDaysR($daysR) {
        $this->daysR = $daysR;
    }
    
    function getHas_many() {
        return $this->has_many;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }



}
