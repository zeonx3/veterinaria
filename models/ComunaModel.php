<?php
class ComunaModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getComunas()
    {
        # code...
    }

    public function getComunaId($id)
    {
        # code...
    }

    public function getComunaNombre($nombre)
    {
        $com = $this->_db->prepare("SELECT id FROM comunas WHERE nombre = ?");
        $com->bindParam(1, $nombre);
        $com->execute();

        return $com->fetch();
    }

    public function getComunasRegion($region)
    {
        # code...
    }

    public function addComuna($nombre, $region)
    {
        $com = $this->_db->prepare("INSERT INTO comunas(nombre, region_id) VALUES(?, ?)");
        $com->bindParam(1, $nombre);
        $com->bindParam(2, $region);
        $com->execute();

        $row = $com->rowCount();
        return $row;
    }

    public function editRegion($id, $nombre, $region)
    {
        # code...
    }
}
