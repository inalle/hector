<?php

require("conexion.php");


if(	
	isset($_POST['nom_modalidad']) && !empty($_POST['nom_modalidad']))
	{
		
		$nom_modalidad=$_POST['nom_modalidad'];
		

		mysql_query("INSERT INTO `modalidad` (`tipo_modalidad`) values('$nom_modalidad')") or die(mysql_error());																																					        
				echo "Datos Insertados";		
			}

		else{
			echo "Problemas datos";
		}
?>