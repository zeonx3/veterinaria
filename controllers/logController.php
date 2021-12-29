<?php

use models\log;

class logController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    
        $this->verificarMensajes();

        $this->_view->assign('titulo', 'log');
        $this->_view->assign('title', 'Registros');
        $this->_view->assign('logs', log::select('id','ip','id_usuario','ingreso','salida')->orderBy('id_usuario')->get());
        $this->_view->renderizar('index');
    }

    public function view($id = null)
    {
        $this->verificarlog($id);
        $this->verificarMensajes();
        $this->_view->assign('titulo', 'log');
        $this->_view->assign('title', 'log');
        $this->_view->assign('log', log::find($this->filtrarInt($id)));
        $this->_view->renderizar('view');

    }

    private function verificarlog($id)
    {
        if(!$this->filtrarInt($id)){
            $this->redireccionar('log');
        }

        $log = log::select('id')->find($this->filtrarInt($id));

        if(!$log){
            $this->redireccionar('log');
        }

    }

}


?>