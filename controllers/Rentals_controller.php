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

class Rentals_controller extends Controller{

    function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this -> view -> render($this, 'rentals', 'Alquileres OPshop');
    }
    
    public function allRentals(){
        $rents = Rental::getAll();
        
        //print_r($products);
        header("Content-type: application/json;charset=utf-8");
        echo json_encode($rents);
    }
    
    public function singleRental($idRental){
        //$this -> view -> render($this, 'single', 'Producto OPshop');
        $rent = Rental::where("idRental", $idRental);
        //print_r($product);
        header("Content-type: application/json;charset=utf-8");
        
        echo json_encode($rent);
          
    }
    
    public function single(){
        $this -> view -> render($this, 'singleRentals', 'Renta OPshop');
    }

}

