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

class Products_controller extends Controller{

    function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this -> view -> render($this, 'products', 'Productos OPshop');
    }
    
    public function buscarCategoria($tittle){
          if(!empty($tittle)){
            $r = Category::getBy("tittle", $tittle);
            if(is_null($r)){
                echo "No existe esa categoría";
            }else{
                print_r($r);
            }
        }
    }
    
    public function allProducts(){
        $products = Product::getAll();
        
        //print_r($products);
        header("Content-type: application/json;charset=utf-8");
        echo json_encode($products);
    }
    
    public function imagesAll($idProduct){
        $img = Pics::getBy("idProduct", $idProduct);
        return print_r ($img->getTittle());
    }
    
    public function singleProduct($idProduct){
        //$this -> view -> render($this, 'single', 'Producto OPshop');
        $product = Product::where("idProduct", $idProduct);
        //print_r($product);
        header("Content-type: application/json;charset=utf-8");
        
        echo json_encode($product);
          
    }
    
    public function single(){
        $this -> view -> render($this, 'single', 'Producto OPshop');
    }
}