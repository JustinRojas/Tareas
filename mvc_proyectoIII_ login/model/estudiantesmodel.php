<?php

include_once 'class/estudiantes.php';
include_once 'class/grupos.php';

class EstudiantesModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getEstudiante(){        
        $items = [];

        try {
            //code...

            $stringSQL =  "SELECT id, cedula, correoelectronico, telefono, telefonocelular, 
            fechanacimiento, sexo, direccion, nombre, apellidopaterno, 
            apellidomaterno, nacionalidad, idCarreras, usuario FROM `estudiante` order by id DESC;";  

            // $stringSQL = "SELECT * FROM `curso` order by id DESC;";


            $query = $this->db->connect()->query($stringSQL);

            while ( $row = $query->fetch()){//obtiene todas las filas
                $item = new classEstudiantes();

                foreach ($row as $key => $value) {
                    # code...
                    $item->$key = $value;
                }
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $th) {
            //throw $th;
            return [];
        }
    }

    public function getGrupos(){
        $items = [];

        try {
            //code...
            $stringSQL = "SELECT * FROM `grupo` order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);

            while ( $row = $query->fetch()){//obtiene todas las filas
                $item = new classGrupos();

                foreach ($row as $key => $value) {
                    # code...
                    $item->$key = $value;
                }
                array_push($items, $item);
            }
            return $items;
            
        } catch (PDOException $th) {
            //throw $th;
            return [];
        }
    }
    public function insertarEstudiante($datos){
//# INSERT INTO curso(id, nombre, descripcion, tiempo, usuario) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
      // var_dump($datos);
try {
            //code...
            $datos['id'] = "0";
            $datos['usuario'] = "Jb";

            $stringSQL = 'INSERT INTO estudiante(id, cedula, correoelectronico, telefono, telefonocelular, 
            fechanacimiento, sexo, direccion, nombre, apellidopaterno, 
            apellidomaterno, nacionalidad, idCarreras, usuario) VALUES ( :id, :cedula, :correoelectronico, :telefono, :telefonocelular, 
            :fechanacimiento, :sexo, :direccion, :nombre, :apellidopaterno, 
            :apellidomaterno, :nacionalidad, :idCarreras, :usuario);';

        var_dump($stringSQL);
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;

        } catch (PDOException $th) {
            //throw $th;
            //var_dump($th);
            return false;
        }
    }

    public function verEstudiantes($id){
        
        try {
            $item = new classEstudiantes();
            //code...
            $stringSQL = "Select * FROM `estudiante` where id=:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id'=>$id]);

            while ( $row = $query->fetch()){//obtiene la fila
                foreach ($row as $key => $value) {
                    # code...
                    $item->$key = $value;
                   // $_SESSION['autenticado'] = true;
                }
            }
            return $item;
        } catch (PDOException $th) {
            //throw $th;
            return [];
        }           
    }
      //actualizarcurso
      public function actualizarEstudiantes($datos){
         //  var_dump($datos);
        try {
            //code... 
            $datos['usuario'] = "Jb";
            #UPDATE estudiante SET cedula='[value-2]',correoelectronico='[value-3]',telefono='[value-4]',telefonocelular='[value-5]',fechanacimiento='[value-6]',sexo='[value-7]',direccion='[value-8]',nombre='[value-9]',apellidopaterno='[value-10]',apellidomaterno='[value-11]',nacionalidad='[value-12]',idCarreras='[value-13]',usuario='[value-14]' WHERE  id='[value-1]'

            $stringSQL = 'UPDATE estudiante SET cedula=:cedula,correoelectronico=:correoelectronico,telefono=:telefono,
            telefonocelular =:telefonocelular, fechanacimiento =:fechanacimiento, 
            sexo =:sexo, direccion=:direccion, nombre=:nombre, apellidopaterno=:apellidopaterno, apellidomaterno=:apellidomaterno, nacionalidad=:nacionalidad, idCarreras=:idCarreras, usuario=:usuario WHERE id=:id ;';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;

        } catch (PDOException $th) {
            //throw $th;
            var_dump($th);
            return false;
        }
    }   

    //eliminarcurso
    public function eliminarEstudiante($id){        
        try {            
            //code...
            $stringSQL = "DELETE FROM `estudiante` WHERE id =:id;";

            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id'=>$id]);
            
            return true;
        } catch (PDOException $th) {
            //throw $th;
            var_dump($th);
            return false;
        }           
    }
}

?>