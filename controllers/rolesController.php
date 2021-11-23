<?php
use models\Rol;

class rolesController extends Controller
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

    public function edit($id = null)
    {
        # code...
    }

    public function add()
    {
        # code...
    }

    #########################################
    /*
    * verifica id de rol
    * @param int id
    * return roles/index
    */

    private function verificarRol($id)
    {
        if (!$this->filtrarInt($id)) {
            $this->redireccionar('roles');
        }

        $rol = Rol::select('id')->find($this->filtrarInt($id));

        if (!$rol) {
            $this->redireccionar('roles');
        }
    }
}
