
<?php 
	function conexion()
	{
		 return $conexion=mysqli_connect("localhost","root","","software_casilleros");
		 $conexion-> set_charset("utf8");

		//return $conexion=mysqli_connect("localhost","dotacionesepp"," 8-yt!BuacwlR","software_casilleros");
		//$conexion-> set_charset("utf8");
	}

 ?>