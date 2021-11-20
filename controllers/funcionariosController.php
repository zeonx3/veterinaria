<?php
use models\Funcionario;
use models\Comuna;

class funcionariosController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_view->assign('titulo','Funcionarios');
        $this->_view->assign('title','Funcionarios');
        $this->_view->assign('funcionarios', Funcionario::with('comuna')->orderBy('id','DESC')->get());
        $this->_view->renderizar('index');
    }

    public function view($id = null)
    {
        $this->verificarFuncionario($id);

        $this->_view->assign('titulo','Funcionarios');
        $this->_view->assign('title','Funcionarios');
        $this->_view->assign('funcionario', Funcionario::with('comuna')->find($this->filtrarInt($id)));
        $this->_view->renderizar('view');
    }

    public function edit($id = null)
    {
        # code...
    }

    public function add()
    {
        # code...
    }

    ######################################################
    /*
    * valida el id de un funcionrio
    * @params int $id
    * return funcionarios/index
    */
    private function verificarFuncionario($id)
    {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('funcionarios');
        }

        $funcionario = Funcionario::select('id')->find($this->filtrarInt($id));

        if (!$funcionario) {
            $this->redireccionar('funcionarios');
        }
    }
}
