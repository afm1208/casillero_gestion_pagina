
<?php 
	function conexion()
	{
		// return $conexion=mysqli_connect("localhost","cainteligentxyz_admin","X]32RF6~VW)3","cainteligentxyz_software");
		// $conexion-> set_charset("utf8");

		return $conexion=mysqli_connect("localhost","root","","software_casilleros");
		$conexion-> set_charset("utf8");
	}

 ?>