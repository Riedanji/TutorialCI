<?php

class Mlogin extends CI_Model{

    public function ingresar($usu, $pass){
        $this->db->select('p.id, u.idUsuario, p.nombre, p.appaterno, p.apmaterno');
        $this->db->from('usuario u');
        $this->db->join('persona p', 'p.id = u.idPersona');
        $this->db->where('u.nomusuario',$usu);
        $this->db->where('u.clave',$pass);

        $resultado=$this->db->get();
        if($resultado->num_rows()==1){
            $r= $resultado->row();

            $s_usuario=array(
                's_idPersona'=>$r->id,
                's_idUsuario'=>$r->idUsuario,
                's_usuario'=>$r->nombre." ".$r->appaterno." ".$r->apmaterno.""
            );
            $this->session->set_userdata($s_usuario);
            return 1;
        }else{
            return 0;
        }
        
    }
}