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
class ticket extends Model {

    protected static $table = "ticket";
    private $idticket;
    private $date;
    private $idCar;
    
    private $has_one = array(
       'Car' => array(
           'class' => 'Car',
           'join_as' => 'idCar',
           'join_with' => 'idCar',
           'join_table' => 'ticket'
       )
    );

    function __construct($idticket, $date, $idCar) {
        $this->idticket = $idticket;
        $this->date = $date;
        $this->idCar = $idCar;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getIdticket() {
        return $this->idticket;
    }

    function getDate() {
        return $this->date;
    }

    function getIdCar() {
        return $this->idCar;
    }

    function setIdticket($idticket) {
        $this->idticket = $idticket;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setIdCar($idCar) {
        $this->idCar = $idCar;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }


}
