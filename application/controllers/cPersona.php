<?php

class CPersona extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mPersona');
        $this->load->model('mUsuario');
        $this->load->library('encryption');
    }

    public function index()
    {
        $this->load->view('persona/vpersona');
        
    }

    public function guardar(){
        $param['dni']=$this->input->post('txtDNI');
        $param['nombre']=$this->input->post('txtNombre');
        $param['appaterno']=$this->input->post('txtApPaterno');
        $param['apmaterno']=$this->input->post('txtApMaterno');
        $param['email']=$this->input->post('txtEmail');
        $param['fecnac']=$this->input->post('datFecnac');
        //usuario
        $paramusu['nomUsuario']=$this->input->post('txtUsuario');
        $paramusu['clave']=$this->input->post('txtClave');


        $lastId=$this->mPersona->guardar($param);

        if($lastId>0)
        {
            $paramusu['idPersona']=$lastId;
            $this->mUsuario->guardarUsuario($paramusu);
        }
    } 
    
    public function actualizarDatos(){
        $param['nombre']=$this->input->post('txtNombre');
        $param['appaterno']=$this->input->post('txtApPaterno');
        $param['apmaterno']=$this->input->post('txtApMaterno');
        $param['email']=$this->input->post('txtEmail');

        $this->mPersona->actualizarDatos($param);

        redirect('cpersona/index');
    }
}
?>