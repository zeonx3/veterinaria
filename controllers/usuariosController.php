<?php
use models\Usuario;

class usuariosController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        # code...
    }

    public function view($id = null)
    {
        # code...
    }

    public function login()
    {
        # code...
    }

    public function logout()
    {
        # code...
    }

    public function edit($id = null)
    {
        # code...
    }

    public function editPassword($id = null)
    {
        # code...
    }

    public function add($funcionario = null)
    {
        # code...
    }

    #############################################
    private function verificarUsuario($id)
    {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('funcionarios');
        }

        $usuario = Usuario::select('id')->find($this->filtrarInt($id));

        if (!$usuario) {
            $this->redireccionar('funcionarios');
        }
    }
}
