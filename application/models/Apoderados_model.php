<?php
class Apoderados_model extends CI_Model {

        public $Apoderados_nombre;
        public $Apoderados_apellido;
        public $Apoderados_rut;



        public function insertar()
                {
                        $this->Apoderados_nombre    = $_POST['nombre']; // please read the below note
                        $this->Apoderados_apellido  = "barria";
                        $this->Apoderados_rut     =  "18016262-3";

                        $this->db->insert('apoderados', $this);
                }
                public function ultimosregistros()
       {
         $query = $this->db->get("apoderados");
    return  $query->result();



       }

}










?>
