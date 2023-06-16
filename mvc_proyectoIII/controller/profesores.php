<?php
class Profesores extends Controller{
    function __construct(){
        parent::__construct();
        parent::connectionSession(); //método que hereda, ya que la clase controller hereda de sesion
                                    // (session->controller->Profesores)

        $this->view->datos = []; //para que se cree el array cuando se haga una instancia de la clase y se inicialice
        $this->view->mensaje = "Sección profesores";
        $this->view->mensajeResultado = "";        
    }


    //este método lo que hace es cargar la tabla de profesores, trae todos los registros que se encuentre en la tabla profesores de la bd
    function render(){
        $datos = $this->model->getProfesores();      //método que se encuentra en el modelo         
        $this->view->datos = $datos;
        $this->view->render('profesores/index');
    }

    function crear(){   //para ver la vista de crear un profesor            
        $this->view->datos = []; //iguala el array a vacio
        $this->view->mensaje = "Crear profesores";
        $this->view->render('profesores/crear');
    }


    //método para registrar en la bd
    function insertarProfesor(){
        //var_dump($_POST);
        if ($this->model->insertarProfesor($_POST)){ //este método de es del módelo se encarga de hacer el INSERT en la bd, devuelve true o false
            $mensajeResultado = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Nuevo Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se Registro
                </div>';
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }

    // function detalle(){                      
    //     $this->view->datos = [];
    //     $this->view->mensaje = "Detalles del Cursos";
    //     $this->view->render('cursos/detalle');
    // }

    //método para ver la info de un profe, carga la vista detalles
    function verProfesores( $param = null ){        
        $id = $param[0];

        $datos = $this->model->verProfesores($id);   //trae los datos del estudiante con el id que se le está pasando     
        $this->view->datos = $datos; //iguala la variable que se crea en el constructor con la que se creo acá que trae todo los datos de un profe

        $this->view->mensaje = "Detalle estudiante";
        $this->view->render('estudiantes/detalle');
    }

    //actualizarcurso
    function actualizarProfesores(){
        //var_dump($_POST);
        if ($this->model->actualizarProfesores($_POST)){ //se le pasa el post por parámetro, lleva los datos del formulario

            $datos = new classProfesores();

            foreach ($_POST as $key => $value) { 
                # code...
                $datos->$key= $value; //se le da el valor a $datos que tenga la llave en la posición que va
            }

            $mensajeResultado = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Actualizacion de Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se actualizo el Registro
                </div>';
        }
        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle profesores";
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->view->render('profesores/detalle');
    }    

    //eliminarcurso
    function eliminarProfesores( $param = null ){   
        $id = $param[0];
        if ($this->model->eliminarProfesores($id)){
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Se elimino el Registro
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se elimino el Registro
                </div>';
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }
}

?>