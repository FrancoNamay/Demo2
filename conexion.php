<?php
	function conexion(){

	$host = "host=dpg-cr6g0323esus73f3ct00-a";
	$port = "port=26862";
	$dbname = "dbname=dbprueba_qele";
	$user = "user=dbprueba_qele_user";
	$password = "password=dON4rpZdQpmd9oUQsC8cAckGQb1xH66W";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>
