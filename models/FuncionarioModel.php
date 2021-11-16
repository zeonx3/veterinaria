<?php
class FuncionarioModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getFuncionarios()
    {
        $fun = $this->_db->query("SELECT f.id, f.nombre, f.email, c.nombre as comuna FROM funcionarios f INNER JOIN comunas c ON f.comuna_id = c.id ORDER BY id DESC");

        return $fun->fetchall();
    }

    public function getFuncionarioId($id)
    {
        $fun = $this->_db->prepare("SELECT f.id, f.rut, f.nombre, f.email, f.comuna_id, f.created_at, f.updated_at, c.nombre as comuna FROM funcionarios f INNER JOIN comunas c ON f.comuna_id = c.id WHERE c.id = ?");
        $fun->bindParam(1, $id);
        $fun->execute();

        return $fun->fetch();
    }

    public function addFuncionario($rut, $nombre, $email, $direccion, $comuna)
    {
        $fun = $this->_db->prepare("INSERT INTO funcionarios(rut, nombre, email, direccion, comuna_id, created_at, updated_at) VALUES(?, ?, ?, ?, ?, now(), now() )");
        $fun->bindParam(1, $rut);
        $fun->bindParam(2, $nombre);
        $fun->bindParam(3, $email);
        $fun->bindParam(4, $direccion);
        $fun->bindParam(5, $comuna);
        $fun->execute();

        $row = $fun->rowCount();
        return $row;
    }

    public function editFuncionario($id, $rut, $nombre, $email, $direccion, $comuna)
    {
        # code...
    }
}
