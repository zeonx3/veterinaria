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
        $this->_view->assign('titulo', 'Comunas');
        $this->_view->assign('title', 'Comunas');
        $this->_view->assign('comunas', $this->_comunas->getComunas());
        $this->_view->renderizar('index');
    }

    public function view($id = null)
    {
        # code...
    }

    public function edit($id = null)
    {
        # code...
    }

    public function add($region = null)
    {
        $this->verificarRegion($region);

        $this->_view->assign('titulo', 'Nueva Comuna');
        $this->_view->assign('title', 'Nueva Comuna');
        $this->_view->assign('button', 'Guardar');
        $this->_view->assign('ruta', 'regiones/view/' . $this->filtrarInt($region));
        $this->_view->assign('region', $this->_regiones->getRegionId($this->filtrarInt($region)));
        $this->_view->assign('enviar', CTRL);

        if ($this->getAlphaNum('enviar') == CTRL) {
            $this->_view->assign('comuna', $_POST);

            if (!$this->getSql('nombre') || strlen($this->getSql('nombre')) < 4) {
                $this->_view->assign('_error','El nombre debe tener al menos 4 caracteres');
                $this->_view->renderizar('add');
                exit;
            }

            $comuna = $this->_comunas->getComunaNombre($this->getSql('nombre'));

            if ($comuna) {
                $this->_view->assign('_error','La comuna ingresada y existe... intente con otra');
                $this->_view->renderizar('add');
                exit;
            }

            $comuna = $this->_comunas->addComuna($this->getSql('nombre'), $this->filtrarInt($region));

            if ($comuna) {
                Session::set('msg_success','La comuna se ha registrado correctmente');
            }else {
                Session::set('msg_error', 'La comuna no se ha registrado... intente nuevamente');
            }

            $this->redireccionar('comunas');
        }

        $this->_view->renderizar('add');
    }

    ###########################################################
     /*
    * metodo que comprueba el id de una region
    * @param int $region
    * redirecciona regiones/index
    */

    private function verificarRegion($id)
    {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('regiones');
        }

        if (!$this->_regiones->getRegionId($this->filtrarInt($id))) {
            $this->redireccionar('regiones');
        }
    }
}
