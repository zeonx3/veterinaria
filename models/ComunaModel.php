<?php
class ComunaModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getComunas()
    {
        $com = $this->_db->query("SELECT c.id, c.nombre, r.nombre as region FROM comunas c INNER JOIN regiones r ON c.region_id = r.id ORDER BY c.nombre");

        return $com->fetchall();
    }

    public function getComunaId($id)
    {
        $com = $this->_db->prepare("SELECT c.id, c.nombre, c.region_id, r.nombre as region FROM comunas c INNER JOIN regiones r ON c.region_id = r.id WHERE c.id = ?");
        $com->bindParam(1, $id);
        $com->execute();

        return $com->fetch();
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
