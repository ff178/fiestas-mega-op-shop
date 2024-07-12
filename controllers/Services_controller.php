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

class Services_controller extends Controller{

    function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this -> view -> render($this, 'services', 'Servicios OPshop');
    }
    
     public function allServices(){
        $srv = Service::getAll();
        
        //print_r($products);
        header("Content-type: application/json;charset=utf-8");
        echo json_encode($srv);
    }
    
    public function singleServices($idService){
        //$this -> view -> render($this, 'single', 'Producto OPshop');
        $srv = Service::where("idService", $idService);
        //print_r($product);
        header("Content-type: application/json;charset=utf-8");
        
        echo json_encode($srv);
          
    }
    
    public function single(){
        $this -> view -> render($this, 'singleServices', 'Servicio OPshop');
    }
    

}
