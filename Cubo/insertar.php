<?php
 require_once("conexion.php");
class Venta extends Conexion{
	public function alta(){
		$producto = rand(1,10);
		$cliente = rand(1,10);
		$fecha = rand(1,15);
		$cantidad = rand(1,200);
		$this->sentencia = "INSERT INTO venta VALUES (null,$cliente,$fecha,$producto,$cantidad)";
		$this->ejecutarSentencia();
	}
	public function clientes(){
			$this->sentencia = "SELECT id,nombre FROM cliente";
			return $this->obtenerSentencia();
}
	public function productos(){
			$this->sentencia = "SELECT id,nombre FROM producto";
			return $this->obtenerSentencia();	
		}
		public function matriz($idp){
			$this->sentencia = "SELECT * FROM venta v,fecha f WHERE f.id = v.id_fecha AND id_producto=$idp AND f.fecha BETWEEN '2020-01-01' AND '2020-01-31' ORDER BY id_cliente";
			return $this->obtenerSentencia();
		}
}
/*$obj = new Venta();
for ($i = 0; $i<150; $i++){
	$obj->alta();
}*/
?>