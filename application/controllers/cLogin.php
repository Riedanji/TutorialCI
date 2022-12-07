<?php

class Clogin extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('mLogin');
    }

    public function index(){
        $data['mensaje']=" ";
        $this->load->view('persona/vlogin',$data);
    }

    public function ingresar(){
        $usu=$this->input->post('txtusuario');
        $pass=$this->input->post('txtclave');
        $res=$this->mLogin->ingresar($usu, $pass);

        if($res==1){
            $this->load->view('persona/vupdpersona');
        }else{
            $data['mensaje']="Usuario o contraseña incorrecto!!";
            $this->load->view('persona/vlogin', $data);
        }
    }
}
