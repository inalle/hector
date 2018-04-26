<?php

require("conexion.php");


if(	
	isset($_POST['distancia']) && !empty($_POST['distancia']))
	{
		
		$distancia=$_POST['distancia'];
		

		mysql_query("INSERT INTO `distancias` (`num_metros`) values('$distancia')") or die(mysql_error());																																					        
				echo "Datos Insertados";		
			}

		else{
			echo "Problemas datos";
		}
?>