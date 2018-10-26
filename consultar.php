<?php
        $sql = "SELECT cliente_id, nombre, telefono FROM clientes WHERE cliente_id=:cliente_id";
        
        $stmt = $conn->prepare($sql); //Preparamos la consulta
        
        $stmt->bindParam(':cliente_id', $this->clienteid, PDO::PARAM_INT); //Enviamos los datos de la consulta, en este caso el ID del cliente
        
        $stmt->execute(); //Ejecutamos nuestra consulta
