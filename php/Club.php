<?php

require("conexion.php");


if(	
	isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['estado']) && !empty($_POST['estado']) &&
	isset($_POST['ciudad']) && !empty($_POST['ciudad']) &&
	isset($_POST['direccion']) && !empty($_POST['direccion']) &&
	isset($_POST['rfc']) && !empty($_POST['rfc']) &&
	isset($_POST['telefono']) && !empty($_POST['telefono']) &&
	isset($_POST['correo']) && !empty($_POST['correo']) &&
	isset($_POST['presidente']) && !empty($_POST['presidente']))
	{
		
		$nombre_c=$_POST['nombre'];
		$estado_c=$_POST['estado'];
		$ciudad_c=$_POST['ciudad'];
		$direccion_c=$_POST['direccion'];
		$rfc_C=$_POST['rfc'];
		$telefono_c=$_POST['telefono'];
		$correo_c=$_POST['correo'];
		$presidente_c=$_POST['presidente'];
		

		mysql_query("INSERT INTO `club` (`nombre`,`estado`,`ciudad`,`direccion`,`rfc`,`telefono`,`email`,`presidete`) values('$nombre_c','$estado_c','ciudad_c','$direccion_c','$rfc_C','$telefono_c','$correo_c','$presidente_c')") or die(mysql_error());																																					        
				echo "Datos Insertados";		
			}

		else{
			echo "Problemas datos";
		}
?>