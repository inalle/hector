<?php

require("conexion.php");


//REGISTRO DE DATOS
if(	
	isset($_POST['nom_categoria']) && !empty($_POST['nom_categoria']))
	{
		
		$tipo_categoria=$_POST['nom_categoria'];
		

		mysql_query("INSERT INTO `categoria` (`tipo_categoria`) values('$tipo_categoria')") or die(mysql_error());																																					        
				echo "Datos Insertados";		
			}

		else{
			echo "Problemas datos";
		}
?>