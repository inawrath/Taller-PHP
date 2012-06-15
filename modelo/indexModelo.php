<?php

class indexModelo {

    public function primeraConsulta() {
        require_once 'BD.php';
        $db = new BD();

        try {
            $sentencia = "SELECT id, numero, nombre " .
                    "FROM ejemplo";
            $consulta = $db->prepare($sentencia);
            $consulta->execute();
        } catch (PDOException $e) {
            print_r($e);
            
            return NULL;
        }
        
        while($objeto = $consulta->fetch()){
            $primeroConsulta['id'] = $objeto['id'];
            $primeroConsulta['numero'] = $objeto['numero'];
            $primeroConsulta['nombre'] = $objeto['nombre'];
            $lista[] = $primeroConsulta;
        }
		
		return $lista;
    }

}

?>