<?php

class postsController extends controller{

    public function index(){
        echo'POST';
    }

    public function ver($nome, $sobrenome){
        echo $nome." ".$sobrenome;
    }

}