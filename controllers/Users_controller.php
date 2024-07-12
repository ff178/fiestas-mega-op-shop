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

class Users_controller extends Controller{

    function __construct() {
        parent::__construct();
    }
    
       
    public function register(){
       
     
    }
       
    public function singUp(){
       $this -> view -> render($this, 'register', 'Sing up');
        
       $keys = Users::getKeys();
             unset($keys[0]);
             unset($keys[5]);
            
        
        $_POST["idUsers"] = null;
        $_POST["type"] = 0;
        
        
       
        
       $this->validateKeys($keys, filter_input_array(INPUT_POST));
       
       $user = Users::instanciate($_POST);
       $r = $user ->create();
         
       //header("Content-type: application/json;charset=utf-8");    
       $g = User_bl::crearSesion($user);
       print_r($g);
       
     
    }
    
    public function enter(){
      
    }
    
    public function salir(){
        User_bl::cerrarSesion();
    }

    

    public function singIn(){
        $this -> view -> render($this, 'login', 'Sing In');
        if(filter_input(INPUT_POST, "username") != null && filter_input(INPUT_POST, "pass") != null){
            $usr = Users::getBy("username", filter_input(INPUT_POST, "username"));
            $pass = Users::getBy("pass", filter_input(INPUT_POST, "pass"));
            
            //print_r($usr);
            //print_r($pass);
            if(!is_null($usr) && !is_null($pass)){
                $r = User_bl::login($usr,filter_input(INPUT_POST, "pass"));
                //header("Content-type: application/json;charset=utf-8");
                json_encode($r); 
            }
            
        }
    }
    
  
    
    
    public function car(){
        $this -> view -> render($this, 'car', 'Carrito de compras OPshop');
    }
    
    public function verificarUsername($username,$ajax = true){
        $r = Users::getBy("username", $username);
        if($ajax){
            $r = (empty($r))? 0 : 1;
            echo $r;
        }else{
            $r = (empty($r))? 0 : $r;
            return $r;
        }
    }
    
    public function verificarCorreo($email,$ajax = true){
        $r = Users::getBy("email", $email);
        if($ajax){
            $r = (empty($r))? 0 : 1;
            echo $r;
        }else{
            $r = (empty($r))? 0 : $r;
            return $r;
        }
    }

}

