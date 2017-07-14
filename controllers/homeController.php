<?php
class homeController extends controller{
    
    public function index(){
        $usuario = new usuario();
        $usuario->setName('Michel');

        $dados = array(
            'name' => $usuario->getName()
        );

        $this->loadTemplate('home', $dados);
    }

    public function sobre(){
        $dados = array();
        $this->loadTemplate('sobre', $dados);
    }

}

