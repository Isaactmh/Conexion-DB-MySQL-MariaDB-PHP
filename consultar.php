<?php

class consultataller{

    public $clienteid;

    public function consultartaller()
    {
        $model = new Conexion;
        $con = $model->conectar();
        $sql = "SELECT cliente_id, nombre, telefono, servicio, precio, estado, tecnico FROM taller WHERE cliente_id=:cliente_id";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':cliente_id', $this->clienteid, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }
}
