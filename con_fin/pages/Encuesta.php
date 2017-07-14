<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Encuesta</title>
</head>

<body>
<form name="inicio" method="post">
<table>
<td width="345"><div align="center">Atenci&oacute;n.</div></td>
<td><div align="center">Desacuerdo.</div></td><td><div align="center">Acuerdo.</div></td>
     <tr>
		
		<td>1. Los empleados son pacientes tomando su orden.</td> 
		<td width="74"> <div align="center">
		  <input type="radio" name="tipo1" value="Desacuerdo"/>
	    </div>
	   <td width="95"> <div align="center">
	     <input type="radio" name="tipo1" value="Acuerdo"/>
	   </div></td>
	</tr>
	
    <td>2. Los empleados son educados con usted.</td>
		<td width="74"> <div align="center">
		  <input type="radio" name="tipo2" value="Desacuerdo"/>
	    </div>
	   <td width="95"> <div align="center">
	     <input type="radio" name="tipo2" value="Acuerdo"/>
	   </div></td>
	</tr>
	
	  <td>3. El servicio de los meseros es puntual.</td>
		<td width="74"> <div align="center">
		  <input type="radio" name="tipo3" value="Desacuerdo"/>
	    </div>
	   <td width="95"> <div align="center">
	     <input type="radio" name="tipo3" value="Acuerdo"/>
	   </div></td>
	</tr>
	  <td>4. La atenci&oacute;n de los empleados es la correcta.</td>
		<td width="74"> <div align="center">
		  <input type="radio" name="tipo4" value="Desacuerdo"/>
	    </div>
	   <td width="95"> <div align="center">
	     <input type="radio" name="tipo4" value="Acuerdo"/>
	   </div></td>
	</tr>
	
	<td>5. Tiene educacion los empleados hacia usted.</td>
		<td width="74"> <div align="center">
		  <input type="radio" name="tipo5" value="Desacuerdo"/>
	    </div>
	   <td width="95"> <div align="center">
	     <input type="radio" name="tipo5" value="Acuerdo"/>
	   </div></td>
	</tr>
	
<td width="345"><div align="center">Calidad del producto.</div></td>
<td><div align="center">Desacuerdo.</div></td><td><div align="center">Acuerdo.</div></td>
     <tr>
		
		<td>1. La comida se sirve caliente y/o fresca.</td>
		<td width="74"> <div align="center">
		  <input type="radio" name="tipo6" value="Desacuerdo"/>
	    </div>
	   <td width="95"> <div align="center">
	     <input type="radio" name="tipo6" value="Acuerdo"/>
	   </div></td>
	</tr>
    
	<td>2. La considera sabrosa la comida.</td>
		<td width="74"> <div align="center">
		  <input type="radio" name="tipo7" value="Desacuerdo"/>
	    </div>
	   <td width="95"> <div align="center">
	     <input type="radio" name="tipo7" value="Acuerdo"/>
	   </div></td>
	</tr>
	  
	  <td>3. El men&uacute; presenta sufiente variedad de productos.</td>
		<td width="74"> <div align="center">
		  <input type="radio" name="tipo8" value="Desacuerdo"/>
	    </div>
	   <td width="95"> <div align="center">
	     <input type="radio" name="tipo8" value="Acuerdo"/>
	   </div></td>
	</tr>
	
	<td>4. Considera la comida de calidad.</td>
		<td width="74"> <div align="center">
		  <input type="radio" name="tipo9" value="Desacuerdo"/>
	    </div>
	   <td width="95"> <div align="center">
	     <input type="radio" name="tipo9" value="Acuerdo"/>
	   </div></td>
	</tr>
	
	  <td>5. Las bebidas se sirven fr&iacute;as. </td>
		<td width="74"> <div align="center">
		  <input type="radio" name="tipo10" value="Desacuerdo"/>
	    </div>
	   <td width="95"> <div align="center">
	     <input type="radio" name="tipo10" value="Acuerdo"/>
	   </div></td>
	</tr>


    <tr>
		<td>Quejas:</td>
		<td><textarea name="quejas"></textarea></td>
	</tr>
	
     <tr>
		<td>Sugerencias:</td>
		<td><textarea name="sugerencia"></textarea></td>
	</tr>
	
	
		<td>Nombre Cliente</td>
		<td> <select name="clientes">
			<option></option>
			<?php
			include("conexion.php");
			
			$consulta_municipio=mysqli_query($conecta,"select * from Clientes order by Nombre");
			while($resultados=mysqli_fetch_array($consulta_municipio)){
			 echo '<option value='.$resultados['idClientes'].'>'.$resultados['Nombre'].'</option>';
			}
			?>
			</select>
		</td>
	</tr>
	
	
	<tr>
	  <td colspan="2"><div align="center">
	    <input type="submit" name="Guardar" value="Guardar"/>
	    <input type="button" value="Regresar" onclick="javascript:window.location='Menu.html';"/>
	    </div></td>
	</tr>
	
	
</table>
</form>			
</body>
</html>


<?php
	include("conexion.php");
	@$p1=$_POST['tipo1'];
	@$p2=$_POST['tipo2'];
	@$p3=$_POST['tipo3'];
	@$p4=$_POST['tipo4'];
	@$p5=$_POST['tipo5'];
	@$p6=$_POST['tipo6'];
	@$p7=$_POST['tipo7'];
	@$p8=$_POST['tipo8'];
	@$p9=$_POST['tipo9'];
	@$p10=$_POST['tipo10'];
	@$que=$_POST['quejas'];
	@$sug=$_POST['sugerencia'];
	@$cliente=$_POST['clientes'];
	
	   if(isset($p1) and isset($p2) and isset($p3) and isset($p4) and isset($p5) and isset($p6) and isset($p7) and isset($p8) and isset($p9) and isset($p10)  and isset($que)  and isset($sug) and isset($cliente))
	   {
		 $inserta=mysqli_query($conecta,"insert into encuesta values(NULL,'$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$que','$sug','$cliente');");
		    if($inserta)
		     {
		      echo 'Dato Insertado';
		     }
		    else
		     {
			 echo 'Dato no Insertado';
		     }
	   }
?>



