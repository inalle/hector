<?php

require("conexion.php");


if(	
	isset($_POST['nom_rifle']) && !empty($_POST['nom_rifle']))
	{
		
		$nom_rifle=$_POST['nom_rifle'];
		

		mysql_query("INSERT INTO `rifle` (`tipo_rifle`) values('$nom_rifle')") or die(mysql_error());																																					        
				echo "Datos Insertados";		
			}

		else{
			echo "Problemas datos";
		}
?>