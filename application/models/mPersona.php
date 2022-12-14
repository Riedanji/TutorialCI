<?php

class mPersona extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function guardar($param){
        $campos = array(
            'dni'=>$param['dni'],
            'nombre'=>$param['nombre'],
            'appaterno'=>$param['appaterno'],
            'apmaterno'=>$param['apmaterno'],
            'email'=>$param['email'],
            'fecnac'=>$param['fecnac']
        );
        $this->db->insert('persona', $campos);
        return $this->db->insert_id();
        
    }

    public function actualizarDatos($param){
        $campos = array(
            'nombre'=>$param['nombre'],
            'appaterno'=>$param['appaterno'],
            'apmaterno'=>$param['apmaterno'],
            'email'=>$param['email']
        );
        $this->db->update('persona',$campos);
        //$this->db->where('id',$this->session->userdata('s_idPersona'));

        return 1;
    }
}