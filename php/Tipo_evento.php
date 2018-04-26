<?php

require("conexion.php");


if(	
		isset($_POST['tipo_evento']) && !empty($_POST['tipo_evento']))
	{
		
		$tipo_evento=$_POST['tipo_evento'];
		
		
		mysql_query("INSERT INTO `evento` (`tipo_evento`) values('$tipo_evento')") or die(mysql_error());																																					        
				echo "Datos Insertados";		
			}

		else{
			echo "Problemas datos";
		}
?>