<?php
require APPPATH . 'libraries/REST_Controller.php';

class Principal extends REST_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("Empleado_model");
    }

    public function mostrar_get(){
        $data = array('IREM 1', 'ITEM 2', 'ITEM 3');
        $this->response($data);
    }

    public function cargarEmpleado_get(){
        $data = $this->Empleado_model->cargarEmpleado();
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function cargarEmpleadoId_get($idEmpleado){
        $data = $this->Empleado_model->cargarEmpleadoId($idEmpleado);
        $this->response($data, REST_Controller::HTTP_OK);
    }
}
?>