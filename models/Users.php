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
class Users extends Model {

    protected static $table = "Users";
    
    private $idUsers;
    private $username;
    private $pass;
    private $name;
    private $email;
    private $type;
    
    private $has_many = array(
       'Cars' => array(
           'class' => 'Car',
           'my_key' => 'idUsers',
           'other_key' => 'idCar',
           'join_other_as' => 'idUsers',
           'join_self_as' => 'idUsers',
           'join_table' => 'Car'
       )
    );
    
    function __construct($idUsers, $username, $pass, $name, $email, $type) {
        $this->idUsers = $idUsers;
        $this->username = $username;
        $this->pass = $pass;
        $this->name = $name;
        $this->email = $email;
        $this->type = $type;
    }

       

    public function getMyVars() {
        return get_object_vars($this);
    }
    
    function getIdUsers() {
        return $this->idUsers;
    }

    function getUsername() {
        return $this->username;
    }

    function getPass() {
        return $this->pass;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getType() {
        return $this->type;
    }

    function setIdUsers($idUsers) {
        $this->idUsers = $idUsers;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setType($type) {
        $this->type = $type;
    }  

    function getHas_many() {
        return $this->has_many;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }



}
