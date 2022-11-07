<?php
class Empleado_model extends CI_Model{
    public function cargarEmpleado(){
        $sql = "SELECT * FROM tbl_empleado";
        $resultado = $this->db->query($sql);
        return $resultado->result();
    }

    public function cargarEmpleadoId($idEmpleado){
        $sql = "SELECT * FROM tbl_empleado WHERE idEmpleado = $idEmpleado";
        $resultado = $this->db->query($sql);
        return $resultado->result();
    }
}
?>