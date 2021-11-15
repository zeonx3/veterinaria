<?php
class comunasController extends Controller
{
    private $_comunas;
    private $_regiones;

    public function __construct()
    {
        parent::__construct();
        $this->_regiones = $this->loadModel('Region');
        $this->_comunas = $this->loadModel('Comuna');
    }

    public function index()
    {
        $this->verificarMensajes();

        $this->_view->assign('titulo', 'Comunas');
        $this->_view->assign('title', 'Comunas');
        $this->_view->assign('comunas', $this->_comunas->getComunas());
        $this->_view->renderizar('index');
    }

    public function view($id = null)
    {
        $this->verificarComuna($id);
        $this->verificarMensajes();

        $this->_view->assign('titulo', 'Comuna');
        $this->_view->assign('title', 'Comuna');
        $this->_view->assign('comuna', $this->_comunas->getComunaId($this->filtrarInt($id)));
        $this->_view->renderizar('view');
    }

    public function edit($id = null)
    {
        # code...
    }

    public function add()
    {

        $this->_view->assign('titulo', 'Nueva Comuna');
        $this->_view->assign('title', 'Nueva Comuna');
        $this->_view->assign('button', 'Guardar');
        $this->_view->assign('ruta', 'comunas');
        $this->_view->assign('regiones', $this->_regiones->getRegiones());
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {
            $this->_view->assign('comuna', $_POST);

            if (!$this->getSql('nombre') || strlen($this->getSql('nombre')) < 4) {
                $this->_view->assign('_error','El nombre debe tener al menos 4 caracteres');
                $this->_view->renderizar('add');
                exit;
            }

            if (!$this->getInt('region')) {
                $this->_view->assign('_error','Seleccione una región');
                $this->_view->renderizar('add');
                exit;
            }

            $comuna = $this->_comunas->getComunaNombre($this->getSql('nombre'));

            if ($comuna) {
                $this->_view->assign('_error','La comuna ingresada y existe... intente con otra');
                $this->_view->renderizar('add');
                exit;
            }

            $comuna = $this->_comunas->addComuna($this->getSql('nombre'), $this->getInt('region'));

            if ($comuna) {
                Session::set('msg_success','La comuna se ha registrado correctamente');
            }else {
                Session::set('msg_error', 'La comuna no se ha registrado... intente nuevamente');
            }

            $this->redireccionar('comunas');
        }

        $this->_view->renderizar('add');
    }

    ###########################################################
     /*
    * metodo que comprueba el id de una comuna
    * @param int $id
    * redirecciona comunas/index
    */

    private function verificarComuna($id)
    {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('comunas');
        }

        if (!$this->_comunas->getComunaId($this->filtrarInt($id))) {
            $this->redireccionar('comunas');
        }
    }
}
