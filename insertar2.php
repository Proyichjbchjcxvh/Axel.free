<meta charset="utf-8">
<?php
include("conexion.php");
?>

<center><img src="Encabezado.PNG"></center><br>
<center><table border="1">
	<p><font color= "black"; size= 5; face= "Tahoma"><center>COLEGIO DE ESTUDIOS CIENTIFICOS Y TECNOLOGICOS DEL ESTADO DE MÉXICO. PLANTEL IXTLAHUACA</center></font></p>

<p><font color= "black"; size= "3"; face= "Tahoma"><center><strong>Elaborado por:</strong>iña Canuto.
<strong>Grupo:</strong>404<strong>Número de lista:</strong>23<br>
<strong>Fecha de elaboración:</strong>19 de 2024<strong>Hora:</strong>12:00 a.m.
<p><font color= "black"; size= 5; face= "Tahoma"><center>INSERTAR VENTA</center></font></p>


<form action=""method="post">
        <tr>
                <td>
Matricula</td><td><input required name="a"><br></td>
<td rowspan="5">
    <img src="insano.png" width="150" height="150">
</td></tr>
<tr>
    <td>
Fecha_I</td><td><input name="b"><br></td></tr>
<tr>
    <td>
Hora</td><td> <input name="c"><br></td></tr>
<tr>
    <td>
Actividad</td><td><input name="d"><br></td></tr>
<tr>
    <td>
Responsable</td><td><input name="e"><br></td></tr>
<tr>
    <td>
Materiales</td><td><input name="f"><br></td></tr>
<tr>
<td>
Producto</td><td><input name="g"><br></td></tr>
<tr>
<td>
Evidencia</td><td><input name="h"><br></td></tr>
<tr>
    <td>
<td colspan="2">
<center><input type="submit" value="insertar">
</form></center>
</td></tr>
</table>
<?php
if($_POST){
    $m=$_POST['a'];
    $f=$_POST['b'];
    $h=$_POST['c'];
    $a=$_POST['d'];
    $r=$_POST['e'];
    $ma=$_POST['f'];
    $pro=$_POST['g'];
    $e=$_POST['h'];
   

    $sql=("insert into 9_usuario (Matricula,Fecha_i,Hora,actividad,responsable,materiales,producto,evidencia)values ('$m','$f','$h','$a','$r','$ma','$pro','$e')") or die(mysql_error());
    if(mysqli_query($con,$sql)){
        echo"<script>
             alert('El registro se guardo correctamente');
             </script>";
    } 
    else{
         echo"<script>
                alert('El alumno ya existe en la base de datos no de puede dar de alta');
                </script>";
    }
}
?>
<p><center><img src="pie.PNG"></center>

