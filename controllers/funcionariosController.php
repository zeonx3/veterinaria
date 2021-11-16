<?php
class funcionariosController extends Controller
{
    private $_funcionarios;

    public function __construct()
    {
        parent::__construct();
        $this->_funcionarios = $this->loadModel('Funcionario');
    }

    public function index()
    {
        $this->_view->assign('titulo','Funcionarios');
        $this->_view->assign('title','Funcionarios');
        $this->_view->assign('funcionarios', $this->_funcionarios->getFuncionarios());
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

        if (!$this->_funcionarios->getFuncionarioId($this->filtrarInt($id))) {
            $this->redireccionar('funcionarios');
        }
    }
}
