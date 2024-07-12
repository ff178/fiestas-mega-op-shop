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
class Car extends Model {

    protected static $table = "Car";
    private $idCar;
    private $idUsers;
    private $qProduct;
    private $qService;
    private $qRental;
    
    private $has_one = array(
       'Owner' => array(
           'class' => 'Users',
           'join_as' => 'idUsers',
           'join_with' => 'idUsers',
           'join_table' => 'Car'
       ),
       'Ticket' => array(
           'class' => 'ticket',
           'join_as' => 'idCar',
           'join_with' => 'idCar',
           'join_table' => 'ticket'
       )
    );
    
    private $has_many = array(
       'Products' => array(
           'class' => 'Product',
           'my_key' => 'idCar',
           'other_key' => 'idProduct',
           'join_other_as' => 'idCar',
           'join_self_as' => 'idCar',
           'join_table' => 'CarProduct'
       ),
       'Services' => array(
           'class' => 'Service',
           'my_key' => 'idCar',
           'other_key' => 'idService',
           'join_other_as' => 'idCar',
           'join_self_as' => 'idCar',
           'join_table' => 'CarService'
       ),
       'Rentals' => array(
           'class' => 'Rental',
           'my_key' => 'idCar',
           'other_key' => 'idRental',
           'join_other_as' => 'idCar',
           'join_self_as' => 'idCar',
           'join_table' => 'CarRental'
       )
    );
     
     

    function __construct($idCar, $idUsers, $qProduct, $qService, $qRental) {
        $this->idCar = $idCar;
        $this->idUsers = $idUsers;
        $this->qProduct = $qProduct;
        $this->qService = $qService;
        $this->qRental = $qRental;
    }

    public function getMyVars() {
        return get_object_vars($this);
    }

    function getIdCar() {
        return $this->idCar;
    }

    function getIdUsers() {
        return $this->idUsers;
    }

    function getQProduct() {
        return $this->qProduct;
    }

    function getQService() {
        return $this->qService;
    }

    function getQRental() {
        return $this->qRental;
    }

    function setIdCar($idCar) {
        $this->idCar = $idCar;
    }

    function setIdUsers($idUsers) {
        $this->idUsers = $idUsers;
    }

    function setQProduct($qProduct) {
        $this->qProduct = $qProduct;
    }

    function setQService($qService) {
        $this->qService = $qService;
    }

    function setQRental($qRental) {
        $this->qRental = $qRental;
    }
    
    function getHas_one() {
        return $this->has_one;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }

    function getHas_many() {
        return $this->has_many;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }



}
