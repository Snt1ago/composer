<?php

use Sofket\App\Libs\Controlador;

class Articulo_Controller extends Controlador
{
    public function __construct()
    {
        // parent::__construct();
    }

    function listar()
    {
        //echo "contro aritculos metod listar";
        $this->cargarVista('articulos/listar');
    }
    // '
    //     base+articulos
    //     public function index()
    //     {
    //         $alumnos = $this->model->get();
    //         $this->render('articulos/index');
    //     }'

    // public function nuevo($param = null)
    // {

    //     lista los articulos
    //     $this->render('articulo/nuevo');

    // } //end listar
    // public function listar($param = null)
    // {
    //     $modelo = new Articulo();
    //     $lista  = $modelo->listar();
    //     $this->render('articulos/listar', $lista);
    // } //end listar

}