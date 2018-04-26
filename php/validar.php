
<?php


	require("conexion.php");

	$username=$_POST["usuario"];
	$passw=$_POST["pass"];


	
	$sql2=mysql_query("SELECT * FROM tiradores WHERE nombre='$username'")or die(mysql_error()); 
	if($f2=mysql_fetch_array($sql2)){
		if($pass==$f2['contraseña']){
			

			echo "<script>location.href='index.php'</script>";
		}
		
	}
?>