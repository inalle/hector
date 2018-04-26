<?php

require("conexion.php");


if(
	isset($_POST['nom']) && !empty($_POST['nom']) &&
	isset($_POST['apellido']) && !empty($_POST['apellido']) &&
	isset($_POST['edad']) && !empty($_POST['edad']) &&
	isset($_POST['estado']) && !empty($_POST['estado']) &&
	isset($_POST['ciudad']) && !empty($_POST['ciudad']) &&	
	isset($_POST['direccion']) && !empty($_POST['direccion']) &&
	isset($_POST['correo']) && !empty($_POST['correo']) &&
	isset($_POST['nom_club']) && !empty($_POST['nom_club']) &&
	isset($_POST['contrasena']) && !empty($_POST['contrasena']) &&
	isset($_POST['id_club']) && !empty($_POST['id_club']) &&
	isset($_POST['id_categoria']) && !empty($_POST['id_categoria']))
	{
		
		$nombre_r=$_POST['nom'];
		$apellido_r=$_POST['apellido'];
		$edad_r=$_POST['edad'];
		$estado_r=$_POST['estado'];
		$ciudad_r=$_POST['ciudad'];
		$direccion_r=$_POST['direccion'];
		$correo_r=$_POST['correo'];
		$contraseña_r=$_POST['contrasena'];
		$id_club=$_POST['id_club'];
		$id_categoria=$_POST['id_categoria'];


		

		mysql_query("INSERT INTO `tiradores` (`nombre`,`apellido`,`edad`,`estado`,`ciudad`,`direccion`,`correo`,`password`,`id_club`,`id_categoria`) values('$nombre_r','$apellido_r','$edad_r','$ciudad_r','$estado_r','$direccion_r','$correo_r','$contraseña_r','$id_club','$id_categoria')") or die(mysql_error());																																					        
				echo "Datos Insertados";		
			}

		else{
			echo "Problemas datos";
		}
?>