<?php

class mUsuario extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function guardarUsuario($paramusu){
        $campos = array(
            'nomUsuario'=>$paramusu['nomUsuario'],
            'clave'=>$paramusu['clave'],
            'idPersona'=>$paramusu['idPersona'],
            
        );
        $this->db->insert('usuario', $campos);
        
        
    }
}