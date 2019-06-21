<?php

namespace App\Models;

use App\Core\Model;

class registros extends Model
{
    protected $table ='alumno';
 
/* public function get()
    {
        
      $lenguajes=$this->db->selectAll($this->table);
    $misLenguajes = json_decode(json_encode($lenguajes), True);
    
        return $misLenguajes; 
    }*/

 /*   public function guardarOtro( $datos)
    {
    
        $this->db->insertOtro($this->table, $datos);
    }*/

public function guardar(array $array)
    { 
    
        $this->db->insert($this->table, $array);
    }

public function getNotas(){
    
    $datos=$this->db->selectAll($this->table);
   $misDatos=  $todosPedidos = json_decode(json_encode($datos), True); 
    return $misDatos;
}


}
