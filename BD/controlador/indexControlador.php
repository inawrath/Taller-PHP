<?php
class indexControlador{
	public function consultaUno(){
		require_once 'modelo/indexModelo.php';

		$consulta = new indexModelo();

		$primeraConsulta = $consulta->primeraConsulta();

		$cantidadConsulta = count($primeraConsulta);

		for($i = 0; $i < $cantidadConsulta; $i++){
			$primeraConsulta[$i]['valor'] = 'El valor de af es: '.$primeraConsulta[$i]['af'];
		}

		return $primeraConsulta;
	}

	public function consultaDos(){
		require_once 'modelo/indexModelo.php';

		$consulta = new indexModelo();

		$segundaConsulta = $consulta->segundaConsulta();

		$cantidadConsulta = count($segundaConsulta);

		for($i = 0; $i < $cantidadConsulta; $i++){
			$segundaConsulta[$i]['valor'] = 'El valor de af es: '.$segundaConsulta[$i]['af'];
		}

		return $segundaConsulta;
	}
}
?>