<?php
use models\servicio_tipos;

class servicio_tiposController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    
        $this->verificarMensajes();

        $this->_view->assign('titulo', 'Servicio Tipos');
        $this->_view->assign('title', 'Servicio Tipos');
        $this->_view->assign('servicio_tipos', servicio_tipos::select('id','nombre')->orderBy('nombre')->get());
        $this->_view->renderizar('index');
    }

    public function view($id = null)
    {
        $this->verificarServicio_tipos($id);
        $this->verificarMensajes();
        $this->_view->assign('titulo', 'Servicio Tipos');
        $this->_view->assign('title', 'Servicio Tipos');
        $this->_view->assign('servicio_tipos', servicio_tipos::find($this->filtrarInt($id)));
        $this->_view->renderizar('view');

    }

    public function edit($id = null)
    {
        $this->verificarServicio_tipos($id);
        
        $this->_view->assign('titulo', 'Editar Servicio Tipos');
        $this->_view->assign('title', 'Editar Servicio Tipos');
        $this->_view->assign('button', 'Editar');
        $this->_view->assign('ruta', 'servicios_tipos/view/' . $this->filtrarInt($id));
        $this->_view->assign('servicio_tipos', servicio_tipos::find($this->filtrarInt(($id))));
        $this->_view->assign('enviar', CTRL);
        

        if ($this->getAlphaNum('enviar') == CTRL)
        {
            if(!$this->getSql('nombre') || strlen($this->getSql('nombre'))< 4)
            {
                $this->_view->assign('error','Ingrese de al menos 4 cartacteres');
                $this->_view->renderizar('edit');
                exit;
            }

            $servicio_tipos = servicio_tipos::find($this->filtrarInt($id));
            $servicio_tipos->nombre = $this->getSql('nombre');
            $servicio_tipos->save();

            Session::set('msg_success','El tipo de servicio se modifico correctamente');
            $this->redireccionar('servicio_tipos/view/' . $this->filtrarInt($id));    

        }

        $this->_view->renderizar('edit');

    }

    public function add()
    {
        $this->_view->assign('titulo', 'Nuevo Servicio Tipos');
        $this->_view->assign('title', 'Nuevo Servicio Tipos');
        $this->_view->assign('button','Guardar');
        $this->_view->assign('ruta','servicio_tipos/');
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {
            $this->_view->assign('servicio_tipos', $_POST);

            if (!$this->getSql('nombre') || strlen($this->getSql('nombre')) < 4) {
                $this->_view->assign('_error','Ingrese un nombre de al menos 4 caracteres');
                $this->_view->renderizar('add');
                exit;
            }

            $servicio_tipos = servicio_tipos::select('id')->where('nombre', $this->getSql('nombre'))->first();

            if ($servicio_tipos) {
                $this->_view->assign('_error', 'La tipo de servicio ingresado ya existe... intente con otra');
                $this->_view->renderizar('add');
                exit;
            }

            $servicio_tipos = new servicio_tipos;
            $servicio_tipos->nombre = $this->getSql('nombre');
            $servicio_tipos->save();

            Session::set('msg_success','EL tipo de servicio se ha registrado correctamente');

            $this->redireccionar('servicio_tipos');
        }

        $this->_view->renderizar('add');
    }


    private function verificarServicio_tipos($id)
    {
        if(!$this->filtrarInt($id)){
            $this->redireccionar('servicio_tipos');
        }

        $servicio_tipos = servicio_tipos::select('id')->find($this->filtrarInt($id));

        if(!$servicio_tipos){
            $this->redireccionar('servicio_tipos');
        }

    }

}


?>