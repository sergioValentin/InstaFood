<?php

//include 'cabecera.php';


//En primer lugar calculamos el instante actual:

$mesActual=date("n");
$anioActual=date("Y");
$diaActual=date("j");

//Date t dias mes L bisiesto U segundos

//Ahora la duración del mes, para ello nos situamos en el mes siguiente y restamos uno para saber el ultimo dia de este mes
 $siguienteMes=$mesActual + 1;
 $duracionMes=date("d",(mktime(0,0,0,$siguienteMes,1,$anioActual)-1));
 
 

// Obtenemos el dia de la semana del primer dia 
//Devuelve 0 para domingo, 6 para sabado

$diaSemana=date("w",mktime(0,0,0,$mesActual,1,$anioActual));

//Obtenemos el ultimo dia del mes
$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

?>

 
<html>

<head>

<LINK REL="stylesheet" HREF="../Hojas_Estilo/estiloCalendario.css" TYPE="text/css">

</head>

 

<body>


<br><br>
<table id="calendar">

	<caption><?php echo $meses[$mesActual]." ".$anioActual?></caption>

	<tr>
		<th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th><th>Sabado</th><th>Domingo</th>
	</tr>

	<tr>

		<?php
			
			$finalMes=$diaSemana+$duracionMes;
			
			//El peor de los casos es el domingo que sea dia 1 y el mes tenga 31 dias 6*7 = 42
			for($i=1;$i<=42;$i++)
		{
           	if($i==$diaSemana)
				{// determinamos en que dia empieza
						$day=1;	
				}
			if($i<$diaSemana || $i>=$finalMes)
			{			
				echo "<td>&nbsp;</td>"; // Cuadro sin numero
			}	
			else{			
				// mostramos el dia
				if($day==$diaActual)
					echo "<td class='hoy'>$day</td>";
				else
					echo "<td>$day</td>";				
				$day++;
			}
			// cuando llega al final de la semana, iniciamos una columna nueva
			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}

		}
	?>

	</tr>

</table>

</body>

</html>